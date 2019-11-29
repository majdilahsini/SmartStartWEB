<?php 
namespace Symfony\Component\EventDispatcher
{
interface EventSubscriberInterface
{
public static function getSubscribedEvents();
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
abstract class AbstractSessionListener implements EventSubscriberInterface
{
private $sessionUsageStack = [];
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$request = $event->getRequest();
$session = $this->getSession();
$this->sessionUsageStack[] = $session instanceof Session ? $session->getUsageIndex() : null;
if (null === $session || $request->hasSession()) {
return;
}
$request->setSession($session);
}
public function onKernelResponse(FilterResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
if (!$session = $event->getRequest()->getSession()) {
return;
}
if ($session instanceof Session ? $session->getUsageIndex() !== end($this->sessionUsageStack) : $session->isStarted()) {
$event->getResponse()
->setExpires(new \DateTime())
->setPrivate()
->setMaxAge(0)
->headers->addCacheControlDirective('must-revalidate');
}
}
public function onFinishRequest(FinishRequestEvent $event)
{
if ($event->isMasterRequest()) {
array_pop($this->sessionUsageStack);
}
}
public static function getSubscribedEvents()
{
return [
KernelEvents::REQUEST => ['onKernelRequest', 128],
KernelEvents::RESPONSE => ['onKernelResponse', -1000],
KernelEvents::FINISH_REQUEST => ['onFinishRequest'],
];
}
abstract protected function getSession();
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Psr\Container\ContainerInterface;
class SessionListener extends AbstractSessionListener
{
private $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
protected function getSession()
{
if (!$this->container->has('session')) {
return null;
}
return $this->container->get('session');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
interface SessionStorageInterface
{
public function start();
public function isStarted();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function regenerate($destroy = false, $lifetime = null);
public function save();
public function clear();
public function getBag($name);
public function registerBag(SessionBagInterface $bag);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy;
class NativeSessionStorage implements SessionStorageInterface
{
protected $bags = [];
protected $started = false;
protected $closed = false;
protected $saveHandler;
protected $metadataBag;
public function __construct(array $options = [], $handler = null, MetadataBag $metaBag = null)
{
if (!\extension_loaded('session')) {
throw new \LogicException('PHP extension "session" is required.');
}
$options += ['cache_limiter'=>'','cache_expire'=> 0,'use_cookies'=> 1,'lazy_write'=> 1,
];
session_register_shutdown();
$this->setMetadataBag($metaBag);
$this->setOptions($options);
$this->setSaveHandler($handler);
}
public function getSaveHandler()
{
return $this->saveHandler;
}
public function start()
{
if ($this->started) {
return true;
}
if (\PHP_SESSION_ACTIVE === session_status()) {
throw new \RuntimeException('Failed to start the session: already started by PHP.');
}
if (filter_var(ini_get('session.use_cookies'), FILTER_VALIDATE_BOOLEAN) && headers_sent($file, $line)) {
throw new \RuntimeException(sprintf('Failed to start the session because headers have already been sent by "%s" at line %d.', $file, $line));
}
if (!session_start()) {
throw new \RuntimeException('Failed to start the session');
}
$this->loadSession();
return true;
}
public function getId()
{
return $this->saveHandler->getId();
}
public function setId($id)
{
$this->saveHandler->setId($id);
}
public function getName()
{
return $this->saveHandler->getName();
}
public function setName($name)
{
$this->saveHandler->setName($name);
}
public function regenerate($destroy = false, $lifetime = null)
{
if (\PHP_SESSION_ACTIVE !== session_status()) {
return false;
}
if (headers_sent()) {
return false;
}
if (null !== $lifetime) {
ini_set('session.cookie_lifetime', $lifetime);
}
if ($destroy) {
$this->metadataBag->stampNew();
}
$isRegenerated = session_regenerate_id($destroy);
$this->loadSession();
return $isRegenerated;
}
public function save()
{
$session = $_SESSION;
foreach ($this->bags as $bag) {
if (empty($_SESSION[$key = $bag->getStorageKey()])) {
unset($_SESSION[$key]);
}
}
if ([$key = $this->metadataBag->getStorageKey()] === array_keys($_SESSION)) {
unset($_SESSION[$key]);
}
$previousHandler = set_error_handler(function ($type, $msg, $file, $line) use (&$previousHandler) {
if (E_WARNING === $type && 0 === strpos($msg,'session_write_close():')) {
$handler = $this->saveHandler instanceof SessionHandlerProxy ? $this->saveHandler->getHandler() : $this->saveHandler;
$msg = sprintf('session_write_close(): Failed to write session data with "%s" handler', \get_class($handler));
}
return $previousHandler ? $previousHandler($type, $msg, $file, $line) : false;
});
try {
session_write_close();
} finally {
restore_error_handler();
$_SESSION = $session;
}
$this->closed = true;
$this->started = false;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$_SESSION = [];
$this->loadSession();
}
public function registerBag(SessionBagInterface $bag)
{
if ($this->started) {
throw new \LogicException('Cannot register a bag when the session is already started.');
}
$this->bags[$bag->getName()] = $bag;
}
public function getBag($name)
{
if (!isset($this->bags[$name])) {
throw new \InvalidArgumentException(sprintf('The SessionBagInterface %s is not registered.', $name));
}
if (!$this->started && $this->saveHandler->isActive()) {
$this->loadSession();
} elseif (!$this->started) {
$this->start();
}
return $this->bags[$name];
}
public function setMetadataBag(MetadataBag $metaBag = null)
{
if (null === $metaBag) {
$metaBag = new MetadataBag();
}
$this->metadataBag = $metaBag;
}
public function getMetadataBag()
{
return $this->metadataBag;
}
public function isStarted()
{
return $this->started;
}
public function setOptions(array $options)
{
if (headers_sent() || \PHP_SESSION_ACTIVE === session_status()) {
return;
}
$validOptions = array_flip(['cache_expire','cache_limiter','cookie_domain','cookie_httponly','cookie_lifetime','cookie_path','cookie_secure','entropy_file','entropy_length','gc_divisor','gc_maxlifetime','gc_probability','hash_bits_per_character','hash_function','lazy_write','name','referer_check','serialize_handler','use_strict_mode','use_cookies','use_only_cookies','use_trans_sid','upload_progress.enabled','upload_progress.cleanup','upload_progress.prefix','upload_progress.name','upload_progress.freq','upload_progress.min_freq','url_rewriter.tags','sid_length','sid_bits_per_character','trans_sid_hosts','trans_sid_tags',
]);
foreach ($options as $key => $value) {
if (isset($validOptions[$key])) {
ini_set('url_rewriter.tags'!== $key ?'session.'.$key : $key, $value);
}
}
}
public function setSaveHandler($saveHandler = null)
{
if (!$saveHandler instanceof AbstractProxy &&
!$saveHandler instanceof \SessionHandlerInterface &&
null !== $saveHandler) {
throw new \InvalidArgumentException('Must be instance of AbstractProxy; implement \SessionHandlerInterface; or be null.');
}
if (!$saveHandler instanceof AbstractProxy && $saveHandler instanceof \SessionHandlerInterface) {
$saveHandler = new SessionHandlerProxy($saveHandler);
} elseif (!$saveHandler instanceof AbstractProxy) {
$saveHandler = new SessionHandlerProxy(new StrictSessionHandler(new \SessionHandler()));
}
$this->saveHandler = $saveHandler;
if (headers_sent() || \PHP_SESSION_ACTIVE === session_status()) {
return;
}
if ($this->saveHandler instanceof SessionHandlerProxy) {
session_set_save_handler($this->saveHandler, false);
}
}
protected function loadSession(array &$session = null)
{
if (null === $session) {
$session = &$_SESSION;
}
$bags = array_merge($this->bags, [$this->metadataBag]);
foreach ($bags as $bag) {
$key = $bag->getStorageKey();
$session[$key] = isset($session[$key]) && \is_array($session[$key]) ? $session[$key] : [];
$bag->initialize($session[$key]);
}
$this->started = true;
$this->closed = false;
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
class PhpBridgeSessionStorage extends NativeSessionStorage
{
public function __construct($handler = null, MetadataBag $metaBag = null)
{
if (!\extension_loaded('session')) {
throw new \LogicException('PHP extension "session" is required.');
}
$this->setMetadataBag($metaBag);
$this->setSaveHandler($handler);
}
public function start()
{
if ($this->started) {
return true;
}
$this->loadSession();
return true;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$this->loadSession();
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeSessionHandler extends \SessionHandler
{
public function __construct()
{
@trigger_error('The '.__NAMESPACE__.'\NativeSessionHandler class is deprecated since Symfony 3.4 and will be removed in 4.0. Use the \SessionHandler class instead.', E_USER_DEPRECATED);
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeFileSessionHandler extends NativeSessionHandler
{
public function __construct($savePath = null)
{
if (null === $savePath) {
$savePath = ini_get('session.save_path');
}
$baseDir = $savePath;
if ($count = substr_count($savePath,';')) {
if ($count > 2) {
throw new \InvalidArgumentException(sprintf('Invalid argument $savePath \'%s\'', $savePath));
}
$baseDir = ltrim(strrchr($savePath,';'),';');
}
if ($baseDir && !is_dir($baseDir) && !@mkdir($baseDir, 0777, true) && !is_dir($baseDir)) {
throw new \RuntimeException(sprintf('Session Storage was not able to create directory "%s"', $baseDir));
}
ini_set('session.save_path', $savePath);
ini_set('session.save_handler','files');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
abstract class AbstractProxy
{
protected $wrapper = false;
protected $saveHandlerName;
public function getSaveHandlerName()
{
return $this->saveHandlerName;
}
public function isSessionHandlerInterface()
{
return $this instanceof \SessionHandlerInterface;
}
public function isWrapper()
{
return $this->wrapper;
}
public function isActive()
{
return \PHP_SESSION_ACTIVE === session_status();
}
public function getId()
{
return session_id();
}
public function setId($id)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the ID of an active session');
}
session_id($id);
}
public function getName()
{
return session_name();
}
public function setName($name)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the name of an active session');
}
session_name($name);
}
}
}
namespace
{
interface SessionUpdateTimestampHandlerInterface
{
public function validateId($key);
public function updateTimestamp($key, $val);
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
class SessionHandlerProxy extends AbstractProxy implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface
{
protected $handler;
public function __construct(\SessionHandlerInterface $handler)
{
$this->handler = $handler;
$this->wrapper = ($handler instanceof \SessionHandler);
$this->saveHandlerName = $this->wrapper ? ini_get('session.save_handler') :'user';
}
public function getHandler()
{
return $this->handler;
}
public function open($savePath, $sessionName)
{
return (bool) $this->handler->open($savePath, $sessionName);
}
public function close()
{
return (bool) $this->handler->close();
}
public function read($sessionId)
{
return (string) $this->handler->read($sessionId);
}
public function write($sessionId, $data)
{
return (bool) $this->handler->write($sessionId, $data);
}
public function destroy($sessionId)
{
return (bool) $this->handler->destroy($sessionId);
}
public function gc($maxlifetime)
{
return (bool) $this->handler->gc($maxlifetime);
}
public function validateId($sessionId)
{
return !$this->handler instanceof \SessionUpdateTimestampHandlerInterface || $this->handler->validateId($sessionId);
}
public function updateTimestamp($sessionId, $data)
{
return $this->handler instanceof \SessionUpdateTimestampHandlerInterface ? $this->handler->updateTimestamp($sessionId, $data) : $this->write($sessionId, $data);
}
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
interface SessionInterface
{
public function start();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function invalidate($lifetime = null);
public function migrate($destroy = false, $lifetime = null);
public function save();
public function has($name);
public function get($name, $default = null);
public function set($name, $value);
public function all();
public function replace(array $attributes);
public function remove($name);
public function clear();
public function isStarted();
public function registerBag(SessionBagInterface $bag);
public function getBag($name);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
class Session implements SessionInterface, \IteratorAggregate, \Countable
{
protected $storage;
private $flashName;
private $attributeName;
private $data = [];
private $usageIndex = 0;
public function __construct(SessionStorageInterface $storage = null, AttributeBagInterface $attributes = null, FlashBagInterface $flashes = null)
{
$this->storage = $storage ?: new NativeSessionStorage();
$attributes = $attributes ?: new AttributeBag();
$this->attributeName = $attributes->getName();
$this->registerBag($attributes);
$flashes = $flashes ?: new FlashBag();
$this->flashName = $flashes->getName();
$this->registerBag($flashes);
}
public function start()
{
return $this->storage->start();
}
public function has($name)
{
return $this->getAttributeBag()->has($name);
}
public function get($name, $default = null)
{
return $this->getAttributeBag()->get($name, $default);
}
public function set($name, $value)
{
$this->getAttributeBag()->set($name, $value);
}
public function all()
{
return $this->getAttributeBag()->all();
}
public function replace(array $attributes)
{
$this->getAttributeBag()->replace($attributes);
}
public function remove($name)
{
return $this->getAttributeBag()->remove($name);
}
public function clear()
{
$this->getAttributeBag()->clear();
}
public function isStarted()
{
return $this->storage->isStarted();
}
public function getIterator()
{
return new \ArrayIterator($this->getAttributeBag()->all());
}
public function count()
{
return \count($this->getAttributeBag()->all());
}
public function getUsageIndex()
{
return $this->usageIndex;
}
public function isEmpty()
{
if ($this->isStarted()) {
++$this->usageIndex;
}
foreach ($this->data as &$data) {
if (!empty($data)) {
return false;
}
}
return true;
}
public function invalidate($lifetime = null)
{
$this->storage->clear();
return $this->migrate(true, $lifetime);
}
public function migrate($destroy = false, $lifetime = null)
{
return $this->storage->regenerate($destroy, $lifetime);
}
public function save()
{
$this->storage->save();
}
public function getId()
{
return $this->storage->getId();
}
public function setId($id)
{
if ($this->storage->getId() !== $id) {
$this->storage->setId($id);
}
}
public function getName()
{
return $this->storage->getName();
}
public function setName($name)
{
$this->storage->setName($name);
}
public function getMetadataBag()
{
++$this->usageIndex;
return $this->storage->getMetadataBag();
}
public function registerBag(SessionBagInterface $bag)
{
$this->storage->registerBag(new SessionBagProxy($bag, $this->data, $this->usageIndex));
}
public function getBag($name)
{
$bag = $this->storage->getBag($name);
return method_exists($bag,'getBag') ? $bag->getBag() : $bag;
}
public function getFlashBag()
{
return $this->getBag($this->flashName);
}
private function getAttributeBag()
{
return $this->getBag($this->attributeName);
}
}
}
namespace Symfony\Component\Cache
{
interface ResettableInterface
{
public function reset();
}
}
namespace Psr\Log
{
interface LoggerAwareInterface
{
public function setLogger(LoggerInterface $logger);
}
}
namespace Psr\Cache
{
interface CacheItemPoolInterface
{
public function getItem($key);
public function getItems(array $keys = array());
public function hasItem($key);
public function clear();
public function deleteItem($key);
public function deleteItems(array $keys);
public function save(CacheItemInterface $item);
public function saveDeferred(CacheItemInterface $item);
public function commit();
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;
interface AdapterInterface extends CacheItemPoolInterface
{
public function getItem($key);
public function getItems(array $keys = []);
}
}
namespace Psr\Log
{
trait LoggerAwareTrait
{
protected $logger;
public function setLogger(LoggerInterface $logger)
{
$this->logger = $logger;
}
}
}
namespace Symfony\Component\Cache\Traits
{
use Psr\Log\LoggerAwareTrait;
use Symfony\Component\Cache\CacheItem;
trait AbstractTrait
{
use LoggerAwareTrait;
private $namespace;
private $namespaceVersion ='';
private $versioningIsEnabled = false;
private $deferred = [];
protected $maxIdLength;
abstract protected function doFetch(array $ids);
abstract protected function doHave($id);
abstract protected function doClear($namespace);
abstract protected function doDelete(array $ids);
abstract protected function doSave(array $values, $lifetime);
public function hasItem($key)
{
$id = $this->getId($key);
if (isset($this->deferred[$key])) {
$this->commit();
}
try {
return $this->doHave($id);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to check if key "{key}" is cached', ['key'=> $key,'exception'=> $e]);
return false;
}
}
public function clear()
{
$this->deferred = [];
if ($cleared = $this->versioningIsEnabled) {
$namespaceVersion = substr_replace(base64_encode(pack('V', mt_rand())), static::NS_SEPARATOR, 5);
try {
$cleared = $this->doSave([static::NS_SEPARATOR.$this->namespace => $namespaceVersion], 0);
} catch (\Exception $e) {
$cleared = false;
}
if ($cleared = true === $cleared || [] === $cleared) {
$this->namespaceVersion = $namespaceVersion;
}
}
try {
return $this->doClear($this->namespace) || $cleared;
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to clear the cache', ['exception'=> $e]);
return false;
}
}
public function deleteItem($key)
{
return $this->deleteItems([$key]);
}
public function deleteItems(array $keys)
{
$ids = [];
foreach ($keys as $key) {
$ids[$key] = $this->getId($key);
unset($this->deferred[$key]);
}
try {
if ($this->doDelete($ids)) {
return true;
}
} catch (\Exception $e) {
}
$ok = true;
foreach ($ids as $key => $id) {
try {
$e = null;
if ($this->doDelete([$id])) {
continue;
}
} catch (\Exception $e) {
}
CacheItem::log($this->logger,'Failed to delete key "{key}"', ['key'=> $key,'exception'=> $e]);
$ok = false;
}
return $ok;
}
public function enableVersioning($enable = true)
{
$wasEnabled = $this->versioningIsEnabled;
$this->versioningIsEnabled = (bool) $enable;
$this->namespaceVersion ='';
return $wasEnabled;
}
public function reset()
{
if ($this->deferred) {
$this->commit();
}
$this->namespaceVersion ='';
}
protected static function unserialize($value)
{
if ('b:0;'=== $value) {
return false;
}
$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
try {
if (false !== $value = unserialize($value)) {
return $value;
}
throw new \DomainException('Failed to unserialize cached value');
} catch (\Error $e) {
throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
} finally {
ini_set('unserialize_callback_func', $unserializeCallbackHandler);
}
}
private function getId($key)
{
CacheItem::validateKey($key);
if ($this->versioningIsEnabled &&''=== $this->namespaceVersion) {
$this->namespaceVersion ='1'.static::NS_SEPARATOR;
try {
foreach ($this->doFetch([static::NS_SEPARATOR.$this->namespace]) as $v) {
$this->namespaceVersion = $v;
}
if ('1'.static::NS_SEPARATOR === $this->namespaceVersion) {
$this->namespaceVersion = substr_replace(base64_encode(pack('V', time())), static::NS_SEPARATOR, 5);
$this->doSave([static::NS_SEPARATOR.$this->namespace => $this->namespaceVersion], 0);
}
} catch (\Exception $e) {
}
}
if (null === $this->maxIdLength) {
return $this->namespace.$this->namespaceVersion.$key;
}
if (\strlen($id = $this->namespace.$this->namespaceVersion.$key) > $this->maxIdLength) {
$id = $this->namespace.$this->namespaceVersion.substr_replace(base64_encode(hash('sha256', $key, true)), static::NS_SEPARATOR, -(\strlen($this->namespaceVersion) + 22));
}
return $id;
}
public static function handleUnserializeCallback($class)
{
throw new \DomainException('Class not found: '.$class);
}
}
}
namespace Symfony\Component\Cache\Traits
{
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\CacheException;
trait ApcuTrait
{
public static function isSupported()
{
return \function_exists('apcu_fetch') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN);
}
private function init($namespace, $defaultLifetime, $version)
{
if (!static::isSupported()) {
throw new CacheException('APCu is not enabled');
}
if ('cli'=== \PHP_SAPI) {
ini_set('apc.use_request_time', 0);
}
parent::__construct($namespace, $defaultLifetime);
if (null !== $version) {
CacheItem::validateKey($version);
if (!apcu_exists($version.'@'.$namespace)) {
$this->doClear($namespace);
apcu_add($version.'@'.$namespace, null);
}
}
}
protected function doFetch(array $ids)
{
try {
foreach (apcu_fetch($ids, $ok) ?: [] as $k => $v) {
if (null !== $v || $ok) {
yield $k => $v;
}
}
} catch (\Error $e) {
throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
}
}
protected function doHave($id)
{
return apcu_exists($id);
}
protected function doClear($namespace)
{
return isset($namespace[0]) && class_exists('APCuIterator', false) && ('cli'!== \PHP_SAPI || filter_var(ini_get('apc.enable_cli'), FILTER_VALIDATE_BOOLEAN))
? apcu_delete(new \APCuIterator(sprintf('/^%s/', preg_quote($namespace,'/')), APC_ITER_KEY))
: apcu_clear_cache();
}
protected function doDelete(array $ids)
{
foreach ($ids as $id) {
apcu_delete($id);
}
return true;
}
protected function doSave(array $values, $lifetime)
{
try {
if (false === $failures = apcu_store($values, null, $lifetime)) {
$failures = $values;
}
return array_keys($failures);
} catch (\Error $e) {
} catch (\Exception $e) {
}
if (1 === \count($values)) {
apcu_delete(key($values));
}
throw $e;
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
use Symfony\Component\Cache\ResettableInterface;
use Symfony\Component\Cache\Traits\AbstractTrait;
abstract class AbstractAdapter implements AdapterInterface, LoggerAwareInterface, ResettableInterface
{
const NS_SEPARATOR =':';
use AbstractTrait;
private static $apcuSupported;
private static $phpFilesSupported;
private $createCacheItem;
private $mergeByLifetime;
protected function __construct($namespace ='', $defaultLifetime = 0)
{
$this->namespace =''=== $namespace ?'': CacheItem::validateKey($namespace).static::NS_SEPARATOR;
if (null !== $this->maxIdLength && \strlen($namespace) > $this->maxIdLength - 24) {
throw new InvalidArgumentException(sprintf('Namespace must be %d chars max, %d given ("%s")', $this->maxIdLength - 24, \strlen($namespace), $namespace));
}
$this->createCacheItem = \Closure::bind(
static function ($key, $value, $isHit) use ($defaultLifetime) {
$item = new CacheItem();
$item->key = $key;
$item->value = $value;
$item->isHit = $isHit;
$item->defaultLifetime = $defaultLifetime;
return $item;
},
null,
CacheItem::class
);
$getId = function ($key) { return $this->getId((string) $key); };
$this->mergeByLifetime = \Closure::bind(
static function ($deferred, $namespace, &$expiredIds) use ($getId) {
$byLifetime = [];
$now = time();
$expiredIds = [];
foreach ($deferred as $key => $item) {
if (null === $item->expiry) {
$byLifetime[0 < $item->defaultLifetime ? $item->defaultLifetime : 0][$getId($key)] = $item->value;
} elseif ($item->expiry > $now) {
$byLifetime[$item->expiry - $now][$getId($key)] = $item->value;
} else {
$expiredIds[] = $getId($key);
}
}
return $byLifetime;
},
null,
CacheItem::class
);
}
public static function createSystemCache($namespace, $defaultLifetime, $version, $directory, LoggerInterface $logger = null)
{
if (null === self::$apcuSupported) {
self::$apcuSupported = ApcuAdapter::isSupported();
}
if (!self::$apcuSupported && null === self::$phpFilesSupported) {
self::$phpFilesSupported = PhpFilesAdapter::isSupported();
}
if (self::$phpFilesSupported) {
$opcache = new PhpFilesAdapter($namespace, $defaultLifetime, $directory);
if (null !== $logger) {
$opcache->setLogger($logger);
}
return $opcache;
}
$fs = new FilesystemAdapter($namespace, $defaultLifetime, $directory);
if (null !== $logger) {
$fs->setLogger($logger);
}
if (!self::$apcuSupported) {
return $fs;
}
$apcu = new ApcuAdapter($namespace, (int) $defaultLifetime / 5, $version);
if ('cli'=== \PHP_SAPI && !filter_var(ini_get('apc.enable_cli'), FILTER_VALIDATE_BOOLEAN)) {
$apcu->setLogger(new NullLogger());
} elseif (null !== $logger) {
$apcu->setLogger($logger);
}
return new ChainAdapter([$apcu, $fs]);
}
public static function createConnection($dsn, array $options = [])
{
if (!\is_string($dsn)) {
throw new InvalidArgumentException(sprintf('The %s() method expect argument #1 to be string, %s given.', __METHOD__, \gettype($dsn)));
}
if (0 === strpos($dsn,'redis://')) {
return RedisAdapter::createConnection($dsn, $options);
}
if (0 === strpos($dsn,'memcached://')) {
return MemcachedAdapter::createConnection($dsn, $options);
}
throw new InvalidArgumentException(sprintf('Unsupported DSN: %s.', $dsn));
}
public function getItem($key)
{
if ($this->deferred) {
$this->commit();
}
$id = $this->getId($key);
$f = $this->createCacheItem;
$isHit = false;
$value = null;
try {
foreach ($this->doFetch([$id]) as $value) {
$isHit = true;
}
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch key "{key}"', ['key'=> $key,'exception'=> $e]);
}
return $f($key, $value, $isHit);
}
public function getItems(array $keys = [])
{
if ($this->deferred) {
$this->commit();
}
$ids = [];
foreach ($keys as $key) {
$ids[] = $this->getId($key);
}
try {
$items = $this->doFetch($ids);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch requested items', ['keys'=> $keys,'exception'=> $e]);
$items = [];
}
$ids = array_combine($ids, $keys);
return $this->generateItems($items, $ids);
}
public function save(CacheItemInterface $item)
{
if (!$item instanceof CacheItem) {
return false;
}
$this->deferred[$item->getKey()] = $item;
return $this->commit();
}
public function saveDeferred(CacheItemInterface $item)
{
if (!$item instanceof CacheItem) {
return false;
}
$this->deferred[$item->getKey()] = $item;
return true;
}
public function commit()
{
$ok = true;
$byLifetime = $this->mergeByLifetime;
$byLifetime = $byLifetime($this->deferred, $this->namespace, $expiredIds);
$retry = $this->deferred = [];
if ($expiredIds) {
$this->doDelete($expiredIds);
}
foreach ($byLifetime as $lifetime => $values) {
try {
$e = $this->doSave($values, $lifetime);
} catch (\Exception $e) {
}
if (true === $e || [] === $e) {
continue;
}
if (\is_array($e) || 1 === \count($values)) {
foreach (\is_array($e) ? $e : array_keys($values) as $id) {
$ok = false;
$v = $values[$id];
$type = \is_object($v) ? \get_class($v) : \gettype($v);
CacheItem::log($this->logger,'Failed to save key "{key}" ({type})', ['key'=> substr($id, \strlen($this->namespace)),'type'=> $type,'exception'=> $e instanceof \Exception ? $e : null]);
}
} else {
foreach ($values as $id => $v) {
$retry[$lifetime][] = $id;
}
}
}
foreach ($retry as $lifetime => $ids) {
foreach ($ids as $id) {
try {
$v = $byLifetime[$lifetime][$id];
$e = $this->doSave([$id => $v], $lifetime);
} catch (\Exception $e) {
}
if (true === $e || [] === $e) {
continue;
}
$ok = false;
$type = \is_object($v) ? \get_class($v) : \gettype($v);
CacheItem::log($this->logger,'Failed to save key "{key}" ({type})', ['key'=> substr($id, \strlen($this->namespace)),'type'=> $type,'exception'=> $e instanceof \Exception ? $e : null]);
}
}
return $ok;
}
public function __sleep()
{
throw new \BadMethodCallException('Cannot serialize '.__CLASS__);
}
public function __wakeup()
{
throw new \BadMethodCallException('Cannot unserialize '.__CLASS__);
}
public function __destruct()
{
if ($this->deferred) {
$this->commit();
}
}
private function generateItems($items, &$keys)
{
$f = $this->createCacheItem;
try {
foreach ($items as $id => $value) {
if (!isset($keys[$id])) {
$id = key($keys);
}
$key = $keys[$id];
unset($keys[$id]);
yield $key => $f($key, $value, true);
}
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch requested items', ['keys'=> array_values($keys),'exception'=> $e]);
}
foreach ($keys as $key) {
yield $key => $f($key, null, false);
}
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\Traits\ApcuTrait;
class ApcuAdapter extends AbstractAdapter
{
use ApcuTrait;
public function __construct($namespace ='', $defaultLifetime = 0, $version = null)
{
$this->init($namespace, $defaultLifetime, $version);
}
}
}
namespace Symfony\Component\Cache
{
interface PruneableInterface
{
public function prune();
}
}
namespace Symfony\Component\Cache\Traits
{
use Symfony\Component\Cache\Exception\InvalidArgumentException;
trait FilesystemCommonTrait
{
private $directory;
private $tmp;
private function init($namespace, $directory)
{
if (!isset($directory[0])) {
$directory = sys_get_temp_dir().'/symfony-cache';
} else {
$directory = realpath($directory) ?: $directory;
}
if (isset($namespace[0])) {
if (preg_match('#[^-+_.A-Za-z0-9]#', $namespace, $match)) {
throw new InvalidArgumentException(sprintf('Namespace contains "%s" but only characters in [-+_.A-Za-z0-9] are allowed.', $match[0]));
}
$directory .= \DIRECTORY_SEPARATOR.$namespace;
}
if (!file_exists($directory)) {
@mkdir($directory, 0777, true);
}
$directory .= \DIRECTORY_SEPARATOR;
if ('\\'=== \DIRECTORY_SEPARATOR && \strlen($directory) > 234) {
throw new InvalidArgumentException(sprintf('Cache directory too long (%s)', $directory));
}
$this->directory = $directory;
}
protected function doClear($namespace)
{
$ok = true;
foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->directory, \FilesystemIterator::SKIP_DOTS)) as $file) {
$ok = ($file->isDir() || @unlink($file) || !file_exists($file)) && $ok;
}
return $ok;
}
protected function doDelete(array $ids)
{
$ok = true;
foreach ($ids as $id) {
$file = $this->getFile($id);
$ok = (!file_exists($file) || @unlink($file) || !file_exists($file)) && $ok;
}
return $ok;
}
private function write($file, $data, $expiresAt = null)
{
set_error_handler(__CLASS__.'::throwError');
try {
if (null === $this->tmp) {
$this->tmp = $this->directory.uniqid('', true);
}
file_put_contents($this->tmp, $data);
if (null !== $expiresAt) {
touch($this->tmp, $expiresAt);
}
return rename($this->tmp, $file);
} finally {
restore_error_handler();
}
}
private function getFile($id, $mkdir = false)
{
$hash = str_replace('/','-', base64_encode(hash('sha256', static::class.$id, true)));
$dir = $this->directory.strtoupper($hash[0].\DIRECTORY_SEPARATOR.$hash[1].\DIRECTORY_SEPARATOR);
if ($mkdir && !file_exists($dir)) {
@mkdir($dir, 0777, true);
}
return $dir.substr($hash, 2, 20);
}
public static function throwError($type, $message, $file, $line)
{
throw new \ErrorException($message, 0, $type, $file, $line);
}
public function __sleep()
{
throw new \BadMethodCallException('Cannot serialize '.__CLASS__);
}
public function __wakeup()
{
throw new \BadMethodCallException('Cannot unserialize '.__CLASS__);
}
public function __destruct()
{
if (method_exists(parent::class,'__destruct')) {
parent::__destruct();
}
if (null !== $this->tmp && file_exists($this->tmp)) {
unlink($this->tmp);
}
}
}
}
namespace Symfony\Component\Cache\Traits
{
use Symfony\Component\Cache\Exception\CacheException;
trait FilesystemTrait
{
use FilesystemCommonTrait;
public function prune()
{
$time = time();
$pruned = true;
foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->directory, \FilesystemIterator::SKIP_DOTS), \RecursiveIteratorIterator::LEAVES_ONLY) as $file) {
if (!$h = @fopen($file,'rb')) {
continue;
}
if (($expiresAt = (int) fgets($h)) && $time >= $expiresAt) {
fclose($h);
$pruned = @unlink($file) && !file_exists($file) && $pruned;
} else {
fclose($h);
}
}
return $pruned;
}
protected function doFetch(array $ids)
{
$values = [];
$now = time();
foreach ($ids as $id) {
$file = $this->getFile($id);
if (!file_exists($file) || !$h = @fopen($file,'rb')) {
continue;
}
if (($expiresAt = (int) fgets($h)) && $now >= $expiresAt) {
fclose($h);
@unlink($file);
} else {
$i = rawurldecode(rtrim(fgets($h)));
$value = stream_get_contents($h);
fclose($h);
if ($i === $id) {
$values[$id] = parent::unserialize($value);
}
}
}
return $values;
}
protected function doHave($id)
{
$file = $this->getFile($id);
return file_exists($file) && (@filemtime($file) > time() || $this->doFetch([$id]));
}
protected function doSave(array $values, $lifetime)
{
$ok = true;
$expiresAt = $lifetime ? (time() + $lifetime) : 0;
foreach ($values as $id => $value) {
$ok = $this->write($this->getFile($id, true), $expiresAt."\n".rawurlencode($id)."\n".serialize($value), $expiresAt) && $ok;
}
if (!$ok && !is_writable($this->directory)) {
throw new CacheException(sprintf('Cache directory is not writable (%s)', $this->directory));
}
return $ok;
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\PruneableInterface;
use Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends AbstractAdapter implements PruneableInterface
{
use FilesystemTrait;
public function __construct($namespace ='', $defaultLifetime = 0, $directory = null)
{
parent::__construct('', $defaultLifetime);
$this->init($namespace, $directory);
}
}
}
namespace Psr\Cache
{
interface CacheItemInterface
{
public function getKey();
public function get();
public function isHit();
public function set($value);
public function expiresAt($expiration);
public function expiresAfter($time);
}
}
namespace Symfony\Component\Cache
{
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
final class CacheItem implements CacheItemInterface
{
protected $key;
protected $value;
protected $isHit = false;
protected $expiry;
protected $defaultLifetime;
protected $tags = [];
protected $prevTags = [];
protected $innerItem;
protected $poolHash;
public function getKey()
{
return $this->key;
}
public function get()
{
return $this->value;
}
public function isHit()
{
return $this->isHit;
}
public function set($value)
{
$this->value = $value;
return $this;
}
public function expiresAt($expiration)
{
if (null === $expiration) {
$this->expiry = $this->defaultLifetime > 0 ? time() + $this->defaultLifetime : null;
} elseif ($expiration instanceof \DateTimeInterface) {
$this->expiry = (int) $expiration->format('U');
} else {
throw new InvalidArgumentException(sprintf('Expiration date must implement DateTimeInterface or be null, "%s" given', \is_object($expiration) ? \get_class($expiration) : \gettype($expiration)));
}
return $this;
}
public function expiresAfter($time)
{
if (null === $time) {
$this->expiry = $this->defaultLifetime > 0 ? time() + $this->defaultLifetime : null;
} elseif ($time instanceof \DateInterval) {
$this->expiry = (int) \DateTime::createFromFormat('U', time())->add($time)->format('U');
} elseif (\is_int($time)) {
$this->expiry = $time + time();
} else {
throw new InvalidArgumentException(sprintf('Expiration date must be an integer, a DateInterval or null, "%s" given', \is_object($time) ? \get_class($time) : \gettype($time)));
}
return $this;
}
public function tag($tags)
{
if (!\is_array($tags)) {
$tags = [$tags];
}
foreach ($tags as $tag) {
if (!\is_string($tag)) {
throw new InvalidArgumentException(sprintf('Cache tag must be string, "%s" given', \is_object($tag) ? \get_class($tag) : \gettype($tag)));
}
if (isset($this->tags[$tag])) {
continue;
}
if (''=== $tag) {
throw new InvalidArgumentException('Cache tag length must be greater than zero');
}
if (false !== strpbrk($tag,'{}()/\@:')) {
throw new InvalidArgumentException(sprintf('Cache tag "%s" contains reserved characters {}()/\@:', $tag));
}
$this->tags[$tag] = $tag;
}
return $this;
}
public function getPreviousTags()
{
return $this->prevTags;
}
public static function validateKey($key)
{
if (!\is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given', \is_object($key) ? \get_class($key) : \gettype($key)));
}
if (''=== $key) {
throw new InvalidArgumentException('Cache key length must be greater than zero');
}
if (false !== strpbrk($key,'{}()/\@:')) {
throw new InvalidArgumentException(sprintf('Cache key "%s" contains reserved characters {}()/\@:', $key));
}
return $key;
}
public static function log(LoggerInterface $logger = null, $message, $context = [])
{
if ($logger) {
$logger->warning($message, $context);
} else {
$replace = [];
foreach ($context as $k => $v) {
if (is_scalar($v)) {
$replace['{'.$k.'}'] = $v;
}
}
@trigger_error(strtr($message, $replace), E_USER_WARNING);
}
}
}
}
namespace Symfony\Component\Routing
{
interface RequestContextAwareInterface
{
public function setContext(RequestContext $context);
public function getContext();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContextAwareInterface;
interface UrlGeneratorInterface extends RequestContextAwareInterface
{
const ABSOLUTE_URL = 0;
const ABSOLUTE_PATH = 1;
const RELATIVE_PATH = 2;
const NETWORK_PATH = 3;
public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH);
}
}
namespace Symfony\Component\Routing\Generator
{
interface ConfigurableRequirementsInterface
{
public function setStrictRequirements($enabled);
public function isStrictRequirements();
}
}
namespace Symfony\Component\Routing\Generator
{
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
class UrlGenerator implements UrlGeneratorInterface, ConfigurableRequirementsInterface
{
protected $routes;
protected $context;
protected $strictRequirements = true;
protected $logger;
protected $decodedChars = ['%2F'=>'/','%40'=>'@','%3A'=>':','%3B'=>';','%2C'=>',','%3D'=>'=','%2B'=>'+','%21'=>'!','%2A'=>'*','%7C'=>'|',
];
public function __construct(RouteCollection $routes, RequestContext $context, LoggerInterface $logger = null)
{
$this->routes = $routes;
$this->context = $context;
$this->logger = $logger;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function setStrictRequirements($enabled)
{
$this->strictRequirements = null === $enabled ? null : (bool) $enabled;
}
public function isStrictRequirements()
{
return $this->strictRequirements;
}
public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
{
if (null === $route = $this->routes->get($name)) {
throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
}
$compiledRoute = $route->compile();
return $this->doGenerate($compiledRoute->getVariables(), $route->getDefaults(), $route->getRequirements(), $compiledRoute->getTokens(), $parameters, $name, $referenceType, $compiledRoute->getHostTokens(), $route->getSchemes());
}
protected function doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, array $requiredSchemes = [])
{
$variables = array_flip($variables);
$mergedParams = array_replace($defaults, $this->context->getParameters(), $parameters);
if ($diff = array_diff_key($variables, $mergedParams)) {
throw new MissingMandatoryParametersException(sprintf('Some mandatory parameters are missing ("%s") to generate a URL for route "%s".', implode('", "', array_keys($diff)), $name));
}
$url ='';
$optional = true;
$message ='Parameter "{parameter}" for route "{route}" must match "{expected}" ("{given}" given) to generate a corresponding URL.';
foreach ($tokens as $token) {
if ('variable'=== $token[0]) {
if (!$optional || !\array_key_exists($token[3], $defaults) || null !== $mergedParams[$token[3]] && (string) $mergedParams[$token[3]] !== (string) $defaults[$token[3]]) {
if (null !== $this->strictRequirements && !preg_match('#^'.preg_replace('/\(\?(?:=|<=|!|<!)((?:[^()\\\\]+|\\\\.|\((?1)\))*)\)/','', $token[2]).'$#'.(empty($token[4]) ?'':'u'), $mergedParams[$token[3]])) {
if ($this->strictRequirements) {
throw new InvalidParameterException(strtr($message, ['{parameter}'=> $token[3],'{route}'=> $name,'{expected}'=> $token[2],'{given}'=> $mergedParams[$token[3]]]));
}
if ($this->logger) {
$this->logger->error($message, ['parameter'=> $token[3],'route'=> $name,'expected'=> $token[2],'given'=> $mergedParams[$token[3]]]);
}
return null;
}
$url = $token[1].$mergedParams[$token[3]].$url;
$optional = false;
}
} else {
$url = $token[1].$url;
$optional = false;
}
}
if (''=== $url) {
$url ='/';
}
$url = strtr(rawurlencode($url), $this->decodedChars);
$url = strtr($url, ['/../'=>'/%2E%2E/','/./'=>'/%2E/']);
if ('/..'=== substr($url, -3)) {
$url = substr($url, 0, -2).'%2E%2E';
} elseif ('/.'=== substr($url, -2)) {
$url = substr($url, 0, -1).'%2E';
}
$schemeAuthority ='';
$host = $this->context->getHost();
$scheme = $this->context->getScheme();
if ($requiredSchemes) {
if (!\in_array($scheme, $requiredSchemes, true)) {
$referenceType = self::ABSOLUTE_URL;
$scheme = current($requiredSchemes);
}
}
if ($hostTokens) {
$routeHost ='';
foreach ($hostTokens as $token) {
if ('variable'=== $token[0]) {
if (null !== $this->strictRequirements && !preg_match('#^'.preg_replace('/\(\?(?:=|<=|!|<!)((?:[^()\\\\]+|\\\\.|\((?1)\))*)\)/','', $token[2]).'$#i'.(empty($token[4]) ?'':'u'), $mergedParams[$token[3]])) {
if ($this->strictRequirements) {
throw new InvalidParameterException(strtr($message, ['{parameter}'=> $token[3],'{route}'=> $name,'{expected}'=> $token[2],'{given}'=> $mergedParams[$token[3]]]));
}
if ($this->logger) {
$this->logger->error($message, ['parameter'=> $token[3],'route'=> $name,'expected'=> $token[2],'given'=> $mergedParams[$token[3]]]);
}
return null;
}
$routeHost = $token[1].$mergedParams[$token[3]].$routeHost;
} else {
$routeHost = $token[1].$routeHost;
}
}
if ($routeHost !== $host) {
$host = $routeHost;
if (self::ABSOLUTE_URL !== $referenceType) {
$referenceType = self::NETWORK_PATH;
}
}
}
if (self::ABSOLUTE_URL === $referenceType || self::NETWORK_PATH === $referenceType) {
if (''!== $host || (''!== $scheme &&'http'!== $scheme &&'https'!== $scheme)) {
$port ='';
if ('http'=== $scheme && 80 !== $this->context->getHttpPort()) {
$port =':'.$this->context->getHttpPort();
} elseif ('https'=== $scheme && 443 !== $this->context->getHttpsPort()) {
$port =':'.$this->context->getHttpsPort();
}
$schemeAuthority = self::NETWORK_PATH === $referenceType ||''=== $scheme ?'//': "$scheme://";
$schemeAuthority .= $host.$port;
}
}
if (self::RELATIVE_PATH === $referenceType) {
$url = self::getRelativePath($this->context->getPathInfo(), $url);
} else {
$url = $schemeAuthority.$this->context->getBaseUrl().$url;
}
$extra = array_udiff_assoc(array_diff_key($parameters, $variables), $defaults, function ($a, $b) {
return $a == $b ? 0 : 1;
});
$fragment ='';
if (isset($defaults['_fragment'])) {
$fragment = $defaults['_fragment'];
}
if (isset($extra['_fragment'])) {
$fragment = $extra['_fragment'];
unset($extra['_fragment']);
}
if ($extra && $query = http_build_query($extra,'','&', PHP_QUERY_RFC3986)) {
$url .='?'.strtr($query, ['%2F'=>'/']);
}
if (''!== $fragment) {
$url .='#'.strtr(rawurlencode($fragment), ['%2F'=>'/','%3F'=>'?']);
}
return $url;
}
public static function getRelativePath($basePath, $targetPath)
{
if ($basePath === $targetPath) {
return'';
}
$sourceDirs = explode('/', isset($basePath[0]) &&'/'=== $basePath[0] ? substr($basePath, 1) : $basePath);
$targetDirs = explode('/', isset($targetPath[0]) &&'/'=== $targetPath[0] ? substr($targetPath, 1) : $targetPath);
array_pop($sourceDirs);
$targetFile = array_pop($targetDirs);
foreach ($sourceDirs as $i => $dir) {
if (isset($targetDirs[$i]) && $dir === $targetDirs[$i]) {
unset($sourceDirs[$i], $targetDirs[$i]);
} else {
break;
}
}
$targetDirs[] = $targetFile;
$path = str_repeat('../', \count($sourceDirs)).implode('/', $targetDirs);
return''=== $path ||'/'=== $path[0]
|| false !== ($colonPos = strpos($path,':')) && ($colonPos < ($slashPos = strpos($path,'/')) || false === $slashPos)
? "./$path" : $path;
}
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\HttpFoundation\Request;
class RequestContext
{
private $baseUrl;
private $pathInfo;
private $method;
private $host;
private $scheme;
private $httpPort;
private $httpsPort;
private $queryString;
private $parameters = [];
public function __construct($baseUrl ='', $method ='GET', $host ='localhost', $scheme ='http', $httpPort = 80, $httpsPort = 443, $path ='/', $queryString ='')
{
$this->setBaseUrl($baseUrl);
$this->setMethod($method);
$this->setHost($host);
$this->setScheme($scheme);
$this->setHttpPort($httpPort);
$this->setHttpsPort($httpsPort);
$this->setPathInfo($path);
$this->setQueryString($queryString);
}
public function fromRequest(Request $request)
{
$this->setBaseUrl($request->getBaseUrl());
$this->setPathInfo($request->getPathInfo());
$this->setMethod($request->getMethod());
$this->setHost($request->getHost());
$this->setScheme($request->getScheme());
$this->setHttpPort($request->isSecure() ? $this->httpPort : $request->getPort());
$this->setHttpsPort($request->isSecure() ? $request->getPort() : $this->httpsPort);
$this->setQueryString($request->server->get('QUERY_STRING',''));
return $this;
}
public function getBaseUrl()
{
return $this->baseUrl;
}
public function setBaseUrl($baseUrl)
{
$this->baseUrl = $baseUrl;
return $this;
}
public function getPathInfo()
{
return $this->pathInfo;
}
public function setPathInfo($pathInfo)
{
$this->pathInfo = $pathInfo;
return $this;
}
public function getMethod()
{
return $this->method;
}
public function setMethod($method)
{
$this->method = strtoupper($method);
return $this;
}
public function getHost()
{
return $this->host;
}
public function setHost($host)
{
$this->host = strtolower($host);
return $this;
}
public function getScheme()
{
return $this->scheme;
}
public function setScheme($scheme)
{
$this->scheme = strtolower($scheme);
return $this;
}
public function getHttpPort()
{
return $this->httpPort;
}
public function setHttpPort($httpPort)
{
$this->httpPort = (int) $httpPort;
return $this;
}
public function getHttpsPort()
{
return $this->httpsPort;
}
public function setHttpsPort($httpsPort)
{
$this->httpsPort = (int) $httpsPort;
return $this;
}
public function getQueryString()
{
return $this->queryString;
}
public function setQueryString($queryString)
{
$this->queryString = (string) $queryString;
return $this;
}
public function getParameters()
{
return $this->parameters;
}
public function setParameters(array $parameters)
{
$this->parameters = $parameters;
return $this;
}
public function getParameter($name)
{
return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
}
public function hasParameter($name)
{
return \array_key_exists($name, $this->parameters);
}
public function setParameter($name, $parameter)
{
$this->parameters[$name] = $parameter;
return $this;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\NoConfigurationException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContextAwareInterface;
interface UrlMatcherInterface extends RequestContextAwareInterface
{
public function match($pathinfo);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
interface RouterInterface extends UrlMatcherInterface, UrlGeneratorInterface
{
public function getRouteCollection();
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\NoConfigurationException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
interface RequestMatcherInterface
{
public function matchRequest(Request $request);
}
}
namespace Symfony\Component\Routing
{
use Psr\Log\LoggerInterface;
use Symfony\Component\Config\ConfigCacheFactory;
use Symfony\Component\Config\ConfigCacheFactoryInterface;
use Symfony\Component\Config\ConfigCacheInterface;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\ConfigurableRequirementsInterface;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumperInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\Dumper\MatcherDumperInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
class Router implements RouterInterface, RequestMatcherInterface
{
protected $matcher;
protected $generator;
protected $context;
protected $loader;
protected $collection;
protected $resource;
protected $options = [];
protected $logger;
private $configCacheFactory;
private $expressionLanguageProviders = [];
public function __construct(LoaderInterface $loader, $resource, array $options = [], RequestContext $context = null, LoggerInterface $logger = null)
{
$this->loader = $loader;
$this->resource = $resource;
$this->logger = $logger;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function setOptions(array $options)
{
$this->options = ['cache_dir'=> null,'debug'=> false,'generator_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_base_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_dumper_class'=>'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper','generator_cache_class'=>'ProjectUrlGenerator','matcher_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_base_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_dumper_class'=>'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper','matcher_cache_class'=>'ProjectUrlMatcher','resource_type'=> null,'strict_requirements'=> true,
];
$invalid = [];
foreach ($options as $key => $value) {
if (\array_key_exists($key, $this->options)) {
$this->options[$key] = $value;
} else {
$invalid[] = $key;
}
}
if ($invalid) {
throw new \InvalidArgumentException(sprintf('The Router does not support the following options: "%s".', implode('", "', $invalid)));
}
}
public function setOption($key, $value)
{
if (!\array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
$this->options[$key] = $value;
}
public function getOption($key)
{
if (!\array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
return $this->options[$key];
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->loader->load($this->resource, $this->options['resource_type']);
}
return $this->collection;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
if (null !== $this->matcher) {
$this->getMatcher()->setContext($context);
}
if (null !== $this->generator) {
$this->getGenerator()->setContext($context);
}
}
public function getContext()
{
return $this->context;
}
public function setConfigCacheFactory(ConfigCacheFactoryInterface $configCacheFactory)
{
$this->configCacheFactory = $configCacheFactory;
}
public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
{
return $this->getGenerator()->generate($name, $parameters, $referenceType);
}
public function match($pathinfo)
{
return $this->getMatcher()->match($pathinfo);
}
public function matchRequest(Request $request)
{
$matcher = $this->getMatcher();
if (!$matcher instanceof RequestMatcherInterface) {
return $matcher->match($request->getPathInfo());
}
return $matcher->matchRequest($request);
}
public function getMatcher()
{
if (null !== $this->matcher) {
return $this->matcher;
}
if (null === $this->options['cache_dir'] || null === $this->options['matcher_cache_class']) {
$this->matcher = new $this->options['matcher_class']($this->getRouteCollection(), $this->context);
if (method_exists($this->matcher,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$this->matcher->addExpressionLanguageProvider($provider);
}
}
return $this->matcher;
}
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$this->options['matcher_cache_class'].'.php',
function (ConfigCacheInterface $cache) {
$dumper = $this->getMatcherDumperInstance();
if (method_exists($dumper,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$dumper->addExpressionLanguageProvider($provider);
}
}
$options = ['class'=> $this->options['matcher_cache_class'],'base_class'=> $this->options['matcher_base_class'],
];
$cache->write($dumper->dump($options), $this->getRouteCollection()->getResources());
}
);
if (!class_exists($this->options['matcher_cache_class'], false)) {
require_once $cache->getPath();
}
return $this->matcher = new $this->options['matcher_cache_class']($this->context);
}
public function getGenerator()
{
if (null !== $this->generator) {
return $this->generator;
}
if (null === $this->options['cache_dir'] || null === $this->options['generator_cache_class']) {
$this->generator = new $this->options['generator_class']($this->getRouteCollection(), $this->context, $this->logger);
} else {
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$this->options['generator_cache_class'].'.php',
function (ConfigCacheInterface $cache) {
$dumper = $this->getGeneratorDumperInstance();
$options = ['class'=> $this->options['generator_cache_class'],'base_class'=> $this->options['generator_base_class'],
];
$cache->write($dumper->dump($options), $this->getRouteCollection()->getResources());
}
);
if (!class_exists($this->options['generator_cache_class'], false)) {
require_once $cache->getPath();
}
$this->generator = new $this->options['generator_cache_class']($this->context, $this->logger);
}
if ($this->generator instanceof ConfigurableRequirementsInterface) {
$this->generator->setStrictRequirements($this->options['strict_requirements']);
}
return $this->generator;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function getGeneratorDumperInstance()
{
return new $this->options['generator_dumper_class']($this->getRouteCollection());
}
protected function getMatcherDumperInstance()
{
return new $this->options['matcher_dumper_class']($this->getRouteCollection());
}
private function getConfigCacheFactory()
{
if (null === $this->configCacheFactory) {
$this->configCacheFactory = new ConfigCacheFactory($this->options['debug']);
}
return $this->configCacheFactory;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
interface RedirectableUrlMatcherInterface
{
public function redirect($path, $route, $scheme = null);
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\NoConfigurationException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
class UrlMatcher implements UrlMatcherInterface, RequestMatcherInterface
{
const REQUIREMENT_MATCH = 0;
const REQUIREMENT_MISMATCH = 1;
const ROUTE_MATCH = 2;
protected $context;
protected $allow = [];
protected $routes;
protected $request;
protected $expressionLanguage;
protected $expressionLanguageProviders = [];
public function __construct(RouteCollection $routes, RequestContext $context)
{
$this->routes = $routes;
$this->context = $context;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function match($pathinfo)
{
$this->allow = [];
if ($ret = $this->matchCollection(rawurldecode($pathinfo), $this->routes)) {
return $ret;
}
if ('/'=== $pathinfo && !$this->allow) {
throw new NoConfigurationException();
}
throw 0 < \count($this->allow)
? new MethodNotAllowedException(array_unique($this->allow))
: new ResourceNotFoundException(sprintf('No routes found for "%s".', $pathinfo));
}
public function matchRequest(Request $request)
{
$this->request = $request;
$ret = $this->match($request->getPathInfo());
$this->request = null;
return $ret;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function matchCollection($pathinfo, RouteCollection $routes)
{
if ('HEAD'=== $method = $this->context->getMethod()) {
$method ='GET';
}
$supportsTrailingSlash ='/'!== $pathinfo &&''!== $pathinfo && $this instanceof RedirectableUrlMatcherInterface;
foreach ($routes as $name => $route) {
$compiledRoute = $route->compile();
$staticPrefix = $compiledRoute->getStaticPrefix();
$requiredMethods = $route->getMethods();
if (''=== $staticPrefix || 0 === strpos($pathinfo, $staticPrefix)) {
} elseif (!$supportsTrailingSlash || ($requiredMethods && !\in_array('GET', $requiredMethods)) ||'GET'!== $method) {
continue;
} elseif ('/'=== substr($staticPrefix, -1) && substr($staticPrefix, 0, -1) === $pathinfo) {
return $this->allow = [];
} else {
continue;
}
$regex = $compiledRoute->getRegex();
if ($supportsTrailingSlash && $pos = strpos($regex,'/$')) {
$regex = substr($regex, 0, $pos).'/?$'.substr($regex, $pos + 2);
$hasTrailingSlash = true;
} else {
$hasTrailingSlash = false;
}
if (!preg_match($regex, $pathinfo, $matches)) {
continue;
}
if ($hasTrailingSlash &&'/'!== substr($pathinfo, -1)) {
if ((!$requiredMethods || \in_array('GET', $requiredMethods)) &&'GET'=== $method) {
return $this->allow = [];
}
continue;
}
$hostMatches = [];
if ($compiledRoute->getHostRegex() && !preg_match($compiledRoute->getHostRegex(), $this->context->getHost(), $hostMatches)) {
continue;
}
$status = $this->handleRouteRequirements($pathinfo, $name, $route);
if (self::REQUIREMENT_MISMATCH === $status[0]) {
continue;
}
if ($requiredMethods) {
if (!\in_array($method, $requiredMethods)) {
if (self::REQUIREMENT_MATCH === $status[0]) {
$this->allow = array_merge($this->allow, $requiredMethods);
}
continue;
}
}
return $this->getAttributes($route, $name, array_replace($matches, $hostMatches, isset($status[1]) ? $status[1] : []));
}
return [];
}
protected function getAttributes(Route $route, $name, array $attributes)
{
$attributes['_route'] = $name;
return $this->mergeDefaults($attributes, $route->getDefaults());
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), ['context'=> $this->context,'request'=> $this->request ?: $this->createRequest($pathinfo)])) {
return [self::REQUIREMENT_MISMATCH, null];
}
$scheme = $this->context->getScheme();
$status = $route->getSchemes() && !$route->hasScheme($scheme) ? self::REQUIREMENT_MISMATCH : self::REQUIREMENT_MATCH;
return [$status, null];
}
protected function mergeDefaults($params, $defaults)
{
foreach ($params as $key => $value) {
if (!\is_int($key)) {
$defaults[$key] = $value;
}
}
return $defaults;
}
protected function getExpressionLanguage()
{
if (null === $this->expressionLanguage) {
if (!class_exists('Symfony\Component\ExpressionLanguage\ExpressionLanguage')) {
throw new \RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
}
$this->expressionLanguage = new ExpressionLanguage(null, $this->expressionLanguageProviders);
}
return $this->expressionLanguage;
}
protected function createRequest($pathinfo)
{
if (!class_exists('Symfony\Component\HttpFoundation\Request')) {
return null;
}
return Request::create($this->context->getScheme().'://'.$this->context->getHost().$this->context->getBaseUrl().$pathinfo, $this->context->getMethod(), $this->context->getParameters(), [], [], ['SCRIPT_FILENAME'=> $this->context->getBaseUrl(),'SCRIPT_NAME'=> $this->context->getBaseUrl(),
]);
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Route;
abstract class RedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
public function match($pathinfo)
{
try {
$parameters = parent::match($pathinfo);
} catch (ResourceNotFoundException $e) {
if ('/'=== substr($pathinfo, -1) || !\in_array($this->context->getMethod(), ['HEAD','GET'])) {
throw $e;
}
try {
$parameters = parent::match($pathinfo.'/');
return array_replace($parameters, $this->redirect($pathinfo.'/', isset($parameters['_route']) ? $parameters['_route'] : null));
} catch (ResourceNotFoundException $e2) {
throw $e;
}
}
return $parameters;
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), ['context'=> $this->context,'request'=> $this->request ?: $this->createRequest($pathinfo)])) {
return [self::REQUIREMENT_MISMATCH, null];
}
$scheme = $this->context->getScheme();
$schemes = $route->getSchemes();
if ($schemes && !$route->hasScheme($scheme)) {
return [self::ROUTE_MATCH, $this->redirect($pathinfo, $name, current($schemes))];
}
return [self::REQUIREMENT_MATCH, null];
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher as BaseMatcher;
class RedirectableUrlMatcher extends BaseMatcher
{
public function redirect($path, $route, $scheme = null)
{
return ['_controller'=>'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction','path'=> $path,'permanent'=> true,'scheme'=> $scheme,'httpPort'=> $this->context->getHttpPort(),'httpsPort'=> $this->context->getHttpsPort(),'_route'=> $route,
];
}
}
}
namespace Symfony\Component\HttpKernel\CacheWarmer
{
interface WarmableInterface
{
public function warmUp($cacheDir);
}
}
namespace Symfony\Component\DependencyInjection
{
interface ServiceSubscriberInterface
{
public static function getSubscribedServices();
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Config\ContainerParametersResource;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ServiceSubscriberInterface;
use Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Router as BaseRouter;
class Router extends BaseRouter implements WarmableInterface, ServiceSubscriberInterface
{
private $container;
private $collectedParameters = [];
public function __construct(ContainerInterface $container, $resource, array $options = [], RequestContext $context = null)
{
$this->container = $container;
$this->resource = $resource;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->container->get('routing.loader')->load($this->resource, $this->options['resource_type']);
$this->resolveParameters($this->collection);
$this->collection->addResource(new ContainerParametersResource($this->collectedParameters));
}
return $this->collection;
}
public function warmUp($cacheDir)
{
$currentDir = $this->getOption('cache_dir');
$this->setOption('cache_dir', $cacheDir);
$this->getMatcher();
$this->getGenerator();
$this->setOption('cache_dir', $currentDir);
}
private function resolveParameters(RouteCollection $collection)
{
foreach ($collection as $route) {
foreach ($route->getDefaults() as $name => $value) {
$route->setDefault($name, $this->resolve($value));
}
foreach ($route->getRequirements() as $name => $value) {
$route->setRequirement($name, $this->resolve($value));
}
$route->setPath($this->resolve($route->getPath()));
$route->setHost($this->resolve($route->getHost()));
$schemes = [];
foreach ($route->getSchemes() as $scheme) {
$schemes = array_merge($schemes, explode('|', $this->resolve($scheme)));
}
$route->setSchemes($schemes);
$methods = [];
foreach ($route->getMethods() as $method) {
$methods = array_merge($methods, explode('|', $this->resolve($method)));
}
$route->setMethods($methods);
$route->setCondition($this->resolve($route->getCondition()));
}
}
private function resolve($value)
{
if (\is_array($value)) {
foreach ($value as $key => $val) {
$value[$key] = $this->resolve($val);
}
return $value;
}
if (!\is_string($value)) {
return $value;
}
$container = $this->container;
$escapedValue = preg_replace_callback('/%%|%([^%\s]++)%/', function ($match) use ($container, $value) {
if (!isset($match[1])) {
return'%%';
}
if (preg_match('/^env\((?:\w++:)*+\w++\)$/', $match[1])) {
throw new RuntimeException(sprintf('Using "%%%s%%" is not allowed in routing configuration.', $match[1]));
}
$resolved = $container->getParameter($match[1]);
if (\is_string($resolved) || is_numeric($resolved)) {
$this->collectedParameters[$match[1]] = $resolved;
return (string) $this->resolve($resolved);
}
throw new RuntimeException(sprintf('The container parameter "%s", used in the route configuration value "%s", must be a string or numeric, but it is of type %s.', $match[1], $value, \gettype($resolved)));
}, $value);
return str_replace('%%','%', $escapedValue);
}
public static function getSubscribedServices()
{
return ['routing.loader'=> LoaderInterface::class,
];
}
}
}
namespace Symfony\Component\Cache\Traits
{
use Symfony\Component\Cache\PruneableInterface;
use Symfony\Component\Cache\ResettableInterface;
trait ProxyTrait
{
private $pool;
public function prune()
{
return $this->pool instanceof PruneableInterface && $this->pool->prune();
}
public function reset()
{
if ($this->pool instanceof ResettableInterface) {
$this->pool->reset();
}
}
}
}
namespace Symfony\Component\Cache\Traits
{
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
trait PhpArrayTrait
{
use ProxyTrait;
private $file;
private $values;
private $zendDetectUnicode;
public function warmUp(array $values)
{
if (file_exists($this->file)) {
if (!is_file($this->file)) {
throw new InvalidArgumentException(sprintf('Cache path exists and is not a file: %s.', $this->file));
}
if (!is_writable($this->file)) {
throw new InvalidArgumentException(sprintf('Cache file is not writable: %s.', $this->file));
}
} else {
$directory = \dirname($this->file);
if (!is_dir($directory) && !@mkdir($directory, 0777, true)) {
throw new InvalidArgumentException(sprintf('Cache directory does not exist and cannot be created: %s.', $directory));
}
if (!is_writable($directory)) {
throw new InvalidArgumentException(sprintf('Cache directory is not writable: %s.', $directory));
}
}
$dump =<<<'EOF'
<?php

// This file has been auto-generated by the Symfony Cache Component.

return [


EOF
;
foreach ($values as $key => $value) {
CacheItem::validateKey(\is_int($key) ? (string) $key : $key);
if (null === $value || \is_object($value)) {
try {
$value = serialize($value);
} catch (\Exception $e) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable %s value.', $key, \get_class($value)), 0, $e);
}
} elseif (\is_array($value)) {
try {
$serialized = serialize($value);
$unserialized = unserialize($serialized);
} catch (\Exception $e) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable array value.', $key), 0, $e);
}
if ($unserialized !== $value || (false !== strpos($serialized,';R:') && preg_match('/;R:[1-9]/', $serialized))) {
$value = $serialized;
}
} elseif (\is_string($value)) {
if ('N;'=== $value || (isset($value[2]) &&':'=== $value[1])) {
$value = serialize($value);
}
} elseif (!is_scalar($value)) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable %s value.', $key, \gettype($value)));
}
$dump .= var_export($key, true).' => '.var_export($value, true).",\n";
}
$dump .="\n];\n";
$dump = str_replace("' . \"\\0\" . '","\0", $dump);
$tmpFile = uniqid($this->file, true);
file_put_contents($tmpFile, $dump);
@chmod($tmpFile, 0666 & ~umask());
unset($serialized, $unserialized, $value, $dump);
@rename($tmpFile, $this->file);
$this->initialize();
}
public function clear()
{
$this->values = [];
$cleared = @unlink($this->file) || !file_exists($this->file);
return $this->pool->clear() && $cleared;
}
private function initialize()
{
if ($this->zendDetectUnicode) {
$zmb = ini_set('zend.detect_unicode', 0);
}
try {
$this->values = file_exists($this->file) ? (include $this->file ?: []) : [];
} finally {
if ($this->zendDetectUnicode) {
ini_set('zend.detect_unicode', $zmb);
}
}
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
use Symfony\Component\Cache\PruneableInterface;
use Symfony\Component\Cache\ResettableInterface;
use Symfony\Component\Cache\Traits\PhpArrayTrait;
class PhpArrayAdapter implements AdapterInterface, PruneableInterface, ResettableInterface
{
use PhpArrayTrait;
private $createCacheItem;
public function __construct($file, AdapterInterface $fallbackPool)
{
$this->file = $file;
$this->pool = $fallbackPool;
$this->zendDetectUnicode = filter_var(ini_get('zend.detect_unicode'), FILTER_VALIDATE_BOOLEAN);
$this->createCacheItem = \Closure::bind(
static function ($key, $value, $isHit) {
$item = new CacheItem();
$item->key = $key;
$item->value = $value;
$item->isHit = $isHit;
return $item;
},
null,
CacheItem::class
);
}
public static function create($file, CacheItemPoolInterface $fallbackPool)
{
if ((\PHP_VERSION_ID >= 70000 && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) || \defined('HHVM_VERSION')) {
if (!$fallbackPool instanceof AdapterInterface) {
$fallbackPool = new ProxyAdapter($fallbackPool);
}
return new static($file, $fallbackPool);
}
return $fallbackPool;
}
public function getItem($key)
{
if (!\is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', \is_object($key) ? \get_class($key) : \gettype($key)));
}
if (null === $this->values) {
$this->initialize();
}
if (!isset($this->values[$key])) {
return $this->pool->getItem($key);
}
$value = $this->values[$key];
$isHit = true;
if ('N;'=== $value) {
$value = null;
} elseif (\is_string($value) && isset($value[2]) &&':'=== $value[1]) {
try {
$e = null;
$value = unserialize($value);
} catch (\Error $e) {
} catch (\Exception $e) {
}
if (null !== $e) {
$value = null;
$isHit = false;
}
}
$f = $this->createCacheItem;
return $f($key, $value, $isHit);
}
public function getItems(array $keys = [])
{
foreach ($keys as $key) {
if (!\is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', \is_object($key) ? \get_class($key) : \gettype($key)));
}
}
if (null === $this->values) {
$this->initialize();
}
return $this->generateItems($keys);
}
public function hasItem($key)
{
if (!\is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', \is_object($key) ? \get_class($key) : \gettype($key)));
}
if (null === $this->values) {
$this->initialize();
}
return isset($this->values[$key]) || $this->pool->hasItem($key);
}
public function deleteItem($key)
{
if (!\is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', \is_object($key) ? \get_class($key) : \gettype($key)));
}
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$key]) && $this->pool->deleteItem($key);
}
public function deleteItems(array $keys)
{
$deleted = true;
$fallbackKeys = [];
foreach ($keys as $key) {
if (!\is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', \is_object($key) ? \get_class($key) : \gettype($key)));
}
if (isset($this->values[$key])) {
$deleted = false;
} else {
$fallbackKeys[] = $key;
}
}
if (null === $this->values) {
$this->initialize();
}
if ($fallbackKeys) {
$deleted = $this->pool->deleteItems($fallbackKeys) && $deleted;
}
return $deleted;
}
public function save(CacheItemInterface $item)
{
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$item->getKey()]) && $this->pool->save($item);
}
public function saveDeferred(CacheItemInterface $item)
{
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$item->getKey()]) && $this->pool->saveDeferred($item);
}
public function commit()
{
return $this->pool->commit();
}
private function generateItems(array $keys)
{
$f = $this->createCacheItem;
$fallbackKeys = [];
foreach ($keys as $key) {
if (isset($this->values[$key])) {
$value = $this->values[$key];
if ('N;'=== $value) {
yield $key => $f($key, null, true);
} elseif (\is_string($value) && isset($value[2]) &&':'=== $value[1]) {
try {
yield $key => $f($key, unserialize($value), true);
} catch (\Error $e) {
yield $key => $f($key, null, false);
} catch (\Exception $e) {
yield $key => $f($key, null, false);
}
} else {
yield $key => $f($key, $value, true);
}
} else {
$fallbackKeys[] = $key;
}
}
if ($fallbackKeys) {
foreach ($this->pool->getItems($fallbackKeys) as $key => $item) {
yield $key => $item;
}
}
}
public static function throwOnRequiredClass($class)
{
$e = new \ReflectionException("Class $class does not exist");
$trace = $e->getTrace();
$autoloadFrame = ['function'=>'spl_autoload_call','args'=> [$class],
];
$i = 1 + array_search($autoloadFrame, $trace, true);
if (isset($trace[$i]['function']) && !isset($trace[$i]['class'])) {
switch ($trace[$i]['function']) {
case'get_class_methods':
case'get_class_vars':
case'get_parent_class':
case'is_a':
case'is_subclass_of':
case'class_exists':
case'class_implements':
case'class_parents':
case'trait_exists':
case'defined':
case'interface_exists':
case'method_exists':
case'property_exists':
case'is_callable':
return;
}
}
throw $e;
}
}
}
namespace Doctrine\Common\Cache
{
interface MultiPutCache
{
function saveMultiple(array $keysAndValues, $lifetime = 0);
}
}
namespace Doctrine\Common\Cache
{
interface MultiGetCache
{
function fetchMultiple(array $keys);
}
}
namespace Doctrine\Common\Cache
{
interface ClearableCache
{
public function deleteAll();
}
}
namespace Doctrine\Common\Cache
{
interface FlushableCache
{
public function flushAll();
}
}
namespace Doctrine\Common\Cache
{
interface Cache
{
const STATS_HITS ='hits';
const STATS_MISSES ='misses';
const STATS_UPTIME ='uptime';
const STATS_MEMORY_USAGE ='memory_usage';
const STATS_MEMORY_AVAILABLE ='memory_available';
const STATS_MEMORY_AVAILIABLE ='memory_available';
public function fetch($id);
public function contains($id);
public function save($id, $data, $lifeTime = 0);
public function delete($id);
public function getStats();
}
}
namespace Doctrine\Common\Cache
{
abstract class CacheProvider implements Cache, FlushableCache, ClearableCache, MultiGetCache, MultiPutCache
{
const DOCTRINE_NAMESPACE_CACHEKEY ='DoctrineNamespaceCacheKey[%s]';
private $namespace ='';
private $namespaceVersion;
public function setNamespace($namespace)
{
$this->namespace = (string) $namespace;
$this->namespaceVersion = null;
}
public function getNamespace()
{
return $this->namespace;
}
public function fetch($id)
{
return $this->doFetch($this->getNamespacedId($id));
}
public function fetchMultiple(array $keys)
{
if (empty($keys)) {
return array();
}
$namespacedKeys = array_combine($keys, array_map(array($this,'getNamespacedId'), $keys));
$items = $this->doFetchMultiple($namespacedKeys);
$foundItems = array();
foreach ($namespacedKeys as $requestedKey => $namespacedKey) {
if (isset($items[$namespacedKey]) || array_key_exists($namespacedKey, $items)) {
$foundItems[$requestedKey] = $items[$namespacedKey];
}
}
return $foundItems;
}
public function saveMultiple(array $keysAndValues, $lifetime = 0)
{
$namespacedKeysAndValues = array();
foreach ($keysAndValues as $key => $value) {
$namespacedKeysAndValues[$this->getNamespacedId($key)] = $value;
}
return $this->doSaveMultiple($namespacedKeysAndValues, $lifetime);
}
public function contains($id)
{
return $this->doContains($this->getNamespacedId($id));
}
public function save($id, $data, $lifeTime = 0)
{
return $this->doSave($this->getNamespacedId($id), $data, $lifeTime);
}
public function delete($id)
{
return $this->doDelete($this->getNamespacedId($id));
}
public function getStats()
{
return $this->doGetStats();
}
public function flushAll()
{
return $this->doFlush();
}
public function deleteAll()
{
$namespaceCacheKey = $this->getNamespaceCacheKey();
$namespaceVersion = $this->getNamespaceVersion() + 1;
if ($this->doSave($namespaceCacheKey, $namespaceVersion)) {
$this->namespaceVersion = $namespaceVersion;
return true;
}
return false;
}
private function getNamespacedId($id)
{
$namespaceVersion = $this->getNamespaceVersion();
return sprintf('%s[%s][%s]', $this->namespace, $id, $namespaceVersion);
}
private function getNamespaceCacheKey()
{
return sprintf(self::DOCTRINE_NAMESPACE_CACHEKEY, $this->namespace);
}
private function getNamespaceVersion()
{
if (null !== $this->namespaceVersion) {
return $this->namespaceVersion;
}
$namespaceCacheKey = $this->getNamespaceCacheKey();
$this->namespaceVersion = $this->doFetch($namespaceCacheKey) ?: 1;
return $this->namespaceVersion;
}
protected function doFetchMultiple(array $keys)
{
$returnValues = array();
foreach ($keys as $key) {
if (false !== ($item = $this->doFetch($key)) || $this->doContains($key)) {
$returnValues[$key] = $item;
}
}
return $returnValues;
}
abstract protected function doFetch($id);
abstract protected function doContains($id);
protected function doSaveMultiple(array $keysAndValues, $lifetime = 0)
{
$success = true;
foreach ($keysAndValues as $key => $value) {
if (!$this->doSave($key, $value, $lifetime)) {
$success = false;
}
}
return $success;
}
abstract protected function doSave($id, $data, $lifeTime = 0);
abstract protected function doDelete($id);
abstract protected function doFlush();
abstract protected function doGetStats();
}
}
namespace Symfony\Component\Cache
{
use Doctrine\Common\Cache\CacheProvider;
use Psr\Cache\CacheItemPoolInterface;
class DoctrineProvider extends CacheProvider implements PruneableInterface, ResettableInterface
{
private $pool;
public function __construct(CacheItemPoolInterface $pool)
{
$this->pool = $pool;
}
public function prune()
{
return $this->pool instanceof PruneableInterface && $this->pool->prune();
}
public function reset()
{
if ($this->pool instanceof ResettableInterface) {
$this->pool->reset();
}
$this->setNamespace($this->getNamespace());
}
protected function doFetch($id)
{
$item = $this->pool->getItem(rawurlencode($id));
return $item->isHit() ? $item->get() : false;
}
protected function doContains($id)
{
return $this->pool->hasItem(rawurlencode($id));
}
protected function doSave($id, $data, $lifeTime = 0)
{
$item = $this->pool->getItem(rawurlencode($id));
if (0 < $lifeTime) {
$item->expiresAfter($lifeTime);
}
return $this->pool->save($item->set($data));
}
protected function doDelete($id)
{
return $this->pool->deleteItem(rawurlencode($id));
}
protected function doFlush()
{
return $this->pool->clear();
}
protected function doGetStats()
{
return null;
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\ResourceInterface;
interface ConfigCacheInterface
{
public function getPath();
public function isFresh();
public function write($content, array $metadata = null);
}
}
namespace {require __DIR__.'/../../../vendor/symfony/symfony/src/Symfony/Component/Config/ResourceCheckerConfigCache.php';}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\SelfCheckingResourceChecker;
class ConfigCache extends ResourceCheckerConfigCache
{
private $debug;
public function __construct($file, $debug)
{
$this->debug = (bool) $debug;
$checkers = [];
if (true === $this->debug) {
$checkers = [new SelfCheckingResourceChecker()];
}
parent::__construct($file, $checkers);
}
public function isFresh()
{
if (!$this->debug && is_file($this->getPath())) {
return true;
}
return parent::isFresh();
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
interface FileLocatorInterface
{
public function locate($name, $currentPath = null, $first = true);
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
class FileLocator implements FileLocatorInterface
{
protected $paths;
public function __construct($paths = [])
{
$this->paths = (array) $paths;
}
public function locate($name, $currentPath = null, $first = true)
{
if (''== $name) {
throw new \InvalidArgumentException('An empty file name is not valid to be located.');
}
if ($this->isAbsolutePath($name)) {
if (!file_exists($name)) {
throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist.', $name), 0, null, [$name]);
}
return $name;
}
$paths = $this->paths;
if (null !== $currentPath) {
array_unshift($paths, $currentPath);
}
$paths = array_unique($paths);
$filepaths = $notfound = [];
foreach ($paths as $path) {
if (@file_exists($file = $path.\DIRECTORY_SEPARATOR.$name)) {
if (true === $first) {
return $file;
}
$filepaths[] = $file;
} else {
$notfound[] = $file;
}
}
if (!$filepaths) {
throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist (in: %s).', $name, implode(', ', $paths)), 0, null, $notfound);
}
return $filepaths;
}
private function isAbsolutePath($file)
{
if ('/'=== $file[0] ||'\\'=== $file[0]
|| (\strlen($file) > 3 && ctype_alpha($file[0])
&&':'=== $file[1]
&& ('\\'=== $file[2] ||'/'=== $file[2])
)
|| null !== parse_url($file, PHP_URL_SCHEME)
) {
return true;
}
return false;
}
}
}
namespace Symfony\Component\Debug
{
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\Debug\Exception\ContextErrorException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\Debug\Exception\OutOfMemoryException;
use Symfony\Component\Debug\Exception\SilencedErrorContext;
use Symfony\Component\Debug\FatalErrorHandler\ClassNotFoundFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedMethodFatalErrorHandler;
class ErrorHandler
{
private $levels = [
E_DEPRECATED =>'Deprecated',
E_USER_DEPRECATED =>'User Deprecated',
E_NOTICE =>'Notice',
E_USER_NOTICE =>'User Notice',
E_STRICT =>'Runtime Notice',
E_WARNING =>'Warning',
E_USER_WARNING =>'User Warning',
E_COMPILE_WARNING =>'Compile Warning',
E_CORE_WARNING =>'Core Warning',
E_USER_ERROR =>'User Error',
E_RECOVERABLE_ERROR =>'Catchable Fatal Error',
E_COMPILE_ERROR =>'Compile Error',
E_PARSE =>'Parse Error',
E_ERROR =>'Error',
E_CORE_ERROR =>'Core Error',
];
private $loggers = [
E_DEPRECATED => [null, LogLevel::INFO],
E_USER_DEPRECATED => [null, LogLevel::INFO],
E_NOTICE => [null, LogLevel::WARNING],
E_USER_NOTICE => [null, LogLevel::WARNING],
E_STRICT => [null, LogLevel::WARNING],
E_WARNING => [null, LogLevel::WARNING],
E_USER_WARNING => [null, LogLevel::WARNING],
E_COMPILE_WARNING => [null, LogLevel::WARNING],
E_CORE_WARNING => [null, LogLevel::WARNING],
E_USER_ERROR => [null, LogLevel::CRITICAL],
E_RECOVERABLE_ERROR => [null, LogLevel::CRITICAL],
E_COMPILE_ERROR => [null, LogLevel::CRITICAL],
E_PARSE => [null, LogLevel::CRITICAL],
E_ERROR => [null, LogLevel::CRITICAL],
E_CORE_ERROR => [null, LogLevel::CRITICAL],
];
private $thrownErrors = 0x1FFF; private $scopedErrors = 0x1FFF; private $tracedErrors = 0x77FB; private $screamedErrors = 0x55; private $loggedErrors = 0;
private $traceReflector;
private $isRecursive = 0;
private $isRoot = false;
private $exceptionHandler;
private $bootstrappingLogger;
private static $reservedMemory;
private static $stackedErrors = [];
private static $stackedErrorLevels = [];
private static $toStringException = null;
private static $silencedErrorCache = [];
private static $silencedErrorCount = 0;
private static $exitCode = 0;
public static function register(self $handler = null, $replace = true)
{
if (null === self::$reservedMemory) {
self::$reservedMemory = str_repeat('x', 10240);
register_shutdown_function(__CLASS__.'::handleFatalError');
}
if ($handlerIsNew = null === $handler) {
$handler = new static();
}
if (null === $prev = set_error_handler([$handler,'handleError'])) {
restore_error_handler();
set_error_handler([$handler,'handleError'], $handler->thrownErrors | $handler->loggedErrors);
$handler->isRoot = true;
}
if ($handlerIsNew && \is_array($prev) && $prev[0] instanceof self) {
$handler = $prev[0];
$replace = false;
}
if (!$replace && $prev) {
restore_error_handler();
$handlerIsRegistered = \is_array($prev) && $handler === $prev[0];
} else {
$handlerIsRegistered = true;
}
if (\is_array($prev = set_exception_handler([$handler,'handleException'])) && $prev[0] instanceof self) {
restore_exception_handler();
if (!$handlerIsRegistered) {
$handler = $prev[0];
} elseif ($handler !== $prev[0] && $replace) {
set_exception_handler([$handler,'handleException']);
$p = $prev[0]->setExceptionHandler(null);
$handler->setExceptionHandler($p);
$prev[0]->setExceptionHandler($p);
}
} else {
$handler->setExceptionHandler($prev);
}
$handler->throwAt(E_ALL & $handler->thrownErrors, true);
return $handler;
}
public function __construct(BufferingLogger $bootstrappingLogger = null)
{
if ($bootstrappingLogger) {
$this->bootstrappingLogger = $bootstrappingLogger;
$this->setDefaultLogger($bootstrappingLogger);
}
$this->traceReflector = new \ReflectionProperty('Exception','trace');
$this->traceReflector->setAccessible(true);
}
public function setDefaultLogger(LoggerInterface $logger, $levels = E_ALL, $replace = false)
{
$loggers = [];
if (\is_array($levels)) {
foreach ($levels as $type => $logLevel) {
if (empty($this->loggers[$type][0]) || $replace || $this->loggers[$type][0] === $this->bootstrappingLogger) {
$loggers[$type] = [$logger, $logLevel];
}
}
} else {
if (null === $levels) {
$levels = E_ALL;
}
foreach ($this->loggers as $type => $log) {
if (($type & $levels) && (empty($log[0]) || $replace || $log[0] === $this->bootstrappingLogger)) {
$log[0] = $logger;
$loggers[$type] = $log;
}
}
}
$this->setLoggers($loggers);
}
public function setLoggers(array $loggers)
{
$prevLogged = $this->loggedErrors;
$prev = $this->loggers;
$flush = [];
foreach ($loggers as $type => $log) {
if (!isset($prev[$type])) {
throw new \InvalidArgumentException('Unknown error type: '.$type);
}
if (!\is_array($log)) {
$log = [$log];
} elseif (!\array_key_exists(0, $log)) {
throw new \InvalidArgumentException('No logger provided');
}
if (null === $log[0]) {
$this->loggedErrors &= ~$type;
} elseif ($log[0] instanceof LoggerInterface) {
$this->loggedErrors |= $type;
} else {
throw new \InvalidArgumentException('Invalid logger provided');
}
$this->loggers[$type] = $log + $prev[$type];
if ($this->bootstrappingLogger && $prev[$type][0] === $this->bootstrappingLogger) {
$flush[$type] = $type;
}
}
$this->reRegister($prevLogged | $this->thrownErrors);
if ($flush) {
foreach ($this->bootstrappingLogger->cleanLogs() as $log) {
$type = $log[2]['exception'] instanceof \ErrorException ? $log[2]['exception']->getSeverity() : E_ERROR;
if (!isset($flush[$type])) {
$this->bootstrappingLogger->log($log[0], $log[1], $log[2]);
} elseif ($this->loggers[$type][0]) {
$this->loggers[$type][0]->log($this->loggers[$type][1], $log[1], $log[2]);
}
}
}
return $prev;
}
public function setExceptionHandler(callable $handler = null)
{
$prev = $this->exceptionHandler;
$this->exceptionHandler = $handler;
return $prev;
}
public function throwAt($levels, $replace = false)
{
$prev = $this->thrownErrors;
$this->thrownErrors = ($levels | E_RECOVERABLE_ERROR | E_USER_ERROR) & ~E_USER_DEPRECATED & ~E_DEPRECATED;
if (!$replace) {
$this->thrownErrors |= $prev;
}
$this->reRegister($prev | $this->loggedErrors);
return $prev;
}
public function scopeAt($levels, $replace = false)
{
$prev = $this->scopedErrors;
$this->scopedErrors = (int) $levels;
if (!$replace) {
$this->scopedErrors |= $prev;
}
return $prev;
}
public function traceAt($levels, $replace = false)
{
$prev = $this->tracedErrors;
$this->tracedErrors = (int) $levels;
if (!$replace) {
$this->tracedErrors |= $prev;
}
return $prev;
}
public function screamAt($levels, $replace = false)
{
$prev = $this->screamedErrors;
$this->screamedErrors = (int) $levels;
if (!$replace) {
$this->screamedErrors |= $prev;
}
return $prev;
}
private function reRegister($prev)
{
if ($prev !== $this->thrownErrors | $this->loggedErrors) {
$handler = set_error_handler('var_dump');
$handler = \is_array($handler) ? $handler[0] : null;
restore_error_handler();
if ($handler === $this) {
restore_error_handler();
if ($this->isRoot) {
set_error_handler([$this,'handleError'], $this->thrownErrors | $this->loggedErrors);
} else {
set_error_handler([$this,'handleError']);
}
}
}
}
public function handleError($type, $message, $file, $line)
{
if (\PHP_VERSION_ID >= 70300 && E_WARNING === $type &&'"'=== $message[0] && false !== strpos($message,'" targeting switch is equivalent to "break')) {
$type = E_DEPRECATED;
}
$level = error_reporting();
$silenced = 0 === ($level & $type);
$level |= E_RECOVERABLE_ERROR | E_USER_ERROR | E_DEPRECATED | E_USER_DEPRECATED;
$log = $this->loggedErrors & $type;
$throw = $this->thrownErrors & $type & $level;
$type &= $level | $this->screamedErrors;
if (!$type || (!$log && !$throw)) {
return !$silenced && $type && $log;
}
$scope = $this->scopedErrors & $type;
if (4 < $numArgs = \func_num_args()) {
$context = $scope ? (func_get_arg(4) ?: []) : [];
$backtrace = 5 < $numArgs ? func_get_arg(5) : null; } else {
$context = [];
$backtrace = null;
}
if (isset($context['GLOBALS']) && $scope) {
$e = $context; unset($e['GLOBALS'], $context); $context = $e;
}
if (null !== $backtrace && $type & E_ERROR) {
$this->handleFatalError(compact('type','message','file','line','backtrace'));
return true;
}
$logMessage = $this->levels[$type].': '.$message;
if (null !== self::$toStringException) {
$errorAsException = self::$toStringException;
self::$toStringException = null;
} elseif (!$throw && !($type & $level)) {
if (!isset(self::$silencedErrorCache[$id = $file.':'.$line])) {
$lightTrace = $this->tracedErrors & $type ? $this->cleanTrace(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3), $type, $file, $line, false) : [];
$errorAsException = new SilencedErrorContext($type, $file, $line, $lightTrace);
} elseif (isset(self::$silencedErrorCache[$id][$message])) {
$lightTrace = null;
$errorAsException = self::$silencedErrorCache[$id][$message];
++$errorAsException->count;
} else {
$lightTrace = [];
$errorAsException = null;
}
if (100 < ++self::$silencedErrorCount) {
self::$silencedErrorCache = $lightTrace = [];
self::$silencedErrorCount = 1;
}
if ($errorAsException) {
self::$silencedErrorCache[$id][$message] = $errorAsException;
}
if (null === $lightTrace) {
return true;
}
} else {
if ($scope) {
$errorAsException = new ContextErrorException($logMessage, 0, $type, $file, $line, $context);
} else {
$errorAsException = new \ErrorException($logMessage, 0, $type, $file, $line);
}
if ($throw || $this->tracedErrors & $type) {
$backtrace = $backtrace ?: $errorAsException->getTrace();
$lightTrace = $this->cleanTrace($backtrace, $type, $file, $line, $throw);
$this->traceReflector->setValue($errorAsException, $lightTrace);
} else {
$this->traceReflector->setValue($errorAsException, []);
}
}
if ($throw) {
if (\PHP_VERSION_ID < 70400 && E_USER_ERROR & $type) {
for ($i = 1; isset($backtrace[$i]); ++$i) {
if (isset($backtrace[$i]['function'], $backtrace[$i]['type'], $backtrace[$i - 1]['function'])
&&'__toString'=== $backtrace[$i]['function']
&&'->'=== $backtrace[$i]['type']
&& !isset($backtrace[$i - 1]['class'])
&& ('trigger_error'=== $backtrace[$i - 1]['function'] ||'user_error'=== $backtrace[$i - 1]['function'])
) {
foreach ($context as $e) {
if (($e instanceof \Exception || $e instanceof \Throwable) && $e->__toString() === $message) {
if (1 === $i) {
$errorAsException = $e;
break;
}
self::$toStringException = $e;
return true;
}
}
if (1 < $i) {
$this->handleException($errorAsException);
return false;
}
}
}
}
throw $errorAsException;
}
if ($this->isRecursive) {
$log = 0;
} elseif (self::$stackedErrorLevels) {
self::$stackedErrors[] = [
$this->loggers[$type][0],
($type & $level) ? $this->loggers[$type][1] : LogLevel::DEBUG,
$logMessage,
$errorAsException ? ['exception'=> $errorAsException] : [],
];
} else {
if (!\defined('HHVM_VERSION')) {
$currentErrorHandler = set_error_handler('var_dump');
restore_error_handler();
}
try {
$this->isRecursive = true;
$level = ($type & $level) ? $this->loggers[$type][1] : LogLevel::DEBUG;
$this->loggers[$type][0]->log($level, $logMessage, $errorAsException ? ['exception'=> $errorAsException] : []);
} finally {
$this->isRecursive = false;
if (!\defined('HHVM_VERSION')) {
set_error_handler($currentErrorHandler);
}
}
}
return !$silenced && $type && $log;
}
public function handleException($exception, array $error = null)
{
if (null === $error) {
self::$exitCode = 255;
}
if (!$exception instanceof \Exception) {
$exception = new FatalThrowableError($exception);
}
$type = $exception instanceof FatalErrorException ? $exception->getSeverity() : E_ERROR;
$handlerException = null;
if (($this->loggedErrors & $type) || $exception instanceof FatalThrowableError) {
if ($exception instanceof FatalErrorException) {
if ($exception instanceof FatalThrowableError) {
$error = ['type'=> $type,'message'=> $message = $exception->getMessage(),'file'=> $exception->getFile(),'line'=> $exception->getLine(),
];
} else {
$message ='Fatal '.$exception->getMessage();
}
} elseif ($exception instanceof \ErrorException) {
$message ='Uncaught '.$exception->getMessage();
} else {
$message ='Uncaught Exception: '.$exception->getMessage();
}
}
if ($this->loggedErrors & $type) {
try {
$this->loggers[$type][0]->log($this->loggers[$type][1], $message, ['exception'=> $exception]);
} catch (\Exception $handlerException) {
} catch (\Throwable $handlerException) {
}
}
if ($exception instanceof FatalErrorException && !$exception instanceof OutOfMemoryException && $error) {
foreach ($this->getFatalErrorHandlers() as $handler) {
if ($e = $handler->handleError($error, $exception)) {
$exception = $e;
break;
}
}
}
$exceptionHandler = $this->exceptionHandler;
$this->exceptionHandler = null;
try {
if (null !== $exceptionHandler) {
$exceptionHandler($exception);
return;
}
$handlerException = $handlerException ?: $exception;
} catch (\Exception $handlerException) {
} catch (\Throwable $handlerException) {
}
if ($exception === $handlerException) {
self::$reservedMemory = null; throw $exception; }
$this->handleException($handlerException);
}
public static function handleFatalError(array $error = null)
{
if (null === self::$reservedMemory) {
return;
}
$handler = self::$reservedMemory = null;
$handlers = [];
$previousHandler = null;
$sameHandlerLimit = 10;
while (!\is_array($handler) || !$handler[0] instanceof self) {
$handler = set_exception_handler('var_dump');
restore_exception_handler();
if (!$handler) {
break;
}
restore_exception_handler();
if ($handler !== $previousHandler) {
array_unshift($handlers, $handler);
$previousHandler = $handler;
} elseif (0 === --$sameHandlerLimit) {
$handler = null;
break;
}
}
foreach ($handlers as $h) {
set_exception_handler($h);
}
if (!$handler) {
return;
}
if ($handler !== $h) {
$handler[0]->setExceptionHandler($h);
}
$handler = $handler[0];
$handlers = [];
if ($exit = null === $error) {
$error = error_get_last();
}
try {
while (self::$stackedErrorLevels) {
static::unstackErrors();
}
} catch (\Exception $exception) {
} catch (\Throwable $exception) {
}
if ($error && $error['type'] &= E_PARSE | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR) {
$handler->throwAt(0, true);
$trace = isset($error['backtrace']) ? $error['backtrace'] : null;
if (0 === strpos($error['message'],'Allowed memory') || 0 === strpos($error['message'],'Out of memory')) {
$exception = new OutOfMemoryException($handler->levels[$error['type']].': '.$error['message'], 0, $error['type'], $error['file'], $error['line'], 2, false, $trace);
} else {
$exception = new FatalErrorException($handler->levels[$error['type']].': '.$error['message'], 0, $error['type'], $error['file'], $error['line'], 2, true, $trace);
}
}
try {
if (isset($exception)) {
self::$exitCode = 255;
$handler->handleException($exception, $error);
}
} catch (FatalErrorException $e) {
}
if ($exit && self::$exitCode) {
$exitCode = self::$exitCode;
register_shutdown_function('register_shutdown_function', function () use ($exitCode) { exit($exitCode); });
}
}
public static function stackErrors()
{
@trigger_error('Support for stacking errors is deprecated since Symfony 3.4 and will be removed in 4.0.', E_USER_DEPRECATED);
self::$stackedErrorLevels[] = error_reporting(error_reporting() | E_PARSE | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR);
}
public static function unstackErrors()
{
@trigger_error('Support for unstacking errors is deprecated since Symfony 3.4 and will be removed in 4.0.', E_USER_DEPRECATED);
$level = array_pop(self::$stackedErrorLevels);
if (null !== $level) {
$errorReportingLevel = error_reporting($level);
if ($errorReportingLevel !== ($level | E_PARSE | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR)) {
error_reporting($errorReportingLevel);
}
}
if (empty(self::$stackedErrorLevels)) {
$errors = self::$stackedErrors;
self::$stackedErrors = [];
foreach ($errors as $error) {
$error[0]->log($error[1], $error[2], $error[3]);
}
}
}
protected function getFatalErrorHandlers()
{
return [
new UndefinedFunctionFatalErrorHandler(),
new UndefinedMethodFatalErrorHandler(),
new ClassNotFoundFatalErrorHandler(),
];
}
private function cleanTrace($backtrace, $type, $file, $line, $throw)
{
$lightTrace = $backtrace;
for ($i = 0; isset($backtrace[$i]); ++$i) {
if (isset($backtrace[$i]['file'], $backtrace[$i]['line']) && $backtrace[$i]['line'] === $line && $backtrace[$i]['file'] === $file) {
$lightTrace = \array_slice($lightTrace, 1 + $i);
break;
}
}
if (!($throw || $this->scopedErrors & $type)) {
for ($i = 0; isset($lightTrace[$i]); ++$i) {
unset($lightTrace[$i]['args'], $lightTrace[$i]['object']);
}
}
return $lightTrace;
}
}
}
namespace Symfony\Component\DependencyInjection
{
interface ContainerAwareInterface
{
public function setContainer(ContainerInterface $container = null);
}
}
namespace Psr\Container
{
interface ContainerInterface
{
public function get($id);
public function has($id);
}
}
namespace Symfony\Component\DependencyInjection
{
use Psr\Container\ContainerInterface as PsrContainerInterface;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
interface ContainerInterface extends PsrContainerInterface
{
const EXCEPTION_ON_INVALID_REFERENCE = 1;
const NULL_ON_INVALID_REFERENCE = 2;
const IGNORE_ON_INVALID_REFERENCE = 3;
const IGNORE_ON_UNINITIALIZED_REFERENCE = 4;
public function set($id, $service);
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE);
public function has($id);
public function initialized($id);
public function getParameter($name);
public function hasParameter($name);
public function setParameter($name, $value);
}
}
namespace Symfony\Component\DependencyInjection
{
interface ResettableContainerInterface extends ContainerInterface
{
public function reset();
}
}
namespace Symfony\Component\DependencyInjection
{
use Symfony\Component\DependencyInjection\Exception\EnvNotFoundException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ParameterCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
class Container implements ResettableContainerInterface
{
protected $parameterBag;
protected $services = [];
protected $fileMap = [];
protected $methodMap = [];
protected $aliases = [];
protected $loading = [];
protected $resolving = [];
protected $syntheticIds = [];
protected $privates = [];
protected $normalizedIds = [];
private $underscoreMap = ['_'=>'','.'=>'_','\\'=>'_'];
private $envCache = [];
private $compiled = false;
private $getEnv;
public function __construct(ParameterBagInterface $parameterBag = null)
{
$this->parameterBag = $parameterBag ?: new EnvPlaceholderParameterBag();
}
public function compile()
{
$this->parameterBag->resolve();
$this->parameterBag = new FrozenParameterBag($this->parameterBag->all());
$this->compiled = true;
}
public function isCompiled()
{
return $this->compiled;
}
public function isFrozen()
{
@trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);
return $this->parameterBag instanceof FrozenParameterBag;
}
public function getParameterBag()
{
return $this->parameterBag;
}
public function getParameter($name)
{
return $this->parameterBag->get($name);
}
public function hasParameter($name)
{
return $this->parameterBag->has($name);
}
public function setParameter($name, $value)
{
$this->parameterBag->set($name, $value);
}
public function set($id, $service)
{
if (isset($this->privates['service_container']) && $this->privates['service_container'] instanceof \Closure) {
$initialize = $this->privates['service_container'];
unset($this->privates['service_container']);
$initialize();
}
$id = $this->normalizeId($id);
if ('service_container'=== $id) {
throw new InvalidArgumentException('You cannot set service "service_container".');
}
if (isset($this->privates[$id]) || !(isset($this->fileMap[$id]) || isset($this->methodMap[$id]))) {
if (!isset($this->privates[$id]) && !isset($this->getRemovedIds()[$id])) {
} elseif (null === $service) {
@trigger_error(sprintf('The "%s" service is private, unsetting it is deprecated since Symfony 3.2 and will fail in 4.0.', $id), E_USER_DEPRECATED);
unset($this->privates[$id]);
} else {
@trigger_error(sprintf('The "%s" service is private, replacing it is deprecated since Symfony 3.2 and will fail in 4.0.', $id), E_USER_DEPRECATED);
}
} elseif (isset($this->services[$id])) {
if (null === $service) {
@trigger_error(sprintf('The "%s" service is already initialized, unsetting it is deprecated since Symfony 3.3 and will fail in 4.0.', $id), E_USER_DEPRECATED);
} else {
@trigger_error(sprintf('The "%s" service is already initialized, replacing it is deprecated since Symfony 3.3 and will fail in 4.0.', $id), E_USER_DEPRECATED);
}
}
if (isset($this->aliases[$id])) {
unset($this->aliases[$id]);
}
if (null === $service) {
unset($this->services[$id]);
return;
}
$this->services[$id] = $service;
}
public function has($id)
{
for ($i = 2;;) {
if (isset($this->privates[$id])) {
@trigger_error(sprintf('The "%s" service is private, checking for its existence is deprecated since Symfony 3.2 and will fail in 4.0.', $id), E_USER_DEPRECATED);
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
if (isset($this->services[$id])) {
return true;
}
if ('service_container'=== $id) {
return true;
}
if (isset($this->fileMap[$id]) || isset($this->methodMap[$id])) {
return true;
}
if (--$i && $id !== $normalizedId = $this->normalizeId($id)) {
$id = $normalizedId;
continue;
}
if (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class && method_exists($this,'get'.strtr($id, $this->underscoreMap).'Service')) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since Symfony 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
return true;
}
return false;
}
}
public function get($id, $invalidBehavior = 1)
{
for ($i = 2;;) {
if (isset($this->privates[$id])) {
@trigger_error(sprintf('The "%s" service is private, getting it from the container is deprecated since Symfony 3.2 and will fail in 4.0. You should either make the service public, or stop using the container directly and use dependency injection instead.', $id), E_USER_DEPRECATED);
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
if (isset($this->services[$id])) {
return $this->services[$id];
}
if ('service_container'=== $id) {
return $this;
}
if (isset($this->loading[$id])) {
throw new ServiceCircularReferenceException($id, array_merge(array_keys($this->loading), [$id]));
}
$this->loading[$id] = true;
try {
if (isset($this->fileMap[$id])) {
return 4 === $invalidBehavior ? null : $this->load($this->fileMap[$id]);
} elseif (isset($this->methodMap[$id])) {
return 4 === $invalidBehavior ? null : $this->{$this->methodMap[$id]}();
} elseif (--$i && $id !== $normalizedId = $this->normalizeId($id)) {
unset($this->loading[$id]);
$id = $normalizedId;
continue;
} elseif (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class && method_exists($this, $method ='get'.strtr($id, $this->underscoreMap).'Service')) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since Symfony 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
return 4 === $invalidBehavior ? null : $this->{$method}();
}
break;
} catch (\Exception $e) {
unset($this->services[$id]);
throw $e;
} finally {
unset($this->loading[$id]);
}
}
if ( 1 === $invalidBehavior) {
if (!$id) {
throw new ServiceNotFoundException($id);
}
if (isset($this->syntheticIds[$id])) {
throw new ServiceNotFoundException($id, null, null, [], sprintf('The "%s" service is synthetic, it needs to be set at boot time before it can be used.', $id));
}
if (isset($this->getRemovedIds()[$id])) {
throw new ServiceNotFoundException($id, null, null, [], sprintf('The "%s" service or alias has been removed or inlined when the container was compiled. You should either make it public, or stop using the container directly and use dependency injection instead.', $id));
}
$alternatives = [];
foreach ($this->getServiceIds() as $knownId) {
$lev = levenshtein($id, $knownId);
if ($lev <= \strlen($id) / 3 || false !== strpos($knownId, $id)) {
$alternatives[] = $knownId;
}
}
throw new ServiceNotFoundException($id, null, null, $alternatives);
}
}
public function initialized($id)
{
$id = $this->normalizeId($id);
if (isset($this->privates[$id])) {
@trigger_error(sprintf('Checking for the initialization of the "%s" private service is deprecated since Symfony 3.4 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
if ('service_container'=== $id) {
return false;
}
return isset($this->services[$id]);
}
public function reset()
{
$this->services = [];
}
public function getServiceIds()
{
$ids = [];
if (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since Symfony 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
foreach (get_class_methods($this) as $method) {
if (preg_match('/^get(.+)Service$/', $method, $match)) {
$ids[] = self::underscore($match[1]);
}
}
}
$ids[] ='service_container';
return array_map('strval', array_unique(array_merge($ids, array_keys($this->methodMap), array_keys($this->fileMap), array_keys($this->aliases), array_keys($this->services))));
}
public function getRemovedIds()
{
return [];
}
public static function camelize($id)
{
return strtr(ucwords(strtr($id, ['_'=>' ','.'=>'_ ','\\'=>'_ '])), [' '=>'']);
}
public static function underscore($id)
{
return strtolower(preg_replace(['/([A-Z]+)([A-Z][a-z])/','/([a-z\d])([A-Z])/'], ['\\1_\\2','\\1_\\2'], str_replace('_','.', $id)));
}
protected function load($file)
{
return require $file;
}
protected function getEnv($name)
{
if (isset($this->resolving[$envName = "env($name)"])) {
throw new ParameterCircularReferenceException(array_keys($this->resolving));
}
if (isset($this->envCache[$name]) || \array_key_exists($name, $this->envCache)) {
return $this->envCache[$name];
}
if (!$this->has($id ='container.env_var_processors_locator')) {
$this->set($id, new ServiceLocator([]));
}
if (!$this->getEnv) {
$this->getEnv = new \ReflectionMethod($this, __FUNCTION__);
$this->getEnv->setAccessible(true);
$this->getEnv = $this->getEnv->getClosure($this);
}
$processors = $this->get($id);
if (false !== $i = strpos($name,':')) {
$prefix = substr($name, 0, $i);
$localName = substr($name, 1 + $i);
} else {
$prefix ='string';
$localName = $name;
}
$processor = $processors->has($prefix) ? $processors->get($prefix) : new EnvVarProcessor($this);
$this->resolving[$envName] = true;
try {
return $this->envCache[$name] = $processor->getEnv($prefix, $localName, $this->getEnv);
} finally {
unset($this->resolving[$envName]);
}
}
public function normalizeId($id)
{
if (!\is_string($id)) {
$id = (string) $id;
}
if (isset($this->normalizedIds[$normalizedId = strtolower($id)])) {
$normalizedId = $this->normalizedIds[$normalizedId];
if ($id !== $normalizedId) {
@trigger_error(sprintf('Service identifiers will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.3.', $id, $normalizedId), E_USER_DEPRECATED);
}
} else {
$normalizedId = $this->normalizedIds[$normalizedId] = $id;
}
return $normalizedId;
}
private function __clone()
{
}
}
}
namespace Symfony\Component\EventDispatcher
{
class Event
{
private $propagationStopped = false;
public function isPropagationStopped()
{
return $this->propagationStopped;
}
public function stopPropagation()
{
$this->propagationStopped = true;
}
}
}
namespace Symfony\Component\EventDispatcher
{
interface EventDispatcherInterface
{
public function dispatch($eventName, Event $event = null);
public function addListener($eventName, $listener, $priority = 0);
public function addSubscriber(EventSubscriberInterface $subscriber);
public function removeListener($eventName, $listener);
public function removeSubscriber(EventSubscriberInterface $subscriber);
public function getListeners($eventName = null);
public function getListenerPriority($eventName, $listener);
public function hasListeners($eventName = null);
}
}
namespace Symfony\Component\EventDispatcher
{
class EventDispatcher implements EventDispatcherInterface
{
private $listeners = [];
private $sorted = [];
public function dispatch($eventName, Event $event = null)
{
if (null === $event) {
$event = new Event();
}
if ($listeners = $this->getListeners($eventName)) {
$this->doDispatch($listeners, $eventName, $event);
}
return $event;
}
public function getListeners($eventName = null)
{
if (null !== $eventName) {
if (empty($this->listeners[$eventName])) {
return [];
}
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
return $this->sorted[$eventName];
}
foreach ($this->listeners as $eventName => $eventListeners) {
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
}
return array_filter($this->sorted);
}
public function getListenerPriority($eventName, $listener)
{
if (empty($this->listeners[$eventName])) {
return null;
}
if (\is_array($listener) && isset($listener[0]) && $listener[0] instanceof \Closure) {
$listener[0] = $listener[0]();
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
foreach ($listeners as $k => $v) {
if ($v !== $listener && \is_array($v) && isset($v[0]) && $v[0] instanceof \Closure) {
$v[0] = $v[0]();
$this->listeners[$eventName][$priority][$k] = $v;
}
if ($v === $listener) {
return $priority;
}
}
}
return null;
}
public function hasListeners($eventName = null)
{
if (null !== $eventName) {
return !empty($this->listeners[$eventName]);
}
foreach ($this->listeners as $eventListeners) {
if ($eventListeners) {
return true;
}
}
return false;
}
public function addListener($eventName, $listener, $priority = 0)
{
$this->listeners[$eventName][$priority][] = $listener;
unset($this->sorted[$eventName]);
}
public function removeListener($eventName, $listener)
{
if (empty($this->listeners[$eventName])) {
return;
}
if (\is_array($listener) && isset($listener[0]) && $listener[0] instanceof \Closure) {
$listener[0] = $listener[0]();
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
foreach ($listeners as $k => $v) {
if ($v !== $listener && \is_array($v) && isset($v[0]) && $v[0] instanceof \Closure) {
$v[0] = $v[0]();
}
if ($v === $listener) {
unset($listeners[$k], $this->sorted[$eventName]);
} else {
$listeners[$k] = $v;
}
}
if ($listeners) {
$this->listeners[$eventName][$priority] = $listeners;
} else {
unset($this->listeners[$eventName][$priority]);
}
}
}
public function addSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (\is_string($params)) {
$this->addListener($eventName, [$subscriber, $params]);
} elseif (\is_string($params[0])) {
$this->addListener($eventName, [$subscriber, $params[0]], isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->addListener($eventName, [$subscriber, $listener[0]], isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function removeSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (\is_array($params) && \is_array($params[0])) {
foreach ($params as $listener) {
$this->removeListener($eventName, [$subscriber, $listener[0]]);
}
} else {
$this->removeListener($eventName, [$subscriber, \is_string($params) ? $params : $params[0]]);
}
}
}
protected function doDispatch($listeners, $eventName, Event $event)
{
foreach ($listeners as $listener) {
if ($event->isPropagationStopped()) {
break;
}
\call_user_func($listener, $event, $eventName, $this);
}
}
private function sortListeners($eventName)
{
krsort($this->listeners[$eventName]);
$this->sorted[$eventName] = [];
foreach ($this->listeners[$eventName] as $priority => $listeners) {
foreach ($listeners as $k => $listener) {
if (\is_array($listener) && isset($listener[0]) && $listener[0] instanceof \Closure) {
$listener[0] = $listener[0]();
$this->listeners[$eventName][$priority][$k] = $listener;
}
$this->sorted[$eventName][] = $listener;
}
}
}
}
}
namespace Symfony\Component\EventDispatcher
{
use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Component\DependencyInjection\ContainerInterface;
class ContainerAwareEventDispatcher extends EventDispatcher
{
private $container;
private $listenerIds = [];
private $listeners = [];
public function __construct(ContainerInterface $container)
{
$this->container = $container;
$class = \get_class($this);
if ($this instanceof \PHPUnit_Framework_MockObject_MockObject || $this instanceof MockObject || $this instanceof \Prophecy\Doubler\DoubleInterface) {
$class = get_parent_class($class);
}
if (__CLASS__ !== $class) {
@trigger_error(sprintf('The %s class is deprecated since Symfony 3.3 and will be removed in 4.0. Use EventDispatcher with closure factories instead.', __CLASS__), E_USER_DEPRECATED);
}
}
public function addListenerService($eventName, $callback, $priority = 0)
{
@trigger_error(sprintf('The %s class is deprecated since Symfony 3.3 and will be removed in 4.0. Use EventDispatcher with closure factories instead.', __CLASS__), E_USER_DEPRECATED);
if (!\is_array($callback) || 2 !== \count($callback)) {
throw new \InvalidArgumentException('Expected an ["service", "method"] argument');
}
$this->listenerIds[$eventName][] = [$callback[0], $callback[1], $priority];
}
public function removeListener($eventName, $listener)
{
$this->lazyLoad($eventName);
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as $i => list($serviceId, $method)) {
$key = $serviceId.'.'.$method;
if (isset($this->listeners[$eventName][$key]) && $listener === [$this->listeners[$eventName][$key], $method]) {
unset($this->listeners[$eventName][$key]);
if (empty($this->listeners[$eventName])) {
unset($this->listeners[$eventName]);
}
unset($this->listenerIds[$eventName][$i]);
if (empty($this->listenerIds[$eventName])) {
unset($this->listenerIds[$eventName]);
}
}
}
}
parent::removeListener($eventName, $listener);
}
public function hasListeners($eventName = null)
{
if (null === $eventName) {
return $this->listenerIds || $this->listeners || parent::hasListeners();
}
if (isset($this->listenerIds[$eventName])) {
return true;
}
return parent::hasListeners($eventName);
}
public function getListeners($eventName = null)
{
if (null === $eventName) {
foreach ($this->listenerIds as $serviceEventName => $args) {
$this->lazyLoad($serviceEventName);
}
} else {
$this->lazyLoad($eventName);
}
return parent::getListeners($eventName);
}
public function getListenerPriority($eventName, $listener)
{
$this->lazyLoad($eventName);
return parent::getListenerPriority($eventName, $listener);
}
public function addSubscriberService($serviceId, $class)
{
@trigger_error(sprintf('The %s class is deprecated since Symfony 3.3 and will be removed in 4.0. Use EventDispatcher with closure factories instead.', __CLASS__), E_USER_DEPRECATED);
foreach ($class::getSubscribedEvents() as $eventName => $params) {
if (\is_string($params)) {
$this->listenerIds[$eventName][] = [$serviceId, $params, 0];
} elseif (\is_string($params[0])) {
$this->listenerIds[$eventName][] = [$serviceId, $params[0], isset($params[1]) ? $params[1] : 0];
} else {
foreach ($params as $listener) {
$this->listenerIds[$eventName][] = [$serviceId, $listener[0], isset($listener[1]) ? $listener[1] : 0];
}
}
}
}
public function getContainer()
{
@trigger_error('The '.__METHOD__.'() method is deprecated since Symfony 3.3 as its class will be removed in 4.0. Inject the container or the services you need in your listeners/subscribers instead.', E_USER_DEPRECATED);
return $this->container;
}
protected function lazyLoad($eventName)
{
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as list($serviceId, $method, $priority)) {
$listener = $this->container->get($serviceId);
$key = $serviceId.'.'.$method;
if (!isset($this->listeners[$eventName][$key])) {
$this->addListener($eventName, [$listener, $method], $priority);
} elseif ($this->listeners[$eventName][$key] !== $listener) {
parent::removeListener($eventName, [$this->listeners[$eventName][$key], $method]);
$this->addListener($eventName, [$listener, $method], $priority);
}
$this->listeners[$eventName][$key] = $listener;
}
}
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
class ResponseListener implements EventSubscriberInterface
{
private $charset;
public function __construct($charset)
{
$this->charset = $charset;
}
public function onKernelResponse(FilterResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$response = $event->getResponse();
if (null === $response->getCharset()) {
$response->setCharset($this->charset);
}
$response->prepare($event->getRequest());
}
public static function getSubscribedEvents()
{
return [
KernelEvents::RESPONSE =>'onKernelResponse',
];
}
}
}
namespace {require __DIR__.'/../../../vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/RouterListener.php';}
namespace Symfony\Component\HttpKernel\Bundle
{
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
interface BundleInterface extends ContainerAwareInterface
{
public function boot();
public function shutdown();
public function build(ContainerBuilder $container);
public function getContainerExtension();
public function getParent();
public function getName();
public function getNamespace();
public function getPath();
}
}
namespace Symfony\Component\DependencyInjection
{
trait ContainerAwareTrait
{
protected $container;
public function setContainer(ContainerInterface $container = null)
{
$this->container = $container;
}
}
}
namespace Symfony\Component\HttpKernel\Bundle
{
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\Finder\Finder;
abstract class Bundle implements BundleInterface
{
use ContainerAwareTrait;
protected $name;
protected $extension;
protected $path;
private $namespace;
public function boot()
{
}
public function shutdown()
{
}
public function build(ContainerBuilder $container)
{
}
public function getContainerExtension()
{
if (null === $this->extension) {
$extension = $this->createContainerExtension();
if (null !== $extension) {
if (!$extension instanceof ExtensionInterface) {
throw new \LogicException(sprintf('Extension %s must implement Symfony\Component\DependencyInjection\Extension\ExtensionInterface.', \get_class($extension)));
}
$basename = preg_replace('/Bundle$/','', $this->getName());
$expectedAlias = Container::underscore($basename);
if ($expectedAlias != $extension->getAlias()) {
throw new \LogicException(sprintf('Users will expect the alias of the default extension of a bundle to be the underscored version of the bundle name ("%s"). You can override "Bundle::getContainerExtension()" if you want to use "%s" or another alias.', $expectedAlias, $extension->getAlias()));
}
$this->extension = $extension;
} else {
$this->extension = false;
}
}
return $this->extension ?: null;
}
public function getNamespace()
{
if (null === $this->namespace) {
$this->parseClassName();
}
return $this->namespace;
}
public function getPath()
{
if (null === $this->path) {
$reflected = new \ReflectionObject($this);
$this->path = \dirname($reflected->getFileName());
}
return $this->path;
}
public function getParent()
{
}
final public function getName()
{
if (null === $this->name) {
$this->parseClassName();
}
return $this->name;
}
public function registerCommands(Application $application)
{
if (!is_dir($dir = $this->getPath().'/Command')) {
return;
}
if (!class_exists('Symfony\Component\Finder\Finder')) {
throw new \RuntimeException('You need the symfony/finder component to register bundle commands.');
}
$finder = new Finder();
$finder->files()->name('*Command.php')->in($dir);
$prefix = $this->getNamespace().'\\Command';
foreach ($finder as $file) {
$ns = $prefix;
if ($relativePath = $file->getRelativePath()) {
$ns .='\\'.str_replace('/','\\', $relativePath);
}
$class = $ns.'\\'.$file->getBasename('.php');
if ($this->container) {
$commandIds = $this->container->hasParameter('console.command.ids') ? $this->container->getParameter('console.command.ids') : [];
$alias ='console.command.'.strtolower(str_replace('\\','_', $class));
if (isset($commandIds[$alias]) || $this->container->has($alias)) {
continue;
}
}
$r = new \ReflectionClass($class);
if ($r->isSubclassOf('Symfony\\Component\\Console\\Command\\Command') && !$r->isAbstract() && !$r->getConstructor()->getNumberOfRequiredParameters()) {
@trigger_error(sprintf('Auto-registration of the command "%s" is deprecated since Symfony 3.4 and won\'t be supported in 4.0. Use PSR-4 based service discovery instead.', $class), E_USER_DEPRECATED);
$application->add($r->newInstance());
}
}
}
protected function getContainerExtensionClass()
{
$basename = preg_replace('/Bundle$/','', $this->getName());
return $this->getNamespace().'\\DependencyInjection\\'.$basename.'Extension';
}
protected function createContainerExtension()
{
return class_exists($class = $this->getContainerExtensionClass()) ? new $class() : null;
}
private function parseClassName()
{
$pos = strrpos(static::class,'\\');
$this->namespace = false === $pos ?'': substr(static::class, 0, $pos);
if (null === $this->name) {
$this->name = false === $pos ? static::class : substr(static::class, $pos + 1);
}
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ArgumentResolverInterface
{
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ControllerResolverInterface
{
public function getController(Request $request);
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
class ControllerResolver implements ArgumentResolverInterface, ControllerResolverInterface
{
private $logger;
private $supportsVariadic;
private $supportsScalarTypes;
public function __construct(LoggerInterface $logger = null)
{
$this->logger = $logger;
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsScalarTypes = method_exists('ReflectionParameter','getType');
}
public function getController(Request $request)
{
if (!$controller = $request->attributes->get('_controller')) {
if (null !== $this->logger) {
$this->logger->warning('Unable to look for the controller as the "_controller" parameter is missing.');
}
return false;
}
if (\is_array($controller)) {
return $controller;
}
if (\is_object($controller)) {
if (method_exists($controller,'__invoke')) {
return $controller;
}
throw new \InvalidArgumentException(sprintf('Controller "%s" for URI "%s" is not callable.', \get_class($controller), $request->getPathInfo()));
}
if (false === strpos($controller,':')) {
if (method_exists($controller,'__invoke')) {
return $this->instantiateController($controller);
} elseif (\function_exists($controller)) {
return $controller;
}
}
try {
$callable = $this->createController($controller);
} catch (\InvalidArgumentException $e) {
throw new \InvalidArgumentException(sprintf('The controller for URI "%s" is not callable. %s', $request->getPathInfo(), $e->getMessage()));
}
return $callable;
}
public function getArguments(Request $request, $controller)
{
@trigger_error(sprintf('The "%s()" method is deprecated as of 3.1 and will be removed in 4.0. Implement the %s and inject it in the HttpKernel instead.', __METHOD__, ArgumentResolverInterface::class), E_USER_DEPRECATED);
if (\is_array($controller)) {
$r = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (\is_object($controller) && !$controller instanceof \Closure) {
$r = new \ReflectionObject($controller);
$r = $r->getMethod('__invoke');
} else {
$r = new \ReflectionFunction($controller);
}
return $this->doGetArguments($request, $controller, $r->getParameters());
}
protected function doGetArguments(Request $request, $controller, array $parameters)
{
@trigger_error(sprintf('The "%s()" method is deprecated as of 3.1 and will be removed in 4.0. Implement the %s and inject it in the HttpKernel instead.', __METHOD__, ArgumentResolverInterface::class), E_USER_DEPRECATED);
$attributes = $request->attributes->all();
$arguments = [];
foreach ($parameters as $param) {
if (\array_key_exists($param->name, $attributes)) {
if ($this->supportsVariadic && $param->isVariadic() && \is_array($attributes[$param->name])) {
$arguments = array_merge($arguments, array_values($attributes[$param->name]));
} else {
$arguments[] = $attributes[$param->name];
}
} elseif ($param->getClass() && $param->getClass()->isInstance($request)) {
$arguments[] = $request;
} elseif ($param->isDefaultValueAvailable()) {
$arguments[] = $param->getDefaultValue();
} elseif ($this->supportsScalarTypes && $param->hasType() && $param->allowsNull()) {
$arguments[] = null;
} else {
if (\is_array($controller)) {
$repr = sprintf('%s::%s()', \get_class($controller[0]), $controller[1]);
} elseif (\is_object($controller)) {
$repr = \get_class($controller);
} else {
$repr = $controller;
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument (because there is no default value or because there is a non optional argument after this one).', $repr, $param->name));
}
}
return $arguments;
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
throw new \InvalidArgumentException(sprintf('Unable to find controller "%s".', $controller));
}
list($class, $method) = explode('::', $controller, 2);
if (!class_exists($class)) {
throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
}
$controller = [$this->instantiateController($class), $method];
if (!\is_callable($controller)) {
throw new \InvalidArgumentException($this->getControllerError($controller));
}
return $controller;
}
protected function instantiateController($class)
{
return new $class();
}
private function getControllerError($callable)
{
if (\is_string($callable)) {
if (false !== strpos($callable,'::')) {
$callable = explode('::', $callable);
}
if (class_exists($callable) && !method_exists($callable,'__invoke')) {
return sprintf('Class "%s" does not have a method "__invoke".', $callable);
}
if (!\function_exists($callable)) {
return sprintf('Function "%s" does not exist.', $callable);
}
}
if (!\is_array($callable)) {
return sprintf('Invalid type for controller given, expected string or array, got "%s".', \gettype($callable));
}
if (2 !== \count($callable)) {
return'Invalid format for controller, expected [controller, method] or controller::method.';
}
list($controller, $method) = $callable;
if (\is_string($controller) && !class_exists($controller)) {
return sprintf('Class "%s" does not exist.', $controller);
}
$className = \is_object($controller) ? \get_class($controller) : $controller;
if (method_exists($controller, $method)) {
return sprintf('Method "%s" on class "%s" should be public and non-abstract.', $method, $className);
}
$collection = get_class_methods($controller);
$alternatives = [];
foreach ($collection as $item) {
$lev = levenshtein($method, $item);
if ($lev <= \strlen($method) / 3 || false !== strpos($item, $method)) {
$alternatives[] = $item;
}
}
asort($alternatives);
$message = sprintf('Expected method "%s" on class "%s"', $method, $className);
if (\count($alternatives) > 0) {
$message .= sprintf(', did you mean "%s"?', implode('", "', $alternatives));
} else {
$message .= sprintf('. Available methods: "%s".', implode('", "', $collection));
}
return $message;
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface;
final class ArgumentResolver implements ArgumentResolverInterface
{
private $argumentMetadataFactory;
private $argumentValueResolvers;
public function __construct(ArgumentMetadataFactoryInterface $argumentMetadataFactory = null, $argumentValueResolvers = [])
{
$this->argumentMetadataFactory = $argumentMetadataFactory ?: new ArgumentMetadataFactory();
$this->argumentValueResolvers = $argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
}
public function getArguments(Request $request, $controller)
{
$arguments = [];
foreach ($this->argumentMetadataFactory->createArgumentMetadata($controller) as $metadata) {
foreach ($this->argumentValueResolvers as $resolver) {
if (!$resolver->supports($request, $metadata)) {
continue;
}
$resolved = $resolver->resolve($request, $metadata);
if (!$resolved instanceof \Generator) {
throw new \InvalidArgumentException(sprintf('%s::resolve() must yield at least one value.', \get_class($resolver)));
}
foreach ($resolved as $append) {
$arguments[] = $append;
}
continue 2;
}
$representative = $controller;
if (\is_array($representative)) {
$representative = sprintf('%s::%s()', \get_class($representative[0]), $representative[1]);
} elseif (\is_object($representative)) {
$representative = \get_class($representative);
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', $representative, $metadata->getName()));
}
return $arguments;
}
public static function getDefaultArgumentValueResolvers()
{
return [
new RequestAttributeValueResolver(),
new RequestValueResolver(),
new SessionValueResolver(),
new DefaultValueResolver(),
new VariadicValueResolver(),
];
}
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
class ArgumentMetadata
{
private $name;
private $type;
private $isVariadic;
private $hasDefaultValue;
private $defaultValue;
private $isNullable;
public function __construct($name, $type, $isVariadic, $hasDefaultValue, $defaultValue, $isNullable = false)
{
$this->name = $name;
$this->type = $type;
$this->isVariadic = $isVariadic;
$this->hasDefaultValue = $hasDefaultValue;
$this->defaultValue = $defaultValue;
$this->isNullable = $isNullable || null === $type || ($hasDefaultValue && null === $defaultValue);
}
public function getName()
{
return $this->name;
}
public function getType()
{
return $this->type;
}
public function isVariadic()
{
return $this->isVariadic;
}
public function hasDefaultValue()
{
return $this->hasDefaultValue;
}
public function isNullable()
{
return $this->isNullable;
}
public function getDefaultValue()
{
if (!$this->hasDefaultValue) {
throw new \LogicException(sprintf('Argument $%s does not have a default value. Use %s::hasDefaultValue() to avoid this exception.', $this->name, __CLASS__));
}
return $this->defaultValue;
}
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
interface ArgumentMetadataFactoryInterface
{
public function createArgumentMetadata($controller);
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
private $supportsVariadic;
private $supportsParameterType;
public function __construct()
{
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsParameterType = method_exists('ReflectionParameter','getType');
}
public function createArgumentMetadata($controller)
{
$arguments = [];
if (\is_array($controller)) {
$reflection = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (\is_object($controller) && !$controller instanceof \Closure) {
$reflection = (new \ReflectionObject($controller))->getMethod('__invoke');
} else {
$reflection = new \ReflectionFunction($controller);
}
foreach ($reflection->getParameters() as $param) {
$arguments[] = new ArgumentMetadata($param->getName(), $this->getType($param, $reflection), $this->isVariadic($param), $this->hasDefaultValue($param), $this->getDefaultValue($param), $param->allowsNull());
}
return $arguments;
}
private function isVariadic(\ReflectionParameter $parameter)
{
return $this->supportsVariadic && $parameter->isVariadic();
}
private function hasDefaultValue(\ReflectionParameter $parameter)
{
return $parameter->isDefaultValueAvailable();
}
private function getDefaultValue(\ReflectionParameter $parameter)
{
return $this->hasDefaultValue($parameter) ? $parameter->getDefaultValue() : null;
}
private function getType(\ReflectionParameter $parameter, \ReflectionFunctionAbstract $function)
{
if ($this->supportsParameterType) {
if (!$type = $parameter->getType()) {
return null;
}
$name = $type instanceof \ReflectionNamedType ? $type->getName() : $type->__toString();
if ('array'=== $name && !$type->isBuiltin()) {
return null;
}
} elseif (preg_match('/^(?:[^ ]++ ){4}([a-zA-Z_\x7F-\xFF][^ ]++)/', $parameter, $name)) {
$name = $name[1];
} else {
return null;
}
$lcName = strtolower($name);
if ('self'!== $lcName &&'parent'!== $lcName) {
return $name;
}
if (!$function instanceof \ReflectionMethod) {
return null;
}
if ('self'=== $lcName) {
return $function->getDeclaringClass()->name;
}
if ($parent = $function->getDeclaringClass()->getParentClass()) {
return $parent->name;
}
return null;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class KernelEvent extends Event
{
private $kernel;
private $request;
private $requestType;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType)
{
$this->kernel = $kernel;
$this->request = $request;
$this->requestType = $requestType;
}
public function getKernel()
{
return $this->kernel;
}
public function getRequest()
{
return $this->request;
}
public function getRequestType()
{
return $this->requestType;
}
public function isMasterRequest()
{
return HttpKernelInterface::MASTER_REQUEST === $this->requestType;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class FilterControllerEvent extends KernelEvent
{
private $controller;
public function __construct(HttpKernelInterface $kernel, callable $controller, Request $request, $requestType)
{
parent::__construct($kernel, $request, $requestType);
$this->setController($controller);
}
public function getController()
{
return $this->controller;
}
public function setController(callable $controller)
{
$this->controller = $controller;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class FilterResponseEvent extends KernelEvent
{
private $response;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, Response $response)
{
parent::__construct($kernel, $request, $requestType);
$this->setResponse($response);
}
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Response;
class GetResponseEvent extends KernelEvent
{
private $response;
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
$this->stopPropagation();
}
public function hasResponse()
{
return null !== $this->response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class GetResponseForControllerResultEvent extends GetResponseEvent
{
private $controllerResult;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, $controllerResult)
{
parent::__construct($kernel, $request, $requestType);
$this->controllerResult = $controllerResult;
}
public function getControllerResult()
{
return $this->controllerResult;
}
public function setControllerResult($controllerResult)
{
$this->controllerResult = $controllerResult;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class GetResponseForExceptionEvent extends GetResponseEvent
{
private $exception;
private $allowCustomResponseCode = false;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, \Exception $e)
{
parent::__construct($kernel, $request, $requestType);
$this->setException($e);
}
public function getException()
{
return $this->exception;
}
public function setException(\Exception $exception)
{
$this->exception = $exception;
}
public function allowCustomResponseCode()
{
$this->allowCustomResponseCode = true;
}
public function isAllowingCustomResponseCode()
{
return $this->allowCustomResponseCode;
}
}
}
namespace Symfony\Component\HttpKernel
{
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Exception\RequestExceptionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class HttpKernel implements HttpKernelInterface, TerminableInterface
{
protected $dispatcher;
protected $resolver;
protected $requestStack;
private $argumentResolver;
public function __construct(EventDispatcherInterface $dispatcher, ControllerResolverInterface $resolver, RequestStack $requestStack = null, ArgumentResolverInterface $argumentResolver = null)
{
$this->dispatcher = $dispatcher;
$this->resolver = $resolver;
$this->requestStack = $requestStack ?: new RequestStack();
$this->argumentResolver = $argumentResolver;
if (null === $this->argumentResolver) {
@trigger_error(sprintf('As of 3.1 an %s is used to resolve arguments. In 4.0 the $argumentResolver becomes the %s if no other is provided instead of using the $resolver argument.', ArgumentResolverInterface::class, ArgumentResolver::class), E_USER_DEPRECATED);
$this->argumentResolver = $resolver;
}
}
public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
{
$request->headers->set('X-Php-Ob-Level', ob_get_level());
try {
return $this->handleRaw($request, $type);
} catch (\Exception $e) {
if ($e instanceof RequestExceptionInterface) {
$e = new BadRequestHttpException($e->getMessage(), $e);
}
if (false === $catch) {
$this->finishRequest($request, $type);
throw $e;
}
return $this->handleException($e, $request, $type);
}
}
public function terminate(Request $request, Response $response)
{
$this->dispatcher->dispatch(KernelEvents::TERMINATE, new PostResponseEvent($this, $request, $response));
}
public function terminateWithException(\Exception $exception, Request $request = null)
{
if (!$request = $request ?: $this->requestStack->getMasterRequest()) {
throw $exception;
}
$response = $this->handleException($exception, $request, self::MASTER_REQUEST);
$response->sendHeaders();
$response->sendContent();
$this->terminate($request, $response);
}
private function handleRaw(Request $request, $type = self::MASTER_REQUEST)
{
$this->requestStack->push($request);
$event = new GetResponseEvent($this, $request, $type);
$this->dispatcher->dispatch(KernelEvents::REQUEST, $event);
if ($event->hasResponse()) {
return $this->filterResponse($event->getResponse(), $request, $type);
}
if (false === $controller = $this->resolver->getController($request)) {
throw new NotFoundHttpException(sprintf('Unable to find the controller for path "%s". The route is wrongly configured.', $request->getPathInfo()));
}
$event = new FilterControllerEvent($this, $controller, $request, $type);
$this->dispatcher->dispatch(KernelEvents::CONTROLLER, $event);
$controller = $event->getController();
$arguments = $this->argumentResolver->getArguments($request, $controller);
$event = new FilterControllerArgumentsEvent($this, $controller, $arguments, $request, $type);
$this->dispatcher->dispatch(KernelEvents::CONTROLLER_ARGUMENTS, $event);
$controller = $event->getController();
$arguments = $event->getArguments();
$response = \call_user_func_array($controller, $arguments);
if (!$response instanceof Response) {
$event = new GetResponseForControllerResultEvent($this, $request, $type, $response);
$this->dispatcher->dispatch(KernelEvents::VIEW, $event);
if ($event->hasResponse()) {
$response = $event->getResponse();
}
if (!$response instanceof Response) {
$msg = sprintf('The controller must return a response (%s given).', $this->varToString($response));
if (null === $response) {
$msg .=' Did you forget to add a return statement somewhere in your controller?';
}
throw new \LogicException($msg);
}
}
return $this->filterResponse($response, $request, $type);
}
private function filterResponse(Response $response, Request $request, $type)
{
$event = new FilterResponseEvent($this, $request, $type, $response);
$this->dispatcher->dispatch(KernelEvents::RESPONSE, $event);
$this->finishRequest($request, $type);
return $event->getResponse();
}
private function finishRequest(Request $request, $type)
{
$this->dispatcher->dispatch(KernelEvents::FINISH_REQUEST, new FinishRequestEvent($this, $request, $type));
$this->requestStack->pop();
}
private function handleException(\Exception $e, $request, $type)
{
$event = new GetResponseForExceptionEvent($this, $request, $type, $e);
$this->dispatcher->dispatch(KernelEvents::EXCEPTION, $event);
$e = $event->getException();
if (!$event->hasResponse()) {
$this->finishRequest($request, $type);
throw $e;
}
$response = $event->getResponse();
if ($response->headers->has('X-Status-Code')) {
@trigger_error(sprintf('Using the X-Status-Code header is deprecated since Symfony 3.3 and will be removed in 4.0. Use %s::allowCustomResponseCode() instead.', GetResponseForExceptionEvent::class), E_USER_DEPRECATED);
$response->setStatusCode($response->headers->get('X-Status-Code'));
$response->headers->remove('X-Status-Code');
} elseif (!$event->isAllowingCustomResponseCode() && !$response->isClientError() && !$response->isServerError() && !$response->isRedirect()) {
if ($e instanceof HttpExceptionInterface) {
$response->setStatusCode($e->getStatusCode());
$response->headers->add($e->getHeaders());
} else {
$response->setStatusCode(500);
}
}
try {
return $this->filterResponse($response, $request, $type);
} catch (\Exception $e) {
return $response;
}
}
private function varToString($var)
{
if (\is_object($var)) {
return sprintf('Object(%s)', \get_class($var));
}
if (\is_array($var)) {
$a = [];
foreach ($var as $k => $v) {
$a[] = sprintf('%s => %s', $k, $this->varToString($v));
}
return sprintf('Array(%s)', implode(', ', $a));
}
if (\is_resource($var)) {
return sprintf('Resource(%s)', get_resource_type($var));
}
if (null === $var) {
return'null';
}
if (false === $var) {
return'false';
}
if (true === $var) {
return'true';
}
return (string) $var;
}
}
}
namespace Symfony\Component\HttpKernel
{
final class KernelEvents
{
const REQUEST ='kernel.request';
const EXCEPTION ='kernel.exception';
const VIEW ='kernel.view';
const CONTROLLER ='kernel.controller';
const CONTROLLER_ARGUMENTS ='kernel.controller_arguments';
const RESPONSE ='kernel.response';
const TERMINATE ='kernel.terminate';
const FINISH_REQUEST ='kernel.finish_request';
}
}
namespace Symfony\Component\HttpKernel\Config
{
use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;
class FileLocator extends BaseFileLocator
{
private $kernel;
private $path;
public function __construct(KernelInterface $kernel, $path = null, array $paths = [])
{
$this->kernel = $kernel;
if (null !== $path) {
$this->path = $path;
$paths[] = $path;
}
parent::__construct($paths);
}
public function locate($file, $currentPath = null, $first = true)
{
if (isset($file[0]) &&'@'=== $file[0]) {
return $this->kernel->locateResource($file, $this->path, $first);
}
return parent::locate($file, $currentPath, $first);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Symfony\Component\HttpKernel\KernelInterface;
class ControllerNameParser
{
protected $kernel;
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($controller)
{
$parts = explode(':', $controller);
if (3 !== \count($parts) || \in_array('', $parts, true)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "a:b:c" controller string.', $controller));
}
$originalController = $controller;
list($bundle, $controller, $action) = $parts;
$controller = str_replace('/','\\', $controller);
$bundles = [];
try {
$allBundles = $this->kernel->getBundle($bundle, false, true);
} catch (\InvalidArgumentException $e) {
$message = sprintf('The "%s" (from the _controller value "%s") does not exist or is not enabled in your kernel!',
$bundle,
$originalController
);
if ($alternative = $this->findAlternative($bundle)) {
$message .= sprintf(' Did you mean "%s:%s:%s"?', $alternative, $controller, $action);
}
throw new \InvalidArgumentException($message, 0, $e);
}
if (!\is_array($allBundles)) {
$allBundles = [$allBundles];
}
foreach ($allBundles as $b) {
$try = $b->getNamespace().'\\Controller\\'.$controller.'Controller';
if (class_exists($try)) {
return $try.'::'.$action.'Action';
}
$bundles[] = $b->getName();
$msg = sprintf('The _controller value "%s:%s:%s" maps to a "%s" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', $bundle, $controller, $action, $try);
}
if (\count($bundles) > 1) {
$msg = sprintf('Unable to find controller "%s:%s" in bundles %s.', $bundle, $controller, implode(', ', $bundles));
}
throw new \InvalidArgumentException($msg);
}
public function build($controller)
{
if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "class::method" string.', $controller));
}
$className = $match[1];
$controllerName = $match[2];
$actionName = $match[3];
foreach ($this->kernel->getBundles() as $name => $bundle) {
if (0 !== strpos($className, $bundle->getNamespace())) {
continue;
}
return sprintf('%s:%s:%s', $name, $controllerName, $actionName);
}
throw new \InvalidArgumentException(sprintf('Unable to find a bundle that defines controller "%s".', $controller));
}
private function findAlternative($nonExistentBundleName)
{
$bundleNames = array_map(function ($b) {
return $b->getName();
}, $this->kernel->getBundles());
$alternative = null;
$shortest = null;
foreach ($bundleNames as $bundleName) {
if (false !== strpos($bundleName, $nonExistentBundleName)) {
return $bundleName;
}
$lev = levenshtein($nonExistentBundleName, $bundleName);
if ($lev <= \strlen($nonExistentBundleName) / 3 && (null === $alternative || $lev < $shortest)) {
$alternative = $bundleName;
$shortest = $lev;
}
}
return $alternative;
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;
class ContainerControllerResolver extends ControllerResolver
{
protected $container;
public function __construct(ContainerInterface $container, LoggerInterface $logger = null)
{
$this->container = $container;
parent::__construct($logger);
}
public function getController(Request $request)
{
$controller = parent::getController($request);
if (\is_array($controller) && isset($controller[0]) && \is_string($controller[0]) && $this->container->has($controller[0])) {
$controller[0] = $this->instantiateController($controller[0]);
}
return $controller;
}
protected function createController($controller)
{
if (false !== strpos($controller,'::')) {
return parent::createController($controller);
}
$method = null;
if (1 == substr_count($controller,':')) {
list($controller, $method) = explode(':', $controller, 2);
}
if (!$this->container->has($controller)) {
$this->throwExceptionIfControllerWasRemoved($controller);
throw new \LogicException(sprintf('Controller not found: service "%s" does not exist.', $controller));
}
$service = $this->container->get($controller);
if (null !== $method) {
return [$service, $method];
}
if (!method_exists($service,'__invoke')) {
throw new \LogicException(sprintf('Controller "%s" cannot be called without a method name. Did you forget an "__invoke" method?', $controller));
}
return $service;
}
protected function instantiateController($class)
{
if ($this->container->has($class)) {
return $this->container->get($class);
}
try {
return parent::instantiateController($class);
} catch (\ArgumentCountError $e) {
} catch (\ErrorException $e) {
} catch (\TypeError $e) {
}
$this->throwExceptionIfControllerWasRemoved($class, $e);
throw $e;
}
private function throwExceptionIfControllerWasRemoved($controller, $previous = null)
{
if ($this->container instanceof Container && isset($this->container->getRemovedIds()[$controller])) {
throw new \LogicException(sprintf('Controller "%s" cannot be fetched from the container because it is private. Did you forget to tag the service with "controller.service_arguments"?', $controller), 0, $previous);
}
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Controller\ContainerControllerResolver;
class ControllerResolver extends ContainerControllerResolver
{
protected $parser;
public function __construct(ContainerInterface $container, ControllerNameParser $parser, LoggerInterface $logger = null)
{
$this->parser = $parser;
parent::__construct($container, $logger);
}
protected function createController($controller)
{
if (false === strpos($controller,'::') && 2 === substr_count($controller,':')) {
$controller = $this->parser->parse($controller);
}
$resolvedController = parent::createController($controller);
if (1 === substr_count($controller,':') && \is_array($resolvedController)) {
$resolvedController[0] = $this->configureController($resolvedController[0]);
}
return $resolvedController;
}
protected function instantiateController($class)
{
return $this->configureController(parent::instantiateController($class));
}
private function configureController($controller)
{
if ($controller instanceof ContainerAwareInterface) {
switch (\get_class($controller)) {
case RedirectController::class:
case TemplateController::class:
return $controller;
}
$controller->setContainer($this->container);
}
if ($controller instanceof AbstractController && null !== $previousContainer = $controller->setContainer($this->container)) {
$controller->setContainer($previousContainer);
}
return $controller;
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface AccessMapInterface
{
public function getPatterns(Request $request);
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestMatcherInterface;
class AccessMap implements AccessMapInterface
{
private $map = [];
public function add(RequestMatcherInterface $requestMatcher, array $attributes = [], $channel = null)
{
$this->map[] = [$requestMatcher, $attributes, $channel];
}
public function getPatterns(Request $request)
{
foreach ($this->map as $elements) {
if (null === $elements[0] || $elements[0]->matches($request)) {
return [$elements[1], $elements[2]];
}
}
return [null, null];
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Http\Firewall\AccessListener;
class Firewall implements EventSubscriberInterface
{
private $map;
private $dispatcher;
private $exceptionListeners;
public function __construct(FirewallMapInterface $map, EventDispatcherInterface $dispatcher)
{
$this->map = $map;
$this->dispatcher = $dispatcher;
$this->exceptionListeners = new \SplObjectStorage();
}
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$listeners = $this->map->getListeners($event->getRequest());
$authenticationListeners = $listeners[0];
$exceptionListener = $listeners[1];
$logoutListener = isset($listeners[2]) ? $listeners[2] : null;
if (null !== $exceptionListener) {
$this->exceptionListeners[$event->getRequest()] = $exceptionListener;
$exceptionListener->register($this->dispatcher);
}
$authenticationListeners = function () use ($authenticationListeners, $logoutListener) {
$accessListener = null;
foreach ($authenticationListeners as $listener) {
if ($listener instanceof AccessListener) {
$accessListener = $listener;
continue;
}
yield $listener;
}
if (null !== $logoutListener) {
yield $logoutListener;
}
if (null !== $accessListener) {
yield $accessListener;
}
};
$this->handleRequest($event, $authenticationListeners());
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
$request = $event->getRequest();
if (isset($this->exceptionListeners[$request])) {
$this->exceptionListeners[$request]->unregister($this->dispatcher);
unset($this->exceptionListeners[$request]);
}
}
public static function getSubscribedEvents()
{
return [
KernelEvents::REQUEST => ['onKernelRequest', 8],
KernelEvents::FINISH_REQUEST =>'onKernelFinishRequest',
];
}
protected function handleRequest(GetResponseEvent $event, $listeners)
{
foreach ($listeners as $listener) {
$listener->handle($event);
if ($event->hasResponse()) {
break;
}
}
}
}
}
namespace Symfony\Component\Security\Core\User
{
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
interface UserProviderInterface
{
public function loadUserByUsername($username);
public function refreshUser(UserInterface $user);
public function supportsClass($class);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
interface AuthenticationManagerInterface
{
public function authenticate(TokenInterface $token);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\ProviderNotFoundException;
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
private $providers;
private $eraseCredentials;
private $eventDispatcher;
public function __construct($providers, $eraseCredentials = true)
{
if (!$providers) {
throw new \InvalidArgumentException('You must at least add one authentication provider.');
}
$this->providers = $providers;
$this->eraseCredentials = (bool) $eraseCredentials;
}
public function setEventDispatcher(EventDispatcherInterface $dispatcher)
{
$this->eventDispatcher = $dispatcher;
}
public function authenticate(TokenInterface $token)
{
$lastException = null;
$result = null;
foreach ($this->providers as $provider) {
if (!$provider instanceof AuthenticationProviderInterface) {
throw new \InvalidArgumentException(sprintf('Provider "%s" must implement the AuthenticationProviderInterface.', \get_class($provider)));
}
if (!$provider->supports($token)) {
continue;
}
try {
$result = $provider->authenticate($token);
if (null !== $result) {
break;
}
} catch (AccountStatusException $e) {
$lastException = $e;
break;
} catch (AuthenticationException $e) {
$lastException = $e;
}
}
if (null !== $result) {
if (true === $this->eraseCredentials) {
$result->eraseCredentials();
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_SUCCESS, new AuthenticationEvent($result));
}
return $result;
}
if (null === $lastException) {
$lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class "%s".', \get_class($token)));
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_FAILURE, new AuthenticationFailureEvent($token, $lastException));
}
$lastException->setToken($token);
throw $lastException;
}
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface TokenStorageInterface
{
public function getToken();
public function setToken(TokenInterface $token = null);
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class TokenStorage implements TokenStorageInterface
{
private $token;
public function getToken()
{
return $this->token;
}
public function setToken(TokenInterface $token = null)
{
$this->token = $token;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface AccessDecisionManagerInterface
{
public function decide(TokenInterface $token, array $attributes, $object = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Exception\LogicException;
class AccessDecisionManager implements AccessDecisionManagerInterface
{
const STRATEGY_AFFIRMATIVE ='affirmative';
const STRATEGY_CONSENSUS ='consensus';
const STRATEGY_UNANIMOUS ='unanimous';
private $voters;
private $strategy;
private $allowIfAllAbstainDecisions;
private $allowIfEqualGrantedDeniedDecisions;
public function __construct($voters = [], $strategy = self::STRATEGY_AFFIRMATIVE, $allowIfAllAbstainDecisions = false, $allowIfEqualGrantedDeniedDecisions = true)
{
$strategyMethod ='decide'.ucfirst($strategy);
if (''=== $strategy || !\is_callable([$this, $strategyMethod])) {
throw new \InvalidArgumentException(sprintf('The strategy "%s" is not supported.', $strategy));
}
$this->voters = $voters;
$this->strategy = $strategyMethod;
$this->allowIfAllAbstainDecisions = (bool) $allowIfAllAbstainDecisions;
$this->allowIfEqualGrantedDeniedDecisions = (bool) $allowIfEqualGrantedDeniedDecisions;
}
public function setVoters(array $voters)
{
@trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Pass the voters to the constructor instead.', __METHOD__), E_USER_DEPRECATED);
$this->voters = $voters;
}
public function decide(TokenInterface $token, array $attributes, $object = null)
{
return $this->{$this->strategy}($token, $attributes, $object);
}
private function decideAffirmative(TokenInterface $token, array $attributes, $object = null)
{
$deny = 0;
foreach ($this->voters as $voter) {
$result = $this->vote($voter, $token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
return true;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
default:
break;
}
}
if ($deny > 0) {
return false;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideConsensus(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
$deny = 0;
foreach ($this->voters as $voter) {
$result = $this->vote($voter, $token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
}
}
if ($grant > $deny) {
return true;
}
if ($deny > $grant) {
return false;
}
if ($grant > 0) {
return $this->allowIfEqualGrantedDeniedDecisions;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideUnanimous(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
foreach ($this->voters as $voter) {
foreach ($attributes as $attribute) {
$result = $this->vote($voter, $token, $object, [$attribute]);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
return false;
default:
break;
}
}
}
if ($grant > 0) {
return true;
}
return $this->allowIfAllAbstainDecisions;
}
private function vote($voter, TokenInterface $token, $subject, $attributes)
{
if ($voter instanceof VoterInterface) {
return $voter->vote($token, $subject, $attributes);
}
if (method_exists($voter,'vote')) {
@trigger_error(sprintf('Calling vote() on an voter without %1$s is deprecated as of 3.4 and will be removed in 4.0. Implement the %1$s on your voter.', VoterInterface::class), E_USER_DEPRECATED);
return $voter->vote($token, $subject, $attributes);
}
throw new LogicException(sprintf('%s should implement the %s interface when used as voter.', \get_class($voter), VoterInterface::class));
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
interface AuthorizationCheckerInterface
{
public function isGranted($attributes, $subject = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
class AuthorizationChecker implements AuthorizationCheckerInterface
{
private $tokenStorage;
private $accessDecisionManager;
private $authenticationManager;
private $alwaysAuthenticate;
public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager, AccessDecisionManagerInterface $accessDecisionManager, $alwaysAuthenticate = false)
{
$this->tokenStorage = $tokenStorage;
$this->authenticationManager = $authenticationManager;
$this->accessDecisionManager = $accessDecisionManager;
$this->alwaysAuthenticate = $alwaysAuthenticate;
}
final public function isGranted($attributes, $subject = null)
{
if (null === ($token = $this->tokenStorage->getToken())) {
throw new AuthenticationCredentialsNotFoundException('The token storage contains no authentication token. One possible reason may be that there is no firewall configured for this URL.');
}
if ($this->alwaysAuthenticate || !$token->isAuthenticated()) {
$this->tokenStorage->setToken($token = $this->authenticationManager->authenticate($token));
}
if (!\is_array($attributes)) {
$attributes = [$attributes];
}
return $this->accessDecisionManager->decide($token, $attributes, $subject);
}
}
}
namespace Symfony\Component\Security\Core\Authorization\Voter
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface VoterInterface
{
const ACCESS_GRANTED = 1;
const ACCESS_ABSTAIN = 0;
const ACCESS_DENIED = -1;
public function vote(TokenInterface $token, $subject, array $attributes);
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
final class FirewallConfig
{
private $name;
private $userChecker;
private $requestMatcher;
private $securityEnabled;
private $stateless;
private $provider;
private $context;
private $entryPoint;
private $accessDeniedHandler;
private $accessDeniedUrl;
private $listeners;
private $switchUser;
public function __construct($name, $userChecker, $requestMatcher = null, $securityEnabled = true, $stateless = false, $provider = null, $context = null, $entryPoint = null, $accessDeniedHandler = null, $accessDeniedUrl = null, $listeners = [], $switchUser = null)
{
$this->name = $name;
$this->userChecker = $userChecker;
$this->requestMatcher = $requestMatcher;
$this->securityEnabled = $securityEnabled;
$this->stateless = $stateless;
$this->provider = $provider;
$this->context = $context;
$this->entryPoint = $entryPoint;
$this->accessDeniedHandler = $accessDeniedHandler;
$this->accessDeniedUrl = $accessDeniedUrl;
$this->listeners = $listeners;
$this->switchUser = $switchUser;
}
public function getName()
{
return $this->name;
}
public function getRequestMatcher()
{
return $this->requestMatcher;
}
public function isSecurityEnabled()
{
return $this->securityEnabled;
}
public function allowsAnonymous()
{
return \in_array('anonymous', $this->listeners, true);
}
public function isStateless()
{
return $this->stateless;
}
public function getProvider()
{
return $this->provider;
}
public function getContext()
{
return $this->context;
}
public function getEntryPoint()
{
return $this->entryPoint;
}
public function getUserChecker()
{
return $this->userChecker;
}
public function getAccessDeniedHandler()
{
return $this->accessDeniedHandler;
}
public function getAccessDeniedUrl()
{
return $this->accessDeniedUrl;
}
public function getListeners()
{
return $this->listeners;
}
public function getSwitchUser()
{
return $this->switchUser;
}
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
use Symfony\Component\Security\Http\Firewall\LogoutListener;
class FirewallContext
{
private $listeners;
private $exceptionListener;
private $logoutListener;
private $config;
public function __construct($listeners, ExceptionListener $exceptionListener = null, $logoutListener = null, FirewallConfig $config = null)
{
$this->listeners = $listeners;
$this->exceptionListener = $exceptionListener;
if ($logoutListener instanceof FirewallConfig) {
$this->config = $logoutListener;
} elseif (null === $logoutListener || $logoutListener instanceof LogoutListener) {
$this->logoutListener = $logoutListener;
$this->config = $config;
} else {
throw new \InvalidArgumentException(sprintf('Argument 3 passed to %s() must be instance of %s or null, %s given.', __METHOD__, LogoutListener::class, \is_object($logoutListener) ? \get_class($logoutListener) : \gettype($logoutListener)));
}
}
public function getConfig()
{
return $this->config;
}
public function getContext()
{
@trigger_error(sprintf('The "%s()" method is deprecated since Symfony 3.3 and will be removed in 4.0. Use %s::getListeners/getExceptionListener() instead.', __METHOD__, __CLASS__), E_USER_DEPRECATED);
return [$this->getListeners(), $this->getExceptionListener(), $this->getLogoutListener()];
}
public function getListeners()
{
return $this->listeners;
}
public function getExceptionListener()
{
return $this->exceptionListener;
}
public function getLogoutListener()
{
return $this->logoutListener;
}
}
}
namespace Symfony\Component\HttpFoundation
{
interface RequestMatcherInterface
{
public function matches(Request $request);
}
}
namespace Symfony\Component\HttpFoundation
{
class RequestMatcher implements RequestMatcherInterface
{
private $path;
private $host;
private $methods = [];
private $ips = [];
private $attributes = [];
private $schemes = [];
public function __construct($path = null, $host = null, $methods = null, $ips = null, array $attributes = [], $schemes = null)
{
$this->matchPath($path);
$this->matchHost($host);
$this->matchMethod($methods);
$this->matchIps($ips);
$this->matchScheme($schemes);
foreach ($attributes as $k => $v) {
$this->matchAttribute($k, $v);
}
}
public function matchScheme($scheme)
{
$this->schemes = null !== $scheme ? array_map('strtolower', (array) $scheme) : [];
}
public function matchHost($regexp)
{
$this->host = $regexp;
}
public function matchPath($regexp)
{
$this->path = $regexp;
}
public function matchIp($ip)
{
$this->matchIps($ip);
}
public function matchIps($ips)
{
$this->ips = null !== $ips ? (array) $ips : [];
}
public function matchMethod($method)
{
$this->methods = null !== $method ? array_map('strtoupper', (array) $method) : [];
}
public function matchAttribute($key, $regexp)
{
$this->attributes[$key] = $regexp;
}
public function matches(Request $request)
{
if ($this->schemes && !\in_array($request->getScheme(), $this->schemes, true)) {
return false;
}
if ($this->methods && !\in_array($request->getMethod(), $this->methods, true)) {
return false;
}
foreach ($this->attributes as $key => $pattern) {
if (!preg_match('{'.$pattern.'}', $request->attributes->get($key))) {
return false;
}
}
if (null !== $this->path && !preg_match('{'.$this->path.'}', rawurldecode($request->getPathInfo()))) {
return false;
}
if (null !== $this->host && !preg_match('{'.$this->host.'}i', $request->getHost())) {
return false;
}
if (IpUtils::checkIp($request->getClientIp(), $this->ips)) {
return true;
}
return 0 === \count($this->ips);
}
}
}
namespace Twig
{
use Twig\Cache\CacheInterface;
use Twig\Cache\FilesystemCache;
use Twig\Cache\NullCache;
use Twig\Error\Error;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Extension\CoreExtension;
use Twig\Extension\EscaperExtension;
use Twig\Extension\ExtensionInterface;
use Twig\Extension\GlobalsInterface;
use Twig\Extension\InitRuntimeInterface;
use Twig\Extension\OptimizerExtension;
use Twig\Extension\StagingExtension;
use Twig\Loader\ArrayLoader;
use Twig\Loader\ChainLoader;
use Twig\Loader\LoaderInterface;
use Twig\Loader\SourceContextLoaderInterface;
use Twig\Node\ModuleNode;
use Twig\NodeVisitor\NodeVisitorInterface;
use Twig\RuntimeLoader\RuntimeLoaderInterface;
use Twig\TokenParser\TokenParserInterface;
class Environment
{
const VERSION ='1.42.4';
const VERSION_ID = 14204;
const MAJOR_VERSION = 1;
const MINOR_VERSION = 42;
const RELEASE_VERSION = 4;
const EXTRA_VERSION ='';
protected $charset;
protected $loader;
protected $debug;
protected $autoReload;
protected $cache;
protected $lexer;
protected $parser;
protected $compiler;
protected $baseTemplateClass;
protected $extensions;
protected $parsers;
protected $visitors;
protected $filters;
protected $tests;
protected $functions;
protected $globals;
protected $runtimeInitialized = false;
protected $extensionInitialized = false;
protected $loadedTemplates;
protected $strictVariables;
protected $unaryOperators;
protected $binaryOperators;
protected $templateClassPrefix ='__TwigTemplate_';
protected $functionCallbacks = [];
protected $filterCallbacks = [];
protected $staging;
private $originalCache;
private $bcWriteCacheFile = false;
private $bcGetCacheFilename = false;
private $lastModifiedExtension = 0;
private $extensionsByClass = [];
private $runtimeLoaders = [];
private $runtimes = [];
private $optionsHash;
public function __construct(LoaderInterface $loader = null, $options = [])
{
if (null !== $loader) {
$this->setLoader($loader);
} else {
@trigger_error('Not passing a "Twig\Lodaer\LoaderInterface" as the first constructor argument of "Twig\Environment" is deprecated since version 1.21.', E_USER_DEPRECATED);
}
$options = array_merge(['debug'=> false,'charset'=>'UTF-8','base_template_class'=>'\Twig\Template','strict_variables'=> false,'autoescape'=>'html','cache'=> false,'auto_reload'=> null,'optimizations'=> -1,
], $options);
$this->debug = (bool) $options['debug'];
$this->charset = strtoupper($options['charset']);
$this->baseTemplateClass = $options['base_template_class'];
$this->autoReload = null === $options['auto_reload'] ? $this->debug : (bool) $options['auto_reload'];
$this->strictVariables = (bool) $options['strict_variables'];
$this->setCache($options['cache']);
$this->addExtension(new CoreExtension());
$this->addExtension(new EscaperExtension($options['autoescape']));
$this->addExtension(new OptimizerExtension($options['optimizations']));
$this->staging = new StagingExtension();
if (\is_string($this->originalCache)) {
$r = new \ReflectionMethod($this,'writeCacheFile');
if (__CLASS__ !== $r->getDeclaringClass()->getName()) {
@trigger_error('The Twig\Environment::writeCacheFile method is deprecated since version 1.22 and will be removed in Twig 2.0.', E_USER_DEPRECATED);
$this->bcWriteCacheFile = true;
}
$r = new \ReflectionMethod($this,'getCacheFilename');
if (__CLASS__ !== $r->getDeclaringClass()->getName()) {
@trigger_error('The Twig\Environment::getCacheFilename method is deprecated since version 1.22 and will be removed in Twig 2.0.', E_USER_DEPRECATED);
$this->bcGetCacheFilename = true;
}
}
}
public function getBaseTemplateClass()
{
return $this->baseTemplateClass;
}
public function setBaseTemplateClass($class)
{
$this->baseTemplateClass = $class;
$this->updateOptionsHash();
}
public function enableDebug()
{
$this->debug = true;
$this->updateOptionsHash();
}
public function disableDebug()
{
$this->debug = false;
$this->updateOptionsHash();
}
public function isDebug()
{
return $this->debug;
}
public function enableAutoReload()
{
$this->autoReload = true;
}
public function disableAutoReload()
{
$this->autoReload = false;
}
public function isAutoReload()
{
return $this->autoReload;
}
public function enableStrictVariables()
{
$this->strictVariables = true;
$this->updateOptionsHash();
}
public function disableStrictVariables()
{
$this->strictVariables = false;
$this->updateOptionsHash();
}
public function isStrictVariables()
{
return $this->strictVariables;
}
public function getCache($original = true)
{
return $original ? $this->originalCache : $this->cache;
}
public function setCache($cache)
{
if (\is_string($cache)) {
$this->originalCache = $cache;
$this->cache = new FilesystemCache($cache);
} elseif (false === $cache) {
$this->originalCache = $cache;
$this->cache = new NullCache();
} elseif (null === $cache) {
@trigger_error('Using "null" as the cache strategy is deprecated since version 1.23 and will be removed in Twig 2.0.', E_USER_DEPRECATED);
$this->originalCache = false;
$this->cache = new NullCache();
} elseif ($cache instanceof CacheInterface) {
$this->originalCache = $this->cache = $cache;
} else {
throw new \LogicException(sprintf('Cache can only be a string, false, or a \Twig\Cache\CacheInterface implementation.'));
}
}
public function getCacheFilename($name)
{
@trigger_error(sprintf('The %s method is deprecated since version 1.22 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
$key = $this->cache->generateKey($name, $this->getTemplateClass($name));
return !$key ? false : $key;
}
public function getTemplateClass($name, $index = null)
{
$key = $this->getLoader()->getCacheKey($name).$this->optionsHash;
return $this->templateClassPrefix.hash('sha256', $key).(null === $index ?'':'___'.$index);
}
public function getTemplateClassPrefix()
{
@trigger_error(sprintf('The %s method is deprecated since version 1.22 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
return $this->templateClassPrefix;
}
public function render($name, array $context = [])
{
return $this->load($name)->render($context);
}
public function display($name, array $context = [])
{
$this->load($name)->display($context);
}
public function load($name)
{
if ($name instanceof TemplateWrapper) {
return $name;
}
if ($name instanceof Template) {
return new TemplateWrapper($this, $name);
}
return new TemplateWrapper($this, $this->loadTemplate($name));
}
public function loadTemplate($name, $index = null)
{
return $this->loadClass($this->getTemplateClass($name), $name, $index);
}
public function loadClass($cls, $name, $index = null)
{
$mainCls = $cls;
if (null !== $index) {
$cls .='___'.$index;
}
if (isset($this->loadedTemplates[$cls])) {
return $this->loadedTemplates[$cls];
}
if (!class_exists($cls, false)) {
if ($this->bcGetCacheFilename) {
$key = $this->getCacheFilename($name);
} else {
$key = $this->cache->generateKey($name, $mainCls);
}
if (!$this->isAutoReload() || $this->isTemplateFresh($name, $this->cache->getTimestamp($key))) {
$this->cache->load($key);
}
$source = null;
if (!class_exists($cls, false)) {
$loader = $this->getLoader();
if (!$loader instanceof SourceContextLoaderInterface) {
$source = new Source($loader->getSource($name), $name);
} else {
$source = $loader->getSourceContext($name);
}
$content = $this->compileSource($source);
if ($this->bcWriteCacheFile) {
$this->writeCacheFile($key, $content);
} else {
$this->cache->write($key, $content);
$this->cache->load($key);
}
if (!class_exists($mainCls, false)) {
eval('?>'.$content);
}
}
if (!class_exists($cls, false)) {
throw new RuntimeError(sprintf('Failed to load Twig template "%s", index "%s": cache might be corrupted.', $name, $index), -1, $source);
}
}
if (!$this->runtimeInitialized) {
$this->initRuntime();
}
return $this->loadedTemplates[$cls] = new $cls($this);
}
public function createTemplate($template, $name = null)
{
$hash = hash('sha256', $template, false);
if (null !== $name) {
$name = sprintf('%s (string template %s)', $name, $hash);
} else {
$name = sprintf('__string_template__%s', $hash);
}
$loader = new ChainLoader([
new ArrayLoader([$name => $template]),
$current = $this->getLoader(),
]);
$this->setLoader($loader);
try {
$template = new TemplateWrapper($this, $this->loadTemplate($name));
} catch (\Exception $e) {
$this->setLoader($current);
throw $e;
} catch (\Throwable $e) {
$this->setLoader($current);
throw $e;
}
$this->setLoader($current);
return $template;
}
public function isTemplateFresh($name, $time)
{
if (0 === $this->lastModifiedExtension) {
foreach ($this->extensions as $extension) {
$r = new \ReflectionObject($extension);
if (file_exists($r->getFileName()) && ($extensionTime = filemtime($r->getFileName())) > $this->lastModifiedExtension) {
$this->lastModifiedExtension = $extensionTime;
}
}
}
return $this->lastModifiedExtension <= $time && $this->getLoader()->isFresh($name, $time);
}
public function resolveTemplate($names)
{
if (!\is_array($names)) {
$names = [$names];
}
foreach ($names as $name) {
if ($name instanceof Template) {
return $name;
}
if ($name instanceof TemplateWrapper) {
return $name;
}
try {
return $this->loadTemplate($name);
} catch (LoaderError $e) {
if (1 === \count($names)) {
throw $e;
}
}
}
throw new LoaderError(sprintf('Unable to find one of the following templates: "%s".', implode('", "', $names)));
}
public function clearTemplateCache()
{
@trigger_error(sprintf('The %s method is deprecated since version 1.18.3 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
$this->loadedTemplates = [];
}
public function clearCacheFiles()
{
@trigger_error(sprintf('The %s method is deprecated since version 1.22 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
if (\is_string($this->originalCache)) {
foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->originalCache), \RecursiveIteratorIterator::LEAVES_ONLY) as $file) {
if ($file->isFile()) {
@unlink($file->getPathname());
}
}
}
}
public function getLexer()
{
@trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);
if (null === $this->lexer) {
$this->lexer = new Lexer($this);
}
return $this->lexer;
}
public function setLexer(\Twig_LexerInterface $lexer)
{
$this->lexer = $lexer;
}
public function tokenize($source, $name = null)
{
if (!$source instanceof Source) {
@trigger_error(sprintf('Passing a string as the $source argument of %s() is deprecated since version 1.27. Pass a Twig\Source instance instead.', __METHOD__), E_USER_DEPRECATED);
$source = new Source($source, $name);
}
if (null === $this->lexer) {
$this->lexer = new Lexer($this);
}
return $this->lexer->tokenize($source);
}
public function getParser()
{
@trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);
if (null === $this->parser) {
$this->parser = new Parser($this);
}
return $this->parser;
}
public function setParser(\Twig_ParserInterface $parser)
{
$this->parser = $parser;
}
public function parse(TokenStream $stream)
{
if (null === $this->parser) {
$this->parser = new Parser($this);
}
return $this->parser->parse($stream);
}
public function getCompiler()
{
@trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);
if (null === $this->compiler) {
$this->compiler = new Compiler($this);
}
return $this->compiler;
}
public function setCompiler(\Twig_CompilerInterface $compiler)
{
$this->compiler = $compiler;
}
public function compile(\Twig_NodeInterface $node)
{
if (null === $this->compiler) {
$this->compiler = new Compiler($this);
}
return $this->compiler->compile($node)->getSource();
}
public function compileSource($source, $name = null)
{
if (!$source instanceof Source) {
@trigger_error(sprintf('Passing a string as the $source argument of %s() is deprecated since version 1.27. Pass a Twig\Source instance instead.', __METHOD__), E_USER_DEPRECATED);
$source = new Source($source, $name);
}
try {
return $this->compile($this->parse($this->tokenize($source)));
} catch (Error $e) {
$e->setSourceContext($source);
throw $e;
} catch (\Exception $e) {
throw new SyntaxError(sprintf('An exception has been thrown during the compilation of a template ("%s").', $e->getMessage()), -1, $source, $e);
}
}
public function setLoader(LoaderInterface $loader)
{
if (!$loader instanceof SourceContextLoaderInterface && 0 !== strpos(\get_class($loader),'Mock_')) {
@trigger_error(sprintf('Twig loader "%s" should implement Twig\Loader\SourceContextLoaderInterface since version 1.27.', \get_class($loader)), E_USER_DEPRECATED);
}
$this->loader = $loader;
}
public function getLoader()
{
if (null === $this->loader) {
throw new \LogicException('You must set a loader first.');
}
return $this->loader;
}
public function setCharset($charset)
{
$this->charset = strtoupper($charset);
}
public function getCharset()
{
return $this->charset;
}
public function initRuntime()
{
$this->runtimeInitialized = true;
foreach ($this->getExtensions() as $name => $extension) {
if (!$extension instanceof InitRuntimeInterface) {
$m = new \ReflectionMethod($extension,'initRuntime');
$parentClass = $m->getDeclaringClass()->getName();
if ('Twig_Extension'!== $parentClass &&'Twig\Extension\AbstractExtension'!== $parentClass) {
@trigger_error(sprintf('Defining the initRuntime() method in the "%s" extension is deprecated since version 1.23. Use the `needs_environment` option to get the \Twig_Environment instance in filters, functions, or tests; or explicitly implement Twig\Extension\InitRuntimeInterface if needed (not recommended).', $name), E_USER_DEPRECATED);
}
}
$extension->initRuntime($this);
}
}
public function hasExtension($class)
{
$class = ltrim($class,'\\');
if (!isset($this->extensionsByClass[$class]) && class_exists($class, false)) {
$class = new \ReflectionClass($class);
$class = $class->name;
}
if (isset($this->extensions[$class])) {
if ($class !== \get_class($this->extensions[$class])) {
@trigger_error(sprintf('Referencing the "%s" extension by its name (defined by getName()) is deprecated since 1.26 and will be removed in Twig 2.0. Use the Fully Qualified Extension Class Name instead.', $class), E_USER_DEPRECATED);
}
return true;
}
return isset($this->extensionsByClass[$class]);
}
public function addRuntimeLoader(RuntimeLoaderInterface $loader)
{
$this->runtimeLoaders[] = $loader;
}
public function getExtension($class)
{
$class = ltrim($class,'\\');
if (!isset($this->extensionsByClass[$class]) && class_exists($class, false)) {
$class = new \ReflectionClass($class);
$class = $class->name;
}
if (isset($this->extensions[$class])) {
if ($class !== \get_class($this->extensions[$class])) {
@trigger_error(sprintf('Referencing the "%s" extension by its name (defined by getName()) is deprecated since 1.26 and will be removed in Twig 2.0. Use the Fully Qualified Extension Class Name instead.', $class), E_USER_DEPRECATED);
}
return $this->extensions[$class];
}
if (!isset($this->extensionsByClass[$class])) {
throw new RuntimeError(sprintf('The "%s" extension is not enabled.', $class));
}
return $this->extensionsByClass[$class];
}
public function getRuntime($class)
{
if (isset($this->runtimes[$class])) {
return $this->runtimes[$class];
}
foreach ($this->runtimeLoaders as $loader) {
if (null !== $runtime = $loader->load($class)) {
return $this->runtimes[$class] = $runtime;
}
}
throw new RuntimeError(sprintf('Unable to load the "%s" runtime.', $class));
}
public function addExtension(ExtensionInterface $extension)
{
if ($this->extensionInitialized) {
throw new \LogicException(sprintf('Unable to register extension "%s" as extensions have already been initialized.', $extension->getName()));
}
$class = \get_class($extension);
if ($class !== $extension->getName()) {
if (isset($this->extensions[$extension->getName()])) {
unset($this->extensions[$extension->getName()], $this->extensionsByClass[$class]);
@trigger_error(sprintf('The possibility to register the same extension twice ("%s") is deprecated since version 1.23 and will be removed in Twig 2.0. Use proper PHP inheritance instead.', $extension->getName()), E_USER_DEPRECATED);
}
}
$this->lastModifiedExtension = 0;
$this->extensionsByClass[$class] = $extension;
$this->extensions[$extension->getName()] = $extension;
$this->updateOptionsHash();
}
public function removeExtension($name)
{
@trigger_error(sprintf('The %s method is deprecated since version 1.12 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
if ($this->extensionInitialized) {
throw new \LogicException(sprintf('Unable to remove extension "%s" as extensions have already been initialized.', $name));
}
$class = ltrim($name,'\\');
if (!isset($this->extensionsByClass[$class]) && class_exists($class, false)) {
$class = new \ReflectionClass($class);
$class = $class->name;
}
if (isset($this->extensions[$class])) {
if ($class !== \get_class($this->extensions[$class])) {
@trigger_error(sprintf('Referencing the "%s" extension by its name (defined by getName()) is deprecated since 1.26 and will be removed in Twig 2.0. Use the Fully Qualified Extension Class Name instead.', $class), E_USER_DEPRECATED);
}
unset($this->extensions[$class]);
}
unset($this->extensions[$class]);
$this->updateOptionsHash();
}
public function setExtensions(array $extensions)
{
foreach ($extensions as $extension) {
$this->addExtension($extension);
}
}
public function getExtensions()
{
return $this->extensions;
}
public function addTokenParser(TokenParserInterface $parser)
{
if ($this->extensionInitialized) {
throw new \LogicException('Unable to add a token parser as extensions have already been initialized.');
}
$this->staging->addTokenParser($parser);
}
public function getTokenParsers()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->parsers;
}
public function getTags()
{
$tags = [];
foreach ($this->getTokenParsers()->getParsers() as $parser) {
if ($parser instanceof TokenParserInterface) {
$tags[$parser->getTag()] = $parser;
}
}
return $tags;
}
public function addNodeVisitor(NodeVisitorInterface $visitor)
{
if ($this->extensionInitialized) {
throw new \LogicException('Unable to add a node visitor as extensions have already been initialized.');
}
$this->staging->addNodeVisitor($visitor);
}
public function getNodeVisitors()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->visitors;
}
public function addFilter($name, $filter = null)
{
if (!$name instanceof TwigFilter && !($filter instanceof TwigFilter || $filter instanceof \Twig_FilterInterface)) {
throw new \LogicException('A filter must be an instance of \Twig_FilterInterface or \Twig_SimpleFilter.');
}
if ($name instanceof TwigFilter) {
$filter = $name;
$name = $filter->getName();
} else {
@trigger_error(sprintf('Passing a name as a first argument to the %s method is deprecated since version 1.21. Pass an instance of "Twig_SimpleFilter" instead when defining filter "%s".', __METHOD__, $name), E_USER_DEPRECATED);
}
if ($this->extensionInitialized) {
throw new \LogicException(sprintf('Unable to add filter "%s" as extensions have already been initialized.', $name));
}
$this->staging->addFilter($name, $filter);
}
public function getFilter($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->filters[$name])) {
return $this->filters[$name];
}
foreach ($this->filters as $pattern => $filter) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$filter->setArguments($matches);
return $filter;
}
}
}
foreach ($this->filterCallbacks as $callback) {
if (false !== $filter = \call_user_func($callback, $name)) {
return $filter;
}
}
return false;
}
public function registerUndefinedFilterCallback($callable)
{
$this->filterCallbacks[] = $callable;
}
public function getFilters()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->filters;
}
public function addTest($name, $test = null)
{
if (!$name instanceof TwigTest && !($test instanceof TwigTest || $test instanceof \Twig_TestInterface)) {
throw new \LogicException('A test must be an instance of \Twig_TestInterface or \Twig_SimpleTest.');
}
if ($name instanceof TwigTest) {
$test = $name;
$name = $test->getName();
} else {
@trigger_error(sprintf('Passing a name as a first argument to the %s method is deprecated since version 1.21. Pass an instance of "Twig_SimpleTest" instead when defining test "%s".', __METHOD__, $name), E_USER_DEPRECATED);
}
if ($this->extensionInitialized) {
throw new \LogicException(sprintf('Unable to add test "%s" as extensions have already been initialized.', $name));
}
$this->staging->addTest($name, $test);
}
public function getTests()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->tests;
}
public function getTest($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->tests[$name])) {
return $this->tests[$name];
}
foreach ($this->tests as $pattern => $test) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$test->setArguments($matches);
return $test;
}
}
}
return false;
}
public function addFunction($name, $function = null)
{
if (!$name instanceof TwigFunction && !($function instanceof TwigFunction || $function instanceof \Twig_FunctionInterface)) {
throw new \LogicException('A function must be an instance of \Twig_FunctionInterface or \Twig_SimpleFunction.');
}
if ($name instanceof TwigFunction) {
$function = $name;
$name = $function->getName();
} else {
@trigger_error(sprintf('Passing a name as a first argument to the %s method is deprecated since version 1.21. Pass an instance of "Twig_SimpleFunction" instead when defining function "%s".', __METHOD__, $name), E_USER_DEPRECATED);
}
if ($this->extensionInitialized) {
throw new \LogicException(sprintf('Unable to add function "%s" as extensions have already been initialized.', $name));
}
$this->staging->addFunction($name, $function);
}
public function getFunction($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->functions[$name])) {
return $this->functions[$name];
}
foreach ($this->functions as $pattern => $function) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$function->setArguments($matches);
return $function;
}
}
}
foreach ($this->functionCallbacks as $callback) {
if (false !== $function = \call_user_func($callback, $name)) {
return $function;
}
}
return false;
}
public function registerUndefinedFunctionCallback($callable)
{
$this->functionCallbacks[] = $callable;
}
public function getFunctions()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->functions;
}
public function addGlobal($name, $value)
{
if ($this->extensionInitialized || $this->runtimeInitialized) {
if (null === $this->globals) {
$this->globals = $this->initGlobals();
}
if (!\array_key_exists($name, $this->globals)) {
@trigger_error(sprintf('Registering global variable "%s" at runtime or when the extensions have already been initialized is deprecated since version 1.21.', $name), E_USER_DEPRECATED);
}
}
if ($this->extensionInitialized || $this->runtimeInitialized) {
$this->globals[$name] = $value;
} else {
$this->staging->addGlobal($name, $value);
}
}
public function getGlobals()
{
if (!$this->runtimeInitialized && !$this->extensionInitialized) {
return $this->initGlobals();
}
if (null === $this->globals) {
$this->globals = $this->initGlobals();
}
return $this->globals;
}
public function mergeGlobals(array $context)
{
foreach ($this->getGlobals() as $key => $value) {
if (!\array_key_exists($key, $context)) {
$context[$key] = $value;
}
}
return $context;
}
public function getUnaryOperators()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->unaryOperators;
}
public function getBinaryOperators()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->binaryOperators;
}
public function computeAlternatives($name, $items)
{
@trigger_error(sprintf('The %s method is deprecated since version 1.23 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
return SyntaxError::computeAlternatives($name, $items);
}
protected function initGlobals()
{
$globals = [];
foreach ($this->extensions as $name => $extension) {
if (!$extension instanceof GlobalsInterface) {
$m = new \ReflectionMethod($extension,'getGlobals');
$parentClass = $m->getDeclaringClass()->getName();
if ('Twig_Extension'!== $parentClass &&'Twig\Extension\AbstractExtension'!== $parentClass) {
@trigger_error(sprintf('Defining the getGlobals() method in the "%s" extension without explicitly implementing Twig\Extension\GlobalsInterface is deprecated since version 1.23.', $name), E_USER_DEPRECATED);
}
}
$extGlob = $extension->getGlobals();
if (!\is_array($extGlob)) {
throw new \UnexpectedValueException(sprintf('"%s::getGlobals()" must return an array of globals.', \get_class($extension)));
}
$globals[] = $extGlob;
}
$globals[] = $this->staging->getGlobals();
return \call_user_func_array('array_merge', $globals);
}
protected function initExtensions()
{
if ($this->extensionInitialized) {
return;
}
$this->parsers = new \Twig_TokenParserBroker([], [], false);
$this->filters = [];
$this->functions = [];
$this->tests = [];
$this->visitors = [];
$this->unaryOperators = [];
$this->binaryOperators = [];
foreach ($this->extensions as $extension) {
$this->initExtension($extension);
}
$this->initExtension($this->staging);
$this->extensionInitialized = true;
}
protected function initExtension(ExtensionInterface $extension)
{
foreach ($extension->getFilters() as $name => $filter) {
if ($filter instanceof TwigFilter) {
$name = $filter->getName();
} else {
@trigger_error(sprintf('Using an instance of "%s" for filter "%s" is deprecated since version 1.21. Use \Twig_SimpleFilter instead.', \get_class($filter), $name), E_USER_DEPRECATED);
}
$this->filters[$name] = $filter;
}
foreach ($extension->getFunctions() as $name => $function) {
if ($function instanceof TwigFunction) {
$name = $function->getName();
} else {
@trigger_error(sprintf('Using an instance of "%s" for function "%s" is deprecated since version 1.21. Use \Twig_SimpleFunction instead.', \get_class($function), $name), E_USER_DEPRECATED);
}
$this->functions[$name] = $function;
}
foreach ($extension->getTests() as $name => $test) {
if ($test instanceof TwigTest) {
$name = $test->getName();
} else {
@trigger_error(sprintf('Using an instance of "%s" for test "%s" is deprecated since version 1.21. Use \Twig_SimpleTest instead.', \get_class($test), $name), E_USER_DEPRECATED);
}
$this->tests[$name] = $test;
}
foreach ($extension->getTokenParsers() as $parser) {
if ($parser instanceof TokenParserInterface) {
$this->parsers->addTokenParser($parser);
} elseif ($parser instanceof \Twig_TokenParserBrokerInterface) {
@trigger_error('Registering a \Twig_TokenParserBrokerInterface instance is deprecated since version 1.21.', E_USER_DEPRECATED);
$this->parsers->addTokenParserBroker($parser);
} else {
throw new \LogicException('getTokenParsers() must return an array of \Twig_TokenParserInterface or \Twig_TokenParserBrokerInterface instances.');
}
}
foreach ($extension->getNodeVisitors() as $visitor) {
$this->visitors[] = $visitor;
}
if ($operators = $extension->getOperators()) {
if (!\is_array($operators)) {
throw new \InvalidArgumentException(sprintf('"%s::getOperators()" must return an array with operators, got "%s".', \get_class($extension), \is_object($operators) ? \get_class($operators) : \gettype($operators).(\is_resource($operators) ?'':'#'.$operators)));
}
if (2 !== \count($operators)) {
throw new \InvalidArgumentException(sprintf('"%s::getOperators()" must return an array of 2 elements, got %d.', \get_class($extension), \count($operators)));
}
$this->unaryOperators = array_merge($this->unaryOperators, $operators[0]);
$this->binaryOperators = array_merge($this->binaryOperators, $operators[1]);
}
}
protected function writeCacheFile($file, $content)
{
$this->cache->write($file, $content);
}
private function updateOptionsHash()
{
$hashParts = array_merge(
array_keys($this->extensions),
[
(int) \function_exists('twig_template_get_attributes'),
PHP_MAJOR_VERSION,
PHP_MINOR_VERSION,
self::VERSION,
(int) $this->debug,
$this->baseTemplateClass,
(int) $this->strictVariables,
]
);
$this->optionsHash = implode(':', $hashParts);
}
}
class_alias('Twig\Environment','Twig_Environment');
}
namespace Twig\Extension
{
use Twig\Environment;
use Twig\NodeVisitor\NodeVisitorInterface;
use Twig\TokenParser\TokenParserInterface;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;
interface ExtensionInterface
{
public function initRuntime(Environment $environment);
public function getTokenParsers();
public function getNodeVisitors();
public function getFilters();
public function getTests();
public function getFunctions();
public function getOperators();
public function getGlobals();
public function getName();
}
class_alias('Twig\Extension\ExtensionInterface','Twig_ExtensionInterface');
class_exists('Twig\Environment');
}
namespace Twig\Extension
{
use Twig\Environment;
abstract class AbstractExtension implements ExtensionInterface
{
public function initRuntime(Environment $environment)
{
}
public function getTokenParsers()
{
return [];
}
public function getNodeVisitors()
{
return [];
}
public function getFilters()
{
return [];
}
public function getTests()
{
return [];
}
public function getFunctions()
{
return [];
}
public function getOperators()
{
return [];
}
public function getGlobals()
{
return [];
}
public function getName()
{
return \get_class($this);
}
}
class_alias('Twig\Extension\AbstractExtension','Twig_Extension');
}
namespace Twig\Extension {
use Twig\ExpressionParser;
use Twig\TokenParser\ApplyTokenParser;
use Twig\TokenParser\BlockTokenParser;
use Twig\TokenParser\DeprecatedTokenParser;
use Twig\TokenParser\DoTokenParser;
use Twig\TokenParser\EmbedTokenParser;
use Twig\TokenParser\ExtendsTokenParser;
use Twig\TokenParser\FilterTokenParser;
use Twig\TokenParser\FlushTokenParser;
use Twig\TokenParser\ForTokenParser;
use Twig\TokenParser\FromTokenParser;
use Twig\TokenParser\IfTokenParser;
use Twig\TokenParser\ImportTokenParser;
use Twig\TokenParser\IncludeTokenParser;
use Twig\TokenParser\MacroTokenParser;
use Twig\TokenParser\SetTokenParser;
use Twig\TokenParser\SpacelessTokenParser;
use Twig\TokenParser\UseTokenParser;
use Twig\TokenParser\WithTokenParser;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;
class CoreExtension extends AbstractExtension
{
protected $dateFormats = ['F j, Y H:i','%d days'];
protected $numberFormat = [0,'.',','];
protected $timezone = null;
protected $escapers = [];
public function setEscaper($strategy, $callable)
{
$this->escapers[$strategy] = $callable;
}
public function getEscapers()
{
return $this->escapers;
}
public function setDateFormat($format = null, $dateIntervalFormat = null)
{
if (null !== $format) {
$this->dateFormats[0] = $format;
}
if (null !== $dateIntervalFormat) {
$this->dateFormats[1] = $dateIntervalFormat;
}
}
public function getDateFormat()
{
return $this->dateFormats;
}
public function setTimezone($timezone)
{
$this->timezone = $timezone instanceof \DateTimeZone ? $timezone : new \DateTimeZone($timezone);
}
public function getTimezone()
{
if (null === $this->timezone) {
$this->timezone = new \DateTimeZone(date_default_timezone_get());
}
return $this->timezone;
}
public function setNumberFormat($decimal, $decimalPoint, $thousandSep)
{
$this->numberFormat = [$decimal, $decimalPoint, $thousandSep];
}
public function getNumberFormat()
{
return $this->numberFormat;
}
public function getTokenParsers()
{
return [
new ApplyTokenParser(),
new ForTokenParser(),
new IfTokenParser(),
new ExtendsTokenParser(),
new IncludeTokenParser(),
new BlockTokenParser(),
new UseTokenParser(),
new FilterTokenParser(),
new MacroTokenParser(),
new ImportTokenParser(),
new FromTokenParser(),
new SetTokenParser(),
new SpacelessTokenParser(),
new FlushTokenParser(),
new DoTokenParser(),
new EmbedTokenParser(),
new WithTokenParser(),
new DeprecatedTokenParser(),
];
}
public function getFilters()
{
$filters = [
new TwigFilter('date','twig_date_format_filter', ['needs_environment'=> true]),
new TwigFilter('date_modify','twig_date_modify_filter', ['needs_environment'=> true]),
new TwigFilter('format','sprintf'),
new TwigFilter('replace','twig_replace_filter'),
new TwigFilter('number_format','twig_number_format_filter', ['needs_environment'=> true]),
new TwigFilter('abs','abs'),
new TwigFilter('round','twig_round'),
new TwigFilter('url_encode','twig_urlencode_filter'),
new TwigFilter('json_encode','twig_jsonencode_filter'),
new TwigFilter('convert_encoding','twig_convert_encoding'),
new TwigFilter('title','twig_title_string_filter', ['needs_environment'=> true]),
new TwigFilter('capitalize','twig_capitalize_string_filter', ['needs_environment'=> true]),
new TwigFilter('upper','strtoupper'),
new TwigFilter('lower','strtolower'),
new TwigFilter('striptags','strip_tags'),
new TwigFilter('trim','twig_trim_filter'),
new TwigFilter('nl2br','nl2br', ['pre_escape'=>'html','is_safe'=> ['html']]),
new TwigFilter('spaceless','twig_spaceless', ['is_safe'=> ['html']]),
new TwigFilter('join','twig_join_filter'),
new TwigFilter('split','twig_split_filter', ['needs_environment'=> true]),
new TwigFilter('sort','twig_sort_filter'),
new TwigFilter('merge','twig_array_merge'),
new TwigFilter('batch','twig_array_batch'),
new TwigFilter('filter','twig_array_filter'),
new TwigFilter('map','twig_array_map'),
new TwigFilter('reduce','twig_array_reduce'),
new TwigFilter('reverse','twig_reverse_filter', ['needs_environment'=> true]),
new TwigFilter('length','twig_length_filter', ['needs_environment'=> true]),
new TwigFilter('slice','twig_slice', ['needs_environment'=> true]),
new TwigFilter('first','twig_first', ['needs_environment'=> true]),
new TwigFilter('last','twig_last', ['needs_environment'=> true]),
new TwigFilter('default','_twig_default_filter', ['node_class'=>'\Twig\Node\Expression\Filter\DefaultFilter']),
new TwigFilter('keys','twig_get_array_keys_filter'),
new TwigFilter('escape','twig_escape_filter', ['needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe']),
new TwigFilter('e','twig_escape_filter', ['needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe']),
];
if (\function_exists('mb_get_info')) {
$filters[] = new TwigFilter('upper','twig_upper_filter', ['needs_environment'=> true]);
$filters[] = new TwigFilter('lower','twig_lower_filter', ['needs_environment'=> true]);
}
return $filters;
}
public function getFunctions()
{
return [
new TwigFunction('max','max'),
new TwigFunction('min','min'),
new TwigFunction('range','range'),
new TwigFunction('constant','twig_constant'),
new TwigFunction('cycle','twig_cycle'),
new TwigFunction('random','twig_random', ['needs_environment'=> true]),
new TwigFunction('date','twig_date_converter', ['needs_environment'=> true]),
new TwigFunction('include','twig_include', ['needs_environment'=> true,'needs_context'=> true,'is_safe'=> ['all']]),
new TwigFunction('source','twig_source', ['needs_environment'=> true,'is_safe'=> ['all']]),
];
}
public function getTests()
{
return [
new TwigTest('even', null, ['node_class'=>'\Twig\Node\Expression\Test\EvenTest']),
new TwigTest('odd', null, ['node_class'=>'\Twig\Node\Expression\Test\OddTest']),
new TwigTest('defined', null, ['node_class'=>'\Twig\Node\Expression\Test\DefinedTest']),
new TwigTest('sameas', null, ['node_class'=>'\Twig\Node\Expression\Test\SameasTest','deprecated'=>'1.21','alternative'=>'same as']),
new TwigTest('same as', null, ['node_class'=>'\Twig\Node\Expression\Test\SameasTest']),
new TwigTest('none', null, ['node_class'=>'\Twig\Node\Expression\Test\NullTest']),
new TwigTest('null', null, ['node_class'=>'\Twig\Node\Expression\Test\NullTest']),
new TwigTest('divisibleby', null, ['node_class'=>'\Twig\Node\Expression\Test\DivisiblebyTest','deprecated'=>'1.21','alternative'=>'divisible by']),
new TwigTest('divisible by', null, ['node_class'=>'\Twig\Node\Expression\Test\DivisiblebyTest']),
new TwigTest('constant', null, ['node_class'=>'\Twig\Node\Expression\Test\ConstantTest']),
new TwigTest('empty','twig_test_empty'),
new TwigTest('iterable','twig_test_iterable'),
];
}
public function getOperators()
{
return [
['not'=> ['precedence'=> 50,'class'=>'\Twig\Node\Expression\Unary\NotUnary'],'-'=> ['precedence'=> 500,'class'=>'\Twig\Node\Expression\Unary\NegUnary'],'+'=> ['precedence'=> 500,'class'=>'\Twig\Node\Expression\Unary\PosUnary'],
],
['or'=> ['precedence'=> 10,'class'=>'\Twig\Node\Expression\Binary\OrBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'and'=> ['precedence'=> 15,'class'=>'\Twig\Node\Expression\Binary\AndBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'b-or'=> ['precedence'=> 16,'class'=>'\Twig\Node\Expression\Binary\BitwiseOrBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'b-xor'=> ['precedence'=> 17,'class'=>'\Twig\Node\Expression\Binary\BitwiseXorBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'b-and'=> ['precedence'=> 18,'class'=>'\Twig\Node\Expression\Binary\BitwiseAndBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'=='=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\EqualBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'!='=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\NotEqualBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'<'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\LessBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'>'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\GreaterBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'>='=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\GreaterEqualBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'<='=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\LessEqualBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'not in'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\NotInBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'in'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\InBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'matches'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\MatchesBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'starts with'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\StartsWithBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'ends with'=> ['precedence'=> 20,'class'=>'\Twig\Node\Expression\Binary\EndsWithBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'..'=> ['precedence'=> 25,'class'=>'\Twig\Node\Expression\Binary\RangeBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'+'=> ['precedence'=> 30,'class'=>'\Twig\Node\Expression\Binary\AddBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'-'=> ['precedence'=> 30,'class'=>'\Twig\Node\Expression\Binary\SubBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'~'=> ['precedence'=> 40,'class'=>'\Twig\Node\Expression\Binary\ConcatBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'*'=> ['precedence'=> 60,'class'=>'\Twig\Node\Expression\Binary\MulBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'/'=> ['precedence'=> 60,'class'=>'\Twig\Node\Expression\Binary\DivBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'//'=> ['precedence'=> 60,'class'=>'\Twig\Node\Expression\Binary\FloorDivBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'%'=> ['precedence'=> 60,'class'=>'\Twig\Node\Expression\Binary\ModBinary','associativity'=> ExpressionParser::OPERATOR_LEFT],'is'=> ['precedence'=> 100,'associativity'=> ExpressionParser::OPERATOR_LEFT],'is not'=> ['precedence'=> 100,'associativity'=> ExpressionParser::OPERATOR_LEFT],'**'=> ['precedence'=> 200,'class'=>'\Twig\Node\Expression\Binary\PowerBinary','associativity'=> ExpressionParser::OPERATOR_RIGHT],'??'=> ['precedence'=> 300,'class'=>'\Twig\Node\Expression\NullCoalesceExpression','associativity'=> ExpressionParser::OPERATOR_RIGHT],
],
];
}
public function getName()
{
return'core';
}
}
class_alias('Twig\Extension\CoreExtension','Twig_Extension_Core');
}
namespace {
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Loader\SourceContextLoaderInterface;
use Twig\Markup;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Node;
function twig_cycle($values, $position)
{
if (!\is_array($values) && !$values instanceof \ArrayAccess) {
return $values;
}
return $values[$position % \count($values)];
}
function twig_random(Environment $env, $values = null, $max = null)
{
if (null === $values) {
return null === $max ? mt_rand() : mt_rand(0, $max);
}
if (\is_int($values) || \is_float($values)) {
if (null === $max) {
if ($values < 0) {
$max = 0;
$min = $values;
} else {
$max = $values;
$min = 0;
}
} else {
$min = $values;
$max = $max;
}
return mt_rand($min, $max);
}
if (\is_string($values)) {
if (''=== $values) {
return'';
}
if (null !== $charset = $env->getCharset()) {
if ('UTF-8'!== $charset) {
$values = twig_convert_encoding($values,'UTF-8', $charset);
}
$values = preg_split('/(?<!^)(?!$)/u', $values);
if ('UTF-8'!== $charset) {
foreach ($values as $i => $value) {
$values[$i] = twig_convert_encoding($value, $charset,'UTF-8');
}
}
} else {
return $values[mt_rand(0, \strlen($values) - 1)];
}
}
if (!twig_test_iterable($values)) {
return $values;
}
$values = twig_to_array($values);
if (0 === \count($values)) {
throw new RuntimeError('The random function cannot pick from an empty array.');
}
return $values[array_rand($values, 1)];
}
function twig_date_format_filter(Environment $env, $date, $format = null, $timezone = null)
{
if (null === $format) {
$formats = $env->getExtension('\Twig\Extension\CoreExtension')->getDateFormat();
$format = $date instanceof \DateInterval ? $formats[1] : $formats[0];
}
if ($date instanceof \DateInterval) {
return $date->format($format);
}
return twig_date_converter($env, $date, $timezone)->format($format);
}
function twig_date_modify_filter(Environment $env, $date, $modifier)
{
$date = twig_date_converter($env, $date, false);
$resultDate = $date->modify($modifier);
return null === $resultDate ? $date : $resultDate;
}
function twig_date_converter(Environment $env, $date = null, $timezone = null)
{
if (false !== $timezone) {
if (null === $timezone) {
$timezone = $env->getExtension('\Twig\Extension\CoreExtension')->getTimezone();
} elseif (!$timezone instanceof \DateTimeZone) {
$timezone = new \DateTimeZone($timezone);
}
}
if ($date instanceof \DateTimeImmutable) {
return false !== $timezone ? $date->setTimezone($timezone) : $date;
}
if ($date instanceof \DateTime || $date instanceof \DateTimeInterface) {
$date = clone $date;
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
if (null === $date ||'now'=== $date) {
return new \DateTime($date, false !== $timezone ? $timezone : $env->getExtension('\Twig\Extension\CoreExtension')->getTimezone());
}
$asString = (string) $date;
if (ctype_digit($asString) || (!empty($asString) &&'-'=== $asString[0] && ctype_digit(substr($asString, 1)))) {
$date = new \DateTime('@'.$date);
} else {
$date = new \DateTime($date, $env->getExtension('\Twig\Extension\CoreExtension')->getTimezone());
}
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
function twig_replace_filter($str, $from, $to = null)
{
if (\is_string($from) && \is_string($to)) {
@trigger_error('Using "replace" with character by character replacement is deprecated since version 1.22 and will be removed in Twig 2.0', E_USER_DEPRECATED);
return strtr($str, $from, $to);
}
if (!twig_test_iterable($from)) {
throw new RuntimeError(sprintf('The "replace" filter expects an array or "Traversable" as replace values, got "%s".', \is_object($from) ? \get_class($from) : \gettype($from)));
}
return strtr($str, twig_to_array($from));
}
function twig_round($value, $precision = 0, $method ='common')
{
if ('common'== $method) {
return round($value, $precision);
}
if ('ceil'!= $method &&'floor'!= $method) {
throw new RuntimeError('The round filter only supports the "common", "ceil", and "floor" methods.');
}
return $method($value * pow(10, $precision)) / pow(10, $precision);
}
function twig_number_format_filter(Environment $env, $number, $decimal = null, $decimalPoint = null, $thousandSep = null)
{
$defaults = $env->getExtension('\Twig\Extension\CoreExtension')->getNumberFormat();
if (null === $decimal) {
$decimal = $defaults[0];
}
if (null === $decimalPoint) {
$decimalPoint = $defaults[1];
}
if (null === $thousandSep) {
$thousandSep = $defaults[2];
}
return number_format((float) $number, $decimal, $decimalPoint, $thousandSep);
}
function twig_urlencode_filter($url)
{
if (\is_array($url)) {
if (\defined('PHP_QUERY_RFC3986')) {
return http_build_query($url,'','&', PHP_QUERY_RFC3986);
}
return http_build_query($url,'','&');
}
return rawurlencode($url);
}
function twig_jsonencode_filter($value, $options = 0)
{
if ($value instanceof Markup) {
$value = (string) $value;
} elseif (\is_array($value)) {
array_walk_recursive($value,'_twig_markup2string');
}
return json_encode($value, $options);
}
function _twig_markup2string(&$value)
{
if ($value instanceof Markup) {
$value = (string) $value;
}
}
function twig_array_merge($arr1, $arr2)
{
if (!twig_test_iterable($arr1)) {
throw new RuntimeError(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as first argument.', \gettype($arr1)));
}
if (!twig_test_iterable($arr2)) {
throw new RuntimeError(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as second argument.', \gettype($arr2)));
}
return array_merge(twig_to_array($arr1), twig_to_array($arr2));
}
function twig_slice(Environment $env, $item, $start, $length = null, $preserveKeys = false)
{
if ($item instanceof \Traversable) {
while ($item instanceof \IteratorAggregate) {
$item = $item->getIterator();
}
if ($start >= 0 && $length >= 0 && $item instanceof \Iterator) {
try {
return iterator_to_array(new \LimitIterator($item, $start, null === $length ? -1 : $length), $preserveKeys);
} catch (\OutOfBoundsException $e) {
return [];
}
}
$item = iterator_to_array($item, $preserveKeys);
}
if (\is_array($item)) {
return \array_slice($item, $start, $length, $preserveKeys);
}
$item = (string) $item;
if (\function_exists('mb_get_info') && null !== $charset = $env->getCharset()) {
return (string) mb_substr($item, $start, null === $length ? mb_strlen($item, $charset) - $start : $length, $charset);
}
return (string) (null === $length ? substr($item, $start) : substr($item, $start, $length));
}
function twig_first(Environment $env, $item)
{
$elements = twig_slice($env, $item, 0, 1, false);
return \is_string($elements) ? $elements : current($elements);
}
function twig_last(Environment $env, $item)
{
$elements = twig_slice($env, $item, -1, 1, false);
return \is_string($elements) ? $elements : current($elements);
}
function twig_join_filter($value, $glue ='', $and = null)
{
if (!twig_test_iterable($value)) {
$value = (array) $value;
}
$value = twig_to_array($value, false);
if (0 === \count($value)) {
return'';
}
if (null === $and || $and === $glue) {
return implode($glue, $value);
}
if (1 === \count($value)) {
return $value[0];
}
return implode($glue, \array_slice($value, 0, -1)).$and.$value[\count($value) - 1];
}
function twig_split_filter(Environment $env, $value, $delimiter, $limit = null)
{
if (\strlen($delimiter) > 0) {
return null === $limit ? explode($delimiter, $value) : explode($delimiter, $value, $limit);
}
if (!\function_exists('mb_get_info') || null === $charset = $env->getCharset()) {
return str_split($value, null === $limit ? 1 : $limit);
}
if ($limit <= 1) {
return preg_split('/(?<!^)(?!$)/u', $value);
}
$length = mb_strlen($value, $charset);
if ($length < $limit) {
return [$value];
}
$r = [];
for ($i = 0; $i < $length; $i += $limit) {
$r[] = mb_substr($value, $i, $limit, $charset);
}
return $r;
}
function _twig_default_filter($value, $default ='')
{
if (twig_test_empty($value)) {
return $default;
}
return $value;
}
function twig_get_array_keys_filter($array)
{
if ($array instanceof \Traversable) {
while ($array instanceof \IteratorAggregate) {
$array = $array->getIterator();
}
if ($array instanceof \Iterator) {
$keys = [];
$array->rewind();
while ($array->valid()) {
$keys[] = $array->key();
$array->next();
}
return $keys;
}
$keys = [];
foreach ($array as $key => $item) {
$keys[] = $key;
}
return $keys;
}
if (!\is_array($array)) {
return [];
}
return array_keys($array);
}
function twig_reverse_filter(Environment $env, $item, $preserveKeys = false)
{
if ($item instanceof \Traversable) {
return array_reverse(iterator_to_array($item), $preserveKeys);
}
if (\is_array($item)) {
return array_reverse($item, $preserveKeys);
}
if (null !== $charset = $env->getCharset()) {
$string = (string) $item;
if ('UTF-8'!== $charset) {
$item = twig_convert_encoding($string,'UTF-8', $charset);
}
preg_match_all('/./us', $item, $matches);
$string = implode('', array_reverse($matches[0]));
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
}
return strrev((string) $item);
}
function twig_sort_filter($array)
{
if ($array instanceof \Traversable) {
$array = iterator_to_array($array);
} elseif (!\is_array($array)) {
throw new RuntimeError(sprintf('The sort filter only works with arrays or "Traversable", got "%s".', \gettype($array)));
}
asort($array);
return $array;
}
function twig_in_filter($value, $compare)
{
if ($value instanceof Markup) {
$value = (string) $value;
}
if ($compare instanceof Markup) {
$compare = (string) $compare;
}
if (\is_array($compare)) {
return \in_array($value, $compare, \is_object($value) || \is_resource($value));
} elseif (\is_string($compare) && (\is_string($value) || \is_int($value) || \is_float($value))) {
return''=== $value || false !== strpos($compare, (string) $value);
} elseif ($compare instanceof \Traversable) {
if (\is_object($value) || \is_resource($value)) {
foreach ($compare as $item) {
if ($item === $value) {
return true;
}
}
} else {
foreach ($compare as $item) {
if ($item == $value) {
return true;
}
}
}
return false;
}
return false;
}
function twig_trim_filter($string, $characterMask = null, $side ='both')
{
if (null === $characterMask) {
$characterMask =" \t\n\r\0\x0B";
}
switch ($side) {
case'both':
return trim($string, $characterMask);
case'left':
return ltrim($string, $characterMask);
case'right':
return rtrim($string, $characterMask);
default:
throw new RuntimeError('Trimming side must be "left", "right" or "both".');
}
}
function twig_spaceless($content)
{
return trim(preg_replace('/>\s+</','><', $content));
}
function twig_escape_filter(Environment $env, $string, $strategy ='html', $charset = null, $autoescape = false)
{
if ($autoescape && $string instanceof Markup) {
return $string;
}
if (!\is_string($string)) {
if (\is_object($string) && method_exists($string,'__toString')) {
$string = (string) $string;
} elseif (\in_array($strategy, ['html','js','css','html_attr','url'])) {
return $string;
}
}
if (''=== $string) {
return'';
}
if (null === $charset) {
$charset = $env->getCharset();
}
switch ($strategy) {
case'html':
static $htmlspecialcharsCharsets = ['ISO-8859-1'=> true,'ISO8859-1'=> true,'ISO-8859-15'=> true,'ISO8859-15'=> true,'utf-8'=> true,'UTF-8'=> true,'CP866'=> true,'IBM866'=> true,'866'=> true,'CP1251'=> true,'WINDOWS-1251'=> true,'WIN-1251'=> true,'1251'=> true,'CP1252'=> true,'WINDOWS-1252'=> true,'1252'=> true,'KOI8-R'=> true,'KOI8-RU'=> true,'KOI8R'=> true,'BIG5'=> true,'950'=> true,'GB2312'=> true,'936'=> true,'BIG5-HKSCS'=> true,'SHIFT_JIS'=> true,'SJIS'=> true,'932'=> true,'EUC-JP'=> true,'EUCJP'=> true,'ISO8859-5'=> true,'ISO-8859-5'=> true,'MACROMAN'=> true,
];
if (isset($htmlspecialcharsCharsets[$charset])) {
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
if (isset($htmlspecialcharsCharsets[strtoupper($charset)])) {
$htmlspecialcharsCharsets[$charset] = true;
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
$string = twig_convert_encoding($string,'UTF-8', $charset);
$string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE,'UTF-8');
return twig_convert_encoding($string, $charset,'UTF-8');
case'js':
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (!preg_match('//u', $string)) {
throw new RuntimeError('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\._]#Su','_twig_escape_js_callback', $string);
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'css':
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (!preg_match('//u', $string)) {
throw new RuntimeError('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9]#Su','_twig_escape_css_callback', $string);
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'html_attr':
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (!preg_match('//u', $string)) {
throw new RuntimeError('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\.\-_]#Su','_twig_escape_html_attr_callback', $string);
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'url':
return rawurlencode($string);
default:
static $escapers;
if (null === $escapers) {
$escapers = $env->getExtension('\Twig\Extension\CoreExtension')->getEscapers();
}
if (isset($escapers[$strategy])) {
return \call_user_func($escapers[$strategy], $env, $string, $charset);
}
$validStrategies = implode(', ', array_merge(['html','js','url','css','html_attr'], array_keys($escapers)));
throw new RuntimeError(sprintf('Invalid escaping strategy "%s" (valid ones: %s).', $strategy, $validStrategies));
}
}
function twig_escape_filter_is_safe(Node $filterArgs)
{
foreach ($filterArgs as $arg) {
if ($arg instanceof ConstantExpression) {
return [$arg->getAttribute('value')];
}
return [];
}
return ['html'];
}
if (\function_exists('mb_convert_encoding')) {
function twig_convert_encoding($string, $to, $from)
{
return mb_convert_encoding($string, $to, $from);
}
} elseif (\function_exists('iconv')) {
function twig_convert_encoding($string, $to, $from)
{
return iconv($from, $to, $string);
}
} else {
function twig_convert_encoding($string, $to, $from)
{
throw new RuntimeError('No suitable convert encoding function (use UTF-8 as your encoding or install the iconv or mbstring extension).');
}
}
if (\function_exists('mb_ord')) {
function twig_ord($string)
{
return mb_ord($string,'UTF-8');
}
} else {
function twig_ord($string)
{
$code = ($string = unpack('C*', substr($string, 0, 4))) ? $string[1] : 0;
if (0xF0 <= $code) {
return (($code - 0xF0) << 18) + (($string[2] - 0x80) << 12) + (($string[3] - 0x80) << 6) + $string[4] - 0x80;
}
if (0xE0 <= $code) {
return (($code - 0xE0) << 12) + (($string[2] - 0x80) << 6) + $string[3] - 0x80;
}
if (0xC0 <= $code) {
return (($code - 0xC0) << 6) + $string[2] - 0x80;
}
return $code;
}
}
function _twig_escape_js_callback($matches)
{
$char = $matches[0];
static $shortMap = ['\\'=>'\\\\','/'=>'\\/',"\x08"=>'\b',"\x0C"=>'\f',"\x0A"=>'\n',"\x0D"=>'\r',"\x09"=>'\t',
];
if (isset($shortMap[$char])) {
return $shortMap[$char];
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
$char = strtoupper(bin2hex($char));
if (4 >= \strlen($char)) {
return sprintf('\u%04s', $char);
}
return sprintf('\u%04s\u%04s', substr($char, 0, -4), substr($char, -4));
}
function _twig_escape_css_callback($matches)
{
$char = $matches[0];
return sprintf('\\%X ', 1 === \strlen($char) ? \ord($char) : twig_ord($char));
}
function _twig_escape_html_attr_callback($matches)
{
$chr = $matches[0];
$ord = \ord($chr);
if (($ord <= 0x1f &&"\t"!= $chr &&"\n"!= $chr &&"\r"!= $chr) || ($ord >= 0x7f && $ord <= 0x9f)) {
return'&#xFFFD;';
}
if (1 == \strlen($chr)) {
static $entityMap = [
34 =>'&quot;',
38 =>'&amp;',
60 =>'&lt;',
62 =>'&gt;',
];
if (isset($entityMap[$ord])) {
return $entityMap[$ord];
}
return sprintf('&#x%02X;', $ord);
}
return sprintf('&#x%04X;', twig_ord($chr));
}
if (\function_exists('mb_get_info')) {
function twig_length_filter(Environment $env, $thing)
{
if (null === $thing) {
return 0;
}
if (is_scalar($thing)) {
return mb_strlen($thing, $env->getCharset());
}
if ($thing instanceof \Countable || \is_array($thing) || $thing instanceof \SimpleXMLElement) {
return \count($thing);
}
if ($thing instanceof \Traversable) {
return iterator_count($thing);
}
if (\is_object($thing) && method_exists($thing,'__toString')) {
return mb_strlen((string) $thing, $env->getCharset());
}
return 1;
}
function twig_upper_filter(Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_strtoupper($string, $charset);
}
return strtoupper($string);
}
function twig_lower_filter(Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_strtolower($string, $charset);
}
return strtolower($string);
}
function twig_title_string_filter(Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_convert_case($string, MB_CASE_TITLE, $charset);
}
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_strtoupper(mb_substr($string, 0, 1, $charset), $charset).mb_strtolower(mb_substr($string, 1, mb_strlen($string, $charset), $charset), $charset);
}
return ucfirst(strtolower($string));
}
}
else {
function twig_length_filter(Environment $env, $thing)
{
if (null === $thing) {
return 0;
}
if (is_scalar($thing)) {
return \strlen($thing);
}
if ($thing instanceof \SimpleXMLElement) {
return \count($thing);
}
if (\is_object($thing) && method_exists($thing,'__toString') && !$thing instanceof \Countable) {
return \strlen((string) $thing);
}
if ($thing instanceof \Countable || \is_array($thing)) {
return \count($thing);
}
if ($thing instanceof \IteratorAggregate) {
return iterator_count($thing);
}
return 1;
}
function twig_title_string_filter(Environment $env, $string)
{
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Environment $env, $string)
{
return ucfirst(strtolower($string));
}
}
function twig_ensure_traversable($seq)
{
if ($seq instanceof \Traversable || \is_array($seq)) {
return $seq;
}
return [];
}
function twig_to_array($seq, $preserveKeys = true)
{
if ($seq instanceof \Traversable) {
return iterator_to_array($seq, $preserveKeys);
}
if (!\is_array($seq)) {
return $seq;
}
return $preserveKeys ? $seq : array_values($seq);
}
function twig_test_empty($value)
{
if ($value instanceof \Countable) {
return 0 == \count($value);
}
if ($value instanceof \Traversable) {
return !iterator_count($value);
}
if (\is_object($value) && method_exists($value,'__toString')) {
return''=== (string) $value;
}
return''=== $value || false === $value || null === $value || [] === $value;
}
function twig_test_iterable($value)
{
return $value instanceof \Traversable || \is_array($value);
}
function twig_include(Environment $env, $context, $template, $variables = [], $withContext = true, $ignoreMissing = false, $sandboxed = false)
{
$alreadySandboxed = false;
$sandbox = null;
if ($withContext) {
$variables = array_merge($context, $variables);
}
if ($isSandboxed = $sandboxed && $env->hasExtension('\Twig\Extension\SandboxExtension')) {
$sandbox = $env->getExtension('\Twig\Extension\SandboxExtension');
if (!$alreadySandboxed = $sandbox->isSandboxed()) {
$sandbox->enableSandbox();
}
}
$loaded = null;
try {
$loaded = $env->resolveTemplate($template);
} catch (LoaderError $e) {
if (!$ignoreMissing) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
} catch (\Throwable $e) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
} catch (\Exception $e) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
try {
$ret = $loaded ? $loaded->render($variables) :'';
} catch (\Exception $e) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
return $ret;
}
function twig_source(Environment $env, $name, $ignoreMissing = false)
{
$loader = $env->getLoader();
try {
if (!$loader instanceof SourceContextLoaderInterface) {
return $loader->getSource($name);
} else {
return $loader->getSourceContext($name)->getCode();
}
} catch (LoaderError $e) {
if (!$ignoreMissing) {
throw $e;
}
}
}
function twig_constant($constant, $object = null)
{
if (null !== $object) {
$constant = \get_class($object).'::'.$constant;
}
return \constant($constant);
}
function twig_constant_is_defined($constant, $object = null)
{
if (null !== $object) {
$constant = \get_class($object).'::'.$constant;
}
return \defined($constant);
}
function twig_array_batch($items, $size, $fill = null, $preserveKeys = true)
{
if (!twig_test_iterable($items)) {
throw new RuntimeError(sprintf('The "batch" filter expects an array or "Traversable", got "%s".', \is_object($items) ? \get_class($items) : \gettype($items)));
}
$size = ceil($size);
$result = array_chunk(twig_to_array($items, $preserveKeys), $size, $preserveKeys);
if (null !== $fill && $result) {
$last = \count($result) - 1;
if ($fillCount = $size - \count($result[$last])) {
for ($i = 0; $i < $fillCount; ++$i) {
$result[$last][] = $fill;
}
}
}
return $result;
}
function twig_array_filter($array, $arrow)
{
if (\is_array($array)) {
if (\PHP_VERSION_ID >= 50600) {
return array_filter($array, $arrow, \ARRAY_FILTER_USE_BOTH);
}
return array_filter($array, $arrow);
}
return new \CallbackFilterIterator(new \IteratorIterator($array), $arrow);
}
function twig_array_map($array, $arrow)
{
$r = [];
foreach ($array as $k => $v) {
$r[$k] = $arrow($v, $k);
}
return $r;
}
function twig_array_reduce($array, $arrow, $initial = null)
{
if (!\is_array($array)) {
$array = iterator_to_array($array);
}
return array_reduce($array, $arrow, $initial);
}
}
namespace Twig\Extension {
use Twig\NodeVisitor\EscaperNodeVisitor;
use Twig\TokenParser\AutoEscapeTokenParser;
use Twig\TwigFilter;
class EscaperExtension extends AbstractExtension
{
protected $defaultStrategy;
public function __construct($defaultStrategy ='html')
{
$this->setDefaultStrategy($defaultStrategy);
}
public function getTokenParsers()
{
return [new AutoEscapeTokenParser()];
}
public function getNodeVisitors()
{
return [new EscaperNodeVisitor()];
}
public function getFilters()
{
return [
new TwigFilter('raw','twig_raw_filter', ['is_safe'=> ['all']]),
];
}
public function setDefaultStrategy($defaultStrategy)
{
if (true === $defaultStrategy) {
@trigger_error('Using "true" as the default strategy is deprecated since version 1.21. Use "html" instead.', E_USER_DEPRECATED);
$defaultStrategy ='html';
}
if ('filename'=== $defaultStrategy) {
@trigger_error('Using "filename" as the default strategy is deprecated since version 1.27. Use "name" instead.', E_USER_DEPRECATED);
$defaultStrategy ='name';
}
if ('name'=== $defaultStrategy) {
$defaultStrategy = ['\Twig\FileExtensionEscapingStrategy','guess'];
}
$this->defaultStrategy = $defaultStrategy;
}
public function getDefaultStrategy($name)
{
if (!\is_string($this->defaultStrategy) && false !== $this->defaultStrategy) {
return \call_user_func($this->defaultStrategy, $name);
}
return $this->defaultStrategy;
}
public function getName()
{
return'escaper';
}
}
class_alias('Twig\Extension\EscaperExtension','Twig_Extension_Escaper');
}
namespace {
function twig_raw_filter($string)
{
return $string;
}
}
namespace Twig\Extension
{
use Twig\NodeVisitor\OptimizerNodeVisitor;
class OptimizerExtension extends AbstractExtension
{
protected $optimizers;
public function __construct($optimizers = -1)
{
$this->optimizers = $optimizers;
}
public function getNodeVisitors()
{
return [new OptimizerNodeVisitor($this->optimizers)];
}
public function getName()
{
return'optimizer';
}
}
class_alias('Twig\Extension\OptimizerExtension','Twig_Extension_Optimizer');
}
namespace Twig\Loader
{
use Twig\Error\LoaderError;
interface LoaderInterface
{
public function getSource($name);
public function getCacheKey($name);
public function isFresh($name, $time);
}
class_alias('Twig\Loader\LoaderInterface','Twig_LoaderInterface');
}
namespace Twig
{
class Markup implements \Countable
{
protected $content;
protected $charset;
public function __construct($content, $charset)
{
$this->content = (string) $content;
$this->charset = $charset;
}
public function __toString()
{
return $this->content;
}
public function count()
{
return \function_exists('mb_get_info') ? mb_strlen($this->content, $this->charset) : \strlen($this->content);
}
}
class_alias('Twig\Markup','Twig_Markup');
}
namespace
{
use Twig\Environment;
interface Twig_TemplateInterface
{
const ANY_CALL ='any';
const ARRAY_CALL ='array';
const METHOD_CALL ='method';
public function render(array $context);
public function display(array $context, array $blocks = []);
public function getEnvironment();
}
}
namespace Twig
{
use Twig\Error\Error;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
abstract class Template implements \Twig_TemplateInterface
{
protected static $cache = [];
protected $parent;
protected $parents = [];
protected $env;
protected $blocks = [];
protected $traits = [];
protected $sandbox;
public function __construct(Environment $env)
{
$this->env = $env;
}
public function __toString()
{
return $this->getTemplateName();
}
abstract public function getTemplateName();
public function getDebugInfo()
{
return [];
}
public function getSource()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);
return'';
}
public function getSourceContext()
{
return new Source('', $this->getTemplateName());
}
public function getEnvironment()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 1.20 and will be removed in 2.0.', E_USER_DEPRECATED);
return $this->env;
}
public function getParent(array $context)
{
if (null !== $this->parent) {
return $this->parent;
}
try {
$parent = $this->doGetParent($context);
if (false === $parent) {
return false;
}
if ($parent instanceof self || $parent instanceof TemplateWrapper) {
return $this->parents[$parent->getSourceContext()->getName()] = $parent;
}
if (!isset($this->parents[$parent])) {
$this->parents[$parent] = $this->loadTemplate($parent);
}
} catch (LoaderError $e) {
$e->setSourceContext(null);
$e->guess();
throw $e;
}
return $this->parents[$parent];
}
protected function doGetParent(array $context)
{
return false;
}
public function isTraitable()
{
return true;
}
public function displayParentBlock($name, array $context, array $blocks = [])
{
$name = (string) $name;
if (isset($this->traits[$name])) {
$this->traits[$name][0]->displayBlock($name, $context, $blocks, false);
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, $blocks, false);
} else {
throw new RuntimeError(sprintf('The template has no parent and no traits defining the "%s" block.', $name), -1, $this->getSourceContext());
}
}
public function displayBlock($name, array $context, array $blocks = [], $useBlocks = true)
{
$name = (string) $name;
if ($useBlocks && isset($blocks[$name])) {
$template = $blocks[$name][0];
$block = $blocks[$name][1];
} elseif (isset($this->blocks[$name])) {
$template = $this->blocks[$name][0];
$block = $this->blocks[$name][1];
} else {
$template = null;
$block = null;
}
if (null !== $template && !$template instanceof self) {
throw new \LogicException('A block must be a method on a \Twig\Template instance.');
}
if (null !== $template) {
try {
$template->$block($context, $blocks);
} catch (Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($template->getSourceContext());
}
if (-1 === $e->getTemplateLine()) {
$e->guess();
}
throw $e;
} catch (\Exception $e) {
$e = new RuntimeError(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $template->getSourceContext(), $e);
$e->guess();
throw $e;
}
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, array_merge($this->blocks, $blocks), false);
} else {
@trigger_error(sprintf('Silent display of undefined block "%s" in template "%s" is deprecated since version 1.29 and will throw an exception in 2.0. Use the "block(\'%s\') is defined" expression to test for block existence.', $name, $this->getTemplateName(), $name), E_USER_DEPRECATED);
}
}
public function renderParentBlock($name, array $context, array $blocks = [])
{
if ($this->env->isDebug()) {
ob_start();
} else {
ob_start(function () { return''; });
}
$this->displayParentBlock($name, $context, $blocks);
return ob_get_clean();
}
public function renderBlock($name, array $context, array $blocks = [], $useBlocks = true)
{
if ($this->env->isDebug()) {
ob_start();
} else {
ob_start(function () { return''; });
}
$this->displayBlock($name, $context, $blocks, $useBlocks);
return ob_get_clean();
}
public function hasBlock($name, array $context = null, array $blocks = [])
{
if (null === $context) {
@trigger_error('The '.__METHOD__.' method is internal and should never be called; calling it directly is deprecated since version 1.28 and won\'t be possible anymore in 2.0.', E_USER_DEPRECATED);
return isset($this->blocks[(string) $name]);
}
if (isset($blocks[$name])) {
return $blocks[$name][0] instanceof self;
}
if (isset($this->blocks[$name])) {
return true;
}
if (false !== $parent = $this->getParent($context)) {
return $parent->hasBlock($name, $context);
}
return false;
}
public function getBlockNames(array $context = null, array $blocks = [])
{
if (null === $context) {
@trigger_error('The '.__METHOD__.' method is internal and should never be called; calling it directly is deprecated since version 1.28 and won\'t be possible anymore in 2.0.', E_USER_DEPRECATED);
return array_keys($this->blocks);
}
$names = array_merge(array_keys($blocks), array_keys($this->blocks));
if (false !== $parent = $this->getParent($context)) {
$names = array_merge($names, $parent->getBlockNames($context));
}
return array_unique($names);
}
protected function loadTemplate($template, $templateName = null, $line = null, $index = null)
{
try {
if (\is_array($template)) {
return $this->env->resolveTemplate($template);
}
if ($template instanceof self || $template instanceof TemplateWrapper) {
return $template;
}
if ($template === $this->getTemplateName()) {
$class = \get_class($this);
if (false !== $pos = strrpos($class,'___', -1)) {
$class = substr($class, 0, $pos);
}
return $this->env->loadClass($class, $template, $index);
}
return $this->env->loadTemplate($template, $index);
} catch (Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($templateName ? new Source('', $templateName) : $this->getSourceContext());
}
if ($e->getTemplateLine() > 0) {
throw $e;
}
if (!$line) {
$e->guess();
} else {
$e->setTemplateLine($line);
}
throw $e;
}
}
protected function unwrap()
{
return $this;
}
public function getBlocks()
{
return $this->blocks;
}
public function display(array $context, array $blocks = [])
{
$this->displayWithErrorHandling($this->env->mergeGlobals($context), array_merge($this->blocks, $blocks));
}
public function render(array $context)
{
$level = ob_get_level();
if ($this->env->isDebug()) {
ob_start();
} else {
ob_start(function () { return''; });
}
try {
$this->display($context);
} catch (\Exception $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
} catch (\Throwable $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
}
return ob_get_clean();
}
protected function displayWithErrorHandling(array $context, array $blocks = [])
{
try {
$this->doDisplay($context, $blocks);
} catch (Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($this->getSourceContext());
}
if (-1 === $e->getTemplateLine()) {
$e->guess();
}
throw $e;
} catch (\Exception $e) {
$e = new RuntimeError(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $this->getSourceContext(), $e);
$e->guess();
throw $e;
}
}
abstract protected function doDisplay(array $context, array $blocks = []);
final protected function getContext($context, $item, $ignoreStrictCheck = false)
{
if (!\array_key_exists($item, $context)) {
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new RuntimeError(sprintf('Variable "%s" does not exist.', $item), -1, $this->getSourceContext());
}
return $context[$item];
}
protected function getAttribute($object, $item, array $arguments = [], $type = self::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
{
if (self::METHOD_CALL !== $type) {
$arrayItem = \is_bool($item) || \is_float($item) ? (int) $item : $item;
if (((\is_array($object) || $object instanceof \ArrayObject) && (isset($object[$arrayItem]) || \array_key_exists($arrayItem, (array) $object)))
|| ($object instanceof \ArrayAccess && isset($object[$arrayItem]))
) {
if ($isDefinedTest) {
return true;
}
return $object[$arrayItem];
}
if (self::ARRAY_CALL === $type || !\is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
if ($object instanceof \ArrayAccess) {
$message = sprintf('Key "%s" in object with ArrayAccess of class "%s" does not exist.', $arrayItem, \get_class($object));
} elseif (\is_object($object)) {
$message = sprintf('Impossible to access a key "%s" on an object of class "%s" that does not implement ArrayAccess interface.', $item, \get_class($object));
} elseif (\is_array($object)) {
if (empty($object)) {
$message = sprintf('Key "%s" does not exist as the array is empty.', $arrayItem);
} else {
$message = sprintf('Key "%s" for array with keys "%s" does not exist.', $arrayItem, implode(', ', array_keys($object)));
}
} elseif (self::ARRAY_CALL === $type) {
if (null === $object) {
$message = sprintf('Impossible to access a key ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access a key ("%s") on a %s variable ("%s").', $item, \gettype($object), $object);
}
} elseif (null === $object) {
$message = sprintf('Impossible to access an attribute ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access an attribute ("%s") on a %s variable ("%s").', $item, \gettype($object), $object);
}
throw new RuntimeError($message, -1, $this->getSourceContext());
}
}
if (!\is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
if (null === $object) {
$message = sprintf('Impossible to invoke a method ("%s") on a null variable.', $item);
} elseif (\is_array($object)) {
$message = sprintf('Impossible to invoke a method ("%s") on an array.', $item);
} else {
$message = sprintf('Impossible to invoke a method ("%s") on a %s variable ("%s").', $item, \gettype($object), $object);
}
throw new RuntimeError($message, -1, $this->getSourceContext());
}
if (self::METHOD_CALL !== $type && !$object instanceof self) { if (isset($object->$item) || \array_key_exists((string) $item, (array) $object)) {
if ($isDefinedTest) {
return true;
}
if ($this->env->hasExtension('\Twig\Extension\SandboxExtension')) {
$this->env->getExtension('\Twig\Extension\SandboxExtension')->checkPropertyAllowed($object, $item);
}
return $object->$item;
}
}
$class = \get_class($object);
if (!isset(self::$cache[$class])) {
if ($object instanceof self) {
$ref = new \ReflectionClass($class);
$methods = [];
foreach ($ref->getMethods(\ReflectionMethod::IS_PUBLIC) as $refMethod) {
if ('getenvironment'!== strtolower($refMethod->name)) {
$methods[] = $refMethod->name;
}
}
} else {
$methods = get_class_methods($object);
}
sort($methods);
$cache = [];
foreach ($methods as $method) {
$cache[$method] = $method;
$cache[$lcName = strtolower($method)] = $method;
if ('g'=== $lcName[0] && 0 === strpos($lcName,'get')) {
$name = substr($method, 3);
$lcName = substr($lcName, 3);
} elseif ('i'=== $lcName[0] && 0 === strpos($lcName,'is')) {
$name = substr($method, 2);
$lcName = substr($lcName, 2);
} else {
continue;
}
if ($name) {
if (!isset($cache[$name])) {
$cache[$name] = $method;
}
if (!isset($cache[$lcName])) {
$cache[$lcName] = $method;
}
}
}
self::$cache[$class] = $cache;
}
$call = false;
if (isset(self::$cache[$class][$item])) {
$method = self::$cache[$class][$item];
} elseif (isset(self::$cache[$class][$lcItem = strtolower($item)])) {
$method = self::$cache[$class][$lcItem];
} elseif (isset(self::$cache[$class]['__call'])) {
$method = $item;
$call = true;
} else {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new RuntimeError(sprintf('Neither the property "%1$s" nor one of the methods "%1$s()", "get%1$s()"/"is%1$s()" or "__call()" exist and have public access in class "%2$s".', $item, $class), -1, $this->getSourceContext());
}
if ($isDefinedTest) {
return true;
}
if ($this->env->hasExtension('\Twig\Extension\SandboxExtension')) {
$this->env->getExtension('\Twig\Extension\SandboxExtension')->checkMethodAllowed($object, $method);
}
try {
if (!$arguments) {
$ret = $object->$method();
} else {
$ret = \call_user_func_array([$object, $method], $arguments);
}
} catch (\BadMethodCallException $e) {
if ($call && ($ignoreStrictCheck || !$this->env->isStrictVariables())) {
return;
}
throw $e;
}
if ($object instanceof \Twig_TemplateInterface) {
$self = $object->getTemplateName() === $this->getTemplateName();
$message = sprintf('Calling "%s" on template "%s" from template "%s" is deprecated since version 1.28 and won\'t be supported anymore in 2.0.', $item, $object->getTemplateName(), $this->getTemplateName());
if ('renderBlock'=== $method ||'displayBlock'=== $method) {
$message .= sprintf(' Use block("%s"%s) instead).', $arguments[0], $self ?'':', template');
} elseif ('hasBlock'=== $method) {
$message .= sprintf(' Use "block("%s"%s) is defined" instead).', $arguments[0], $self ?'':', template');
} elseif ('render'=== $method ||'display'=== $method) {
$message .= sprintf(' Use include("%s") instead).', $object->getTemplateName());
}
@trigger_error($message, E_USER_DEPRECATED);
return''=== $ret ?'': new Markup($ret, $this->env->getCharset());
}
return $ret;
}
}
class_alias('Twig\Template','Twig_Template');
}
namespace Monolog\Formatter
{
interface FormatterInterface
{
public function format(array $record);
public function formatBatch(array $records);
}
}
namespace Monolog\Formatter
{
use Exception;
use Monolog\Utils;
class NormalizerFormatter implements FormatterInterface
{
const SIMPLE_DATE ="Y-m-d H:i:s";
protected $dateFormat;
public function __construct($dateFormat = null)
{
$this->dateFormat = $dateFormat ?: static::SIMPLE_DATE;
if (!function_exists('json_encode')) {
throw new \RuntimeException('PHP\'s json extension is required to use Monolog\'s NormalizerFormatter');
}
}
public function format(array $record)
{
return $this->normalize($record);
}
public function formatBatch(array $records)
{
foreach ($records as $key => $record) {
$records[$key] = $this->format($record);
}
return $records;
}
protected function normalize($data, $depth = 0)
{
if ($depth > 9) {
return'Over 9 levels deep, aborting normalization';
}
if (null === $data || is_scalar($data)) {
if (is_float($data)) {
if (is_infinite($data)) {
return ($data > 0 ?'':'-') .'INF';
}
if (is_nan($data)) {
return'NaN';
}
}
return $data;
}
if (is_array($data)) {
$normalized = array();
$count = 1;
foreach ($data as $key => $value) {
if ($count++ > 1000) {
$normalized['...'] ='Over 1000 items ('.count($data).' total), aborting normalization';
break;
}
$normalized[$key] = $this->normalize($value, $depth+1);
}
return $normalized;
}
if ($data instanceof \DateTime) {
return $data->format($this->dateFormat);
}
if (is_object($data)) {
if ($data instanceof Exception || (PHP_VERSION_ID > 70000 && $data instanceof \Throwable)) {
return $this->normalizeException($data);
}
if (method_exists($data,'__toString') && !$data instanceof \JsonSerializable) {
$value = $data->__toString();
} else {
$value = $this->toJson($data, true);
}
return sprintf("[object] (%s: %s)", Utils::getClass($data), $value);
}
if (is_resource($data)) {
return sprintf('[resource] (%s)', get_resource_type($data));
}
return'[unknown('.gettype($data).')]';
}
protected function normalizeException($e)
{
if (!$e instanceof Exception && !$e instanceof \Throwable) {
throw new \InvalidArgumentException('Exception/Throwable expected, got '.gettype($e).' / '.Utils::getClass($e));
}
$data = array('class'=> Utils::getClass($e),'message'=> $e->getMessage(),'code'=> $e->getCode(),'file'=> $e->getFile().':'.$e->getLine(),
);
if ($e instanceof \SoapFault) {
if (isset($e->faultcode)) {
$data['faultcode'] = $e->faultcode;
}
if (isset($e->faultactor)) {
$data['faultactor'] = $e->faultactor;
}
if (isset($e->detail)) {
$data['detail'] = $e->detail;
}
}
$trace = $e->getTrace();
foreach ($trace as $frame) {
if (isset($frame['file'])) {
$data['trace'][] = $frame['file'].':'.$frame['line'];
}
}
if ($previous = $e->getPrevious()) {
$data['previous'] = $this->normalizeException($previous);
}
return $data;
}
protected function toJson($data, $ignoreErrors = false)
{
if ($ignoreErrors) {
return @$this->jsonEncode($data);
}
$json = $this->jsonEncode($data);
if ($json === false) {
$json = $this->handleJsonError(json_last_error(), $data);
}
return $json;
}
private function jsonEncode($data)
{
if (version_compare(PHP_VERSION,'5.4.0','>=')) {
return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
return json_encode($data);
}
private function handleJsonError($code, $data)
{
if ($code !== JSON_ERROR_UTF8) {
$this->throwEncodeError($code, $data);
}
if (is_string($data)) {
$this->detectAndCleanUtf8($data);
} elseif (is_array($data)) {
array_walk_recursive($data, array($this,'detectAndCleanUtf8'));
} else {
$this->throwEncodeError($code, $data);
}
$json = $this->jsonEncode($data);
if ($json === false) {
$this->throwEncodeError(json_last_error(), $data);
}
return $json;
}
private function throwEncodeError($code, $data)
{
switch ($code) {
case JSON_ERROR_DEPTH:
$msg ='Maximum stack depth exceeded';
break;
case JSON_ERROR_STATE_MISMATCH:
$msg ='Underflow or the modes mismatch';
break;
case JSON_ERROR_CTRL_CHAR:
$msg ='Unexpected control character found';
break;
case JSON_ERROR_UTF8:
$msg ='Malformed UTF-8 characters, possibly incorrectly encoded';
break;
default:
$msg ='Unknown error';
}
throw new \RuntimeException('JSON encoding failed: '.$msg.'. Encoding: '.var_export($data, true));
}
public function detectAndCleanUtf8(&$data)
{
if (is_string($data) && !preg_match('//u', $data)) {
$data = preg_replace_callback('/[\x80-\xFF]+/',
function ($m) { return utf8_encode($m[0]); },
$data
);
$data = str_replace(
array('¤','¦','¨','´','¸','¼','½','¾'),
array('€','Š','š','Ž','ž','Œ','œ','Ÿ'),
$data
);
}
}
}
}
namespace Monolog\Formatter
{
use Monolog\Utils;
class LineFormatter extends NormalizerFormatter
{
const SIMPLE_FORMAT ="[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n";
protected $format;
protected $allowInlineLineBreaks;
protected $ignoreEmptyContextAndExtra;
protected $includeStacktraces;
public function __construct($format = null, $dateFormat = null, $allowInlineLineBreaks = false, $ignoreEmptyContextAndExtra = false)
{
$this->format = $format ?: static::SIMPLE_FORMAT;
$this->allowInlineLineBreaks = $allowInlineLineBreaks;
$this->ignoreEmptyContextAndExtra = $ignoreEmptyContextAndExtra;
parent::__construct($dateFormat);
}
public function includeStacktraces($include = true)
{
$this->includeStacktraces = $include;
if ($this->includeStacktraces) {
$this->allowInlineLineBreaks = true;
}
}
public function allowInlineLineBreaks($allow = true)
{
$this->allowInlineLineBreaks = $allow;
}
public function ignoreEmptyContextAndExtra($ignore = true)
{
$this->ignoreEmptyContextAndExtra = $ignore;
}
public function format(array $record)
{
$vars = parent::format($record);
$output = $this->format;
foreach ($vars['extra'] as $var => $val) {
if (false !== strpos($output,'%extra.'.$var.'%')) {
$output = str_replace('%extra.'.$var.'%', $this->stringify($val), $output);
unset($vars['extra'][$var]);
}
}
foreach ($vars['context'] as $var => $val) {
if (false !== strpos($output,'%context.'.$var.'%')) {
$output = str_replace('%context.'.$var.'%', $this->stringify($val), $output);
unset($vars['context'][$var]);
}
}
if ($this->ignoreEmptyContextAndExtra) {
if (empty($vars['context'])) {
unset($vars['context']);
$output = str_replace('%context%','', $output);
}
if (empty($vars['extra'])) {
unset($vars['extra']);
$output = str_replace('%extra%','', $output);
}
}
foreach ($vars as $var => $val) {
if (false !== strpos($output,'%'.$var.'%')) {
$output = str_replace('%'.$var.'%', $this->stringify($val), $output);
}
}
if (false !== strpos($output,'%')) {
$output = preg_replace('/%(?:extra|context)\..+?%/','', $output);
}
return $output;
}
public function formatBatch(array $records)
{
$message ='';
foreach ($records as $record) {
$message .= $this->format($record);
}
return $message;
}
public function stringify($value)
{
return $this->replaceNewlines($this->convertToString($value));
}
protected function normalizeException($e)
{
if (!$e instanceof \Exception && !$e instanceof \Throwable) {
throw new \InvalidArgumentException('Exception/Throwable expected, got '.gettype($e).' / '.Utils::getClass($e));
}
$previousText ='';
if ($previous = $e->getPrevious()) {
do {
$previousText .=', '.Utils::getClass($previous).'(code: '.$previous->getCode().'): '.$previous->getMessage().' at '.$previous->getFile().':'.$previous->getLine();
} while ($previous = $previous->getPrevious());
}
$str ='[object] ('.Utils::getClass($e).'(code: '.$e->getCode().'): '.$e->getMessage().' at '.$e->getFile().':'.$e->getLine().$previousText.')';
if ($this->includeStacktraces) {
$str .="\n[stacktrace]\n".$e->getTraceAsString()."\n";
}
return $str;
}
protected function convertToString($data)
{
if (null === $data || is_bool($data)) {
return var_export($data, true);
}
if (is_scalar($data)) {
return (string) $data;
}
if (version_compare(PHP_VERSION,'5.4.0','>=')) {
return $this->toJson($data, true);
}
return str_replace('\\/','/', @json_encode($data));
}
protected function replaceNewlines($str)
{
if ($this->allowInlineLineBreaks) {
if (0 === strpos($str,'{')) {
return str_replace(array('\r','\n'), array("\r","\n"), $str);
}
return $str;
}
return str_replace(array("\r\n","\r","\n"),' ', $str);
}
}
}
namespace Monolog\Handler
{
use Monolog\Formatter\FormatterInterface;
interface HandlerInterface
{
public function isHandling(array $record);
public function handle(array $record);
public function handleBatch(array $records);
public function pushProcessor($callback);
public function popProcessor();
public function setFormatter(FormatterInterface $formatter);
public function getFormatter();
}
}
namespace Monolog
{
interface ResettableInterface
{
public function reset();
}
}
namespace Monolog\Handler
{
use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\ResettableInterface;
abstract class AbstractHandler implements HandlerInterface, ResettableInterface
{
protected $level = Logger::DEBUG;
protected $bubble = true;
protected $formatter;
protected $processors = array();
public function __construct($level = Logger::DEBUG, $bubble = true)
{
$this->setLevel($level);
$this->bubble = $bubble;
}
public function isHandling(array $record)
{
return $record['level'] >= $this->level;
}
public function handleBatch(array $records)
{
foreach ($records as $record) {
$this->handle($record);
}
}
public function close()
{
}
public function pushProcessor($callback)
{
if (!is_callable($callback)) {
throw new \InvalidArgumentException('Processors must be valid callables (callback or object with an __invoke method), '.var_export($callback, true).' given');
}
array_unshift($this->processors, $callback);
return $this;
}
public function popProcessor()
{
if (!$this->processors) {
throw new \LogicException('You tried to pop from an empty processor stack.');
}
return array_shift($this->processors);
}
public function setFormatter(FormatterInterface $formatter)
{
$this->formatter = $formatter;
return $this;
}
public function getFormatter()
{
if (!$this->formatter) {
$this->formatter = $this->getDefaultFormatter();
}
return $this->formatter;
}
public function setLevel($level)
{
$this->level = Logger::toMonologLevel($level);
return $this;
}
public function getLevel()
{
return $this->level;
}
public function setBubble($bubble)
{
$this->bubble = $bubble;
return $this;
}
public function getBubble()
{
return $this->bubble;
}
public function __destruct()
{
try {
$this->close();
} catch (\Exception $e) {
} catch (\Throwable $e) {
}
}
public function reset()
{
foreach ($this->processors as $processor) {
if ($processor instanceof ResettableInterface) {
$processor->reset();
}
}
}
protected function getDefaultFormatter()
{
return new LineFormatter();
}
}
}
namespace Monolog\Handler
{
use Monolog\ResettableInterface;
abstract class AbstractProcessingHandler extends AbstractHandler
{
public function handle(array $record)
{
if (!$this->isHandling($record)) {
return false;
}
$record = $this->processRecord($record);
$record['formatted'] = $this->getFormatter()->format($record);
$this->write($record);
return false === $this->bubble;
}
abstract protected function write(array $record);
protected function processRecord(array $record)
{
if ($this->processors) {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
}
return $record;
}
}
}
namespace Monolog\Handler
{
use Monolog\Logger;
class StreamHandler extends AbstractProcessingHandler
{
protected $stream;
protected $url;
private $errorMessage;
protected $filePermission;
protected $useLocking;
private $dirCreated;
public function __construct($stream, $level = Logger::DEBUG, $bubble = true, $filePermission = null, $useLocking = false)
{
parent::__construct($level, $bubble);
if (is_resource($stream)) {
$this->stream = $stream;
} elseif (is_string($stream)) {
$this->url = $stream;
} else {
throw new \InvalidArgumentException('A stream must either be a resource or a string.');
}
$this->filePermission = $filePermission;
$this->useLocking = $useLocking;
}
public function close()
{
if ($this->url && is_resource($this->stream)) {
fclose($this->stream);
}
$this->stream = null;
$this->dirCreated = null;
}
public function getStream()
{
return $this->stream;
}
public function getUrl()
{
return $this->url;
}
protected function write(array $record)
{
if (!is_resource($this->stream)) {
if (null === $this->url ||''=== $this->url) {
throw new \LogicException('Missing stream url, the stream can not be opened. This may be caused by a premature call to close().');
}
$this->createDir();
$this->errorMessage = null;
set_error_handler(array($this,'customErrorHandler'));
$this->stream = fopen($this->url,'a');
if ($this->filePermission !== null) {
@chmod($this->url, $this->filePermission);
}
restore_error_handler();
if (!is_resource($this->stream)) {
$this->stream = null;
throw new \UnexpectedValueException(sprintf('The stream or file "%s" could not be opened: '.$this->errorMessage, $this->url));
}
}
if ($this->useLocking) {
flock($this->stream, LOCK_EX);
}
$this->streamWrite($this->stream, $record);
if ($this->useLocking) {
flock($this->stream, LOCK_UN);
}
}
protected function streamWrite($stream, array $record)
{
fwrite($stream, (string) $record['formatted']);
}
private function customErrorHandler($code, $msg)
{
$this->errorMessage = preg_replace('{^(fopen|mkdir)\(.*?\): }','', $msg);
}
private function getDirFromStream($stream)
{
$pos = strpos($stream,'://');
if ($pos === false) {
return dirname($stream);
}
if ('file://'=== substr($stream, 0, 7)) {
return dirname(substr($stream, 7));
}
return;
}
private function createDir()
{
if ($this->dirCreated) {
return;
}
$dir = $this->getDirFromStream($this->url);
if (null !== $dir && !is_dir($dir)) {
$this->errorMessage = null;
set_error_handler(array($this,'customErrorHandler'));
$status = mkdir($dir, 0777, true);
restore_error_handler();
if (false === $status && !is_dir($dir)) {
throw new \UnexpectedValueException(sprintf('There is no existing directory at "%s" and its not buildable: '.$this->errorMessage, $dir));
}
}
$this->dirCreated = true;
}
}
}
namespace Monolog\Handler
{
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossed\ActivationStrategyInterface;
use Monolog\Logger;
use Monolog\ResettableInterface;
class FingersCrossedHandler extends AbstractHandler
{
protected $handler;
protected $activationStrategy;
protected $buffering = true;
protected $bufferSize;
protected $buffer = array();
protected $stopBuffering;
protected $passthruLevel;
public function __construct($handler, $activationStrategy = null, $bufferSize = 0, $bubble = true, $stopBuffering = true, $passthruLevel = null)
{
if (null === $activationStrategy) {
$activationStrategy = new ErrorLevelActivationStrategy(Logger::WARNING);
}
if (!$activationStrategy instanceof ActivationStrategyInterface) {
$activationStrategy = new ErrorLevelActivationStrategy($activationStrategy);
}
$this->handler = $handler;
$this->activationStrategy = $activationStrategy;
$this->bufferSize = $bufferSize;
$this->bubble = $bubble;
$this->stopBuffering = $stopBuffering;
if ($passthruLevel !== null) {
$this->passthruLevel = Logger::toMonologLevel($passthruLevel);
}
if (!$this->handler instanceof HandlerInterface && !is_callable($this->handler)) {
throw new \RuntimeException("The given handler (".json_encode($this->handler).") is not a callable nor a Monolog\Handler\HandlerInterface object");
}
}
public function isHandling(array $record)
{
return true;
}
public function activate()
{
if ($this->stopBuffering) {
$this->buffering = false;
}
if (!$this->handler instanceof HandlerInterface) {
$record = end($this->buffer) ?: null;
$this->handler = call_user_func($this->handler, $record, $this);
if (!$this->handler instanceof HandlerInterface) {
throw new \RuntimeException("The factory callable should return a HandlerInterface");
}
}
$this->handler->handleBatch($this->buffer);
$this->buffer = array();
}
public function handle(array $record)
{
if ($this->processors) {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
}
if ($this->buffering) {
$this->buffer[] = $record;
if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) {
array_shift($this->buffer);
}
if ($this->activationStrategy->isHandlerActivated($record)) {
$this->activate();
}
} else {
$this->handler->handle($record);
}
return false === $this->bubble;
}
public function close()
{
$this->flushBuffer();
}
public function reset()
{
$this->flushBuffer();
parent::reset();
if ($this->handler instanceof ResettableInterface) {
$this->handler->reset();
}
}
public function clear()
{
$this->buffer = array();
$this->reset();
}
private function flushBuffer()
{
if (null !== $this->passthruLevel) {
$level = $this->passthruLevel;
$this->buffer = array_filter($this->buffer, function ($record) use ($level) {
return $record['level'] >= $level;
});
if (count($this->buffer) > 0) {
$this->handler->handleBatch($this->buffer);
}
}
$this->buffer = array();
$this->buffering = true;
}
}
}
namespace Monolog\Handler
{
use Monolog\Logger;
class FilterHandler extends AbstractHandler
{
protected $handler;
protected $acceptedLevels;
protected $bubble;
public function __construct($handler, $minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY, $bubble = true)
{
$this->handler = $handler;
$this->bubble = $bubble;
$this->setAcceptedLevels($minLevelOrList, $maxLevel);
if (!$this->handler instanceof HandlerInterface && !is_callable($this->handler)) {
throw new \RuntimeException("The given handler (".json_encode($this->handler).") is not a callable nor a Monolog\Handler\HandlerInterface object");
}
}
public function getAcceptedLevels()
{
return array_flip($this->acceptedLevels);
}
public function setAcceptedLevels($minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY)
{
if (is_array($minLevelOrList)) {
$acceptedLevels = array_map('Monolog\Logger::toMonologLevel', $minLevelOrList);
} else {
$minLevelOrList = Logger::toMonologLevel($minLevelOrList);
$maxLevel = Logger::toMonologLevel($maxLevel);
$acceptedLevels = array_values(array_filter(Logger::getLevels(), function ($level) use ($minLevelOrList, $maxLevel) {
return $level >= $minLevelOrList && $level <= $maxLevel;
}));
}
$this->acceptedLevels = array_flip($acceptedLevels);
}
public function isHandling(array $record)
{
return isset($this->acceptedLevels[$record['level']]);
}
public function handle(array $record)
{
if (!$this->isHandling($record)) {
return false;
}
if (!$this->handler instanceof HandlerInterface) {
$this->handler = call_user_func($this->handler, $record, $this);
if (!$this->handler instanceof HandlerInterface) {
throw new \RuntimeException("The factory callable should return a HandlerInterface");
}
}
if ($this->processors) {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
}
$this->handler->handle($record);
return false === $this->bubble;
}
public function handleBatch(array $records)
{
$filtered = array();
foreach ($records as $record) {
if ($this->isHandling($record)) {
$filtered[] = $record;
}
}
$this->handler->handleBatch($filtered);
}
}
}
namespace Monolog\Handler
{
class TestHandler extends AbstractProcessingHandler
{
protected $records = array();
protected $recordsByLevel = array();
private $skipReset = false;
public function getRecords()
{
return $this->records;
}
public function clear()
{
$this->records = array();
$this->recordsByLevel = array();
}
public function reset()
{
if (!$this->skipReset) {
$this->clear();
}
}
public function setSkipReset($skipReset)
{
$this->skipReset = $skipReset;
}
public function hasRecords($level)
{
return isset($this->recordsByLevel[$level]);
}
public function hasRecord($record, $level)
{
if (is_string($record)) {
$record = array('message'=> $record);
}
return $this->hasRecordThatPasses(function ($rec) use ($record) {
if ($rec['message'] !== $record['message']) {
return false;
}
if (isset($record['context']) && $rec['context'] !== $record['context']) {
return false;
}
return true;
}, $level);
}
public function hasRecordThatContains($message, $level)
{
return $this->hasRecordThatPasses(function ($rec) use ($message) {
return strpos($rec['message'], $message) !== false;
}, $level);
}
public function hasRecordThatMatches($regex, $level)
{
return $this->hasRecordThatPasses(function ($rec) use ($regex) {
return preg_match($regex, $rec['message']) > 0;
}, $level);
}
public function hasRecordThatPasses($predicate, $level)
{
if (!is_callable($predicate)) {
throw new \InvalidArgumentException("Expected a callable for hasRecordThatSucceeds");
}
if (!isset($this->recordsByLevel[$level])) {
return false;
}
foreach ($this->recordsByLevel[$level] as $i => $rec) {
if (call_user_func($predicate, $rec, $i)) {
return true;
}
}
return false;
}
protected function write(array $record)
{
$this->recordsByLevel[$record['level']][] = $record;
$this->records[] = $record;
}
public function __call($method, $args)
{
if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', $method, $matches) > 0) {
$genericMethod = $matches[1] . ('Records'!== $matches[3] ?'Record':'') . $matches[3];
$level = constant('Monolog\Logger::'. strtoupper($matches[2]));
if (method_exists($this, $genericMethod)) {
$args[] = $level;
return call_user_func_array(array($this, $genericMethod), $args);
}
}
throw new \BadMethodCallException('Call to undefined method '. get_class($this) .'::'. $method .'()');
}
}
}
namespace Psr\Log
{
interface LoggerInterface
{
public function emergency($message, array $context = array());
public function alert($message, array $context = array());
public function critical($message, array $context = array());
public function error($message, array $context = array());
public function warning($message, array $context = array());
public function notice($message, array $context = array());
public function info($message, array $context = array());
public function debug($message, array $context = array());
public function log($level, $message, array $context = array());
}
}
namespace Monolog
{
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Psr\Log\InvalidArgumentException;
use Exception;
class Logger implements LoggerInterface, ResettableInterface
{
const DEBUG = 100;
const INFO = 200;
const NOTICE = 250;
const WARNING = 300;
const ERROR = 400;
const CRITICAL = 500;
const ALERT = 550;
const EMERGENCY = 600;
const API = 1;
protected static $levels = array(
self::DEBUG =>'DEBUG',
self::INFO =>'INFO',
self::NOTICE =>'NOTICE',
self::WARNING =>'WARNING',
self::ERROR =>'ERROR',
self::CRITICAL =>'CRITICAL',
self::ALERT =>'ALERT',
self::EMERGENCY =>'EMERGENCY',
);
protected static $timezone;
protected $name;
protected $handlers;
protected $processors;
protected $microsecondTimestamps = true;
protected $exceptionHandler;
public function __construct($name, array $handlers = array(), array $processors = array())
{
$this->name = $name;
$this->setHandlers($handlers);
$this->processors = $processors;
}
public function getName()
{
return $this->name;
}
public function withName($name)
{
$new = clone $this;
$new->name = $name;
return $new;
}
public function pushHandler(HandlerInterface $handler)
{
array_unshift($this->handlers, $handler);
return $this;
}
public function popHandler()
{
if (!$this->handlers) {
throw new \LogicException('You tried to pop from an empty handler stack.');
}
return array_shift($this->handlers);
}
public function setHandlers(array $handlers)
{
$this->handlers = array();
foreach (array_reverse($handlers) as $handler) {
$this->pushHandler($handler);
}
return $this;
}
public function getHandlers()
{
return $this->handlers;
}
public function pushProcessor($callback)
{
if (!is_callable($callback)) {
throw new \InvalidArgumentException('Processors must be valid callables (callback or object with an __invoke method), '.var_export($callback, true).' given');
}
array_unshift($this->processors, $callback);
return $this;
}
public function popProcessor()
{
if (!$this->processors) {
throw new \LogicException('You tried to pop from an empty processor stack.');
}
return array_shift($this->processors);
}
public function getProcessors()
{
return $this->processors;
}
public function useMicrosecondTimestamps($micro)
{
$this->microsecondTimestamps = (bool) $micro;
}
public function addRecord($level, $message, array $context = array())
{
if (!$this->handlers) {
$this->pushHandler(new StreamHandler('php://stderr', static::DEBUG));
}
$levelName = static::getLevelName($level);
$handlerKey = null;
reset($this->handlers);
while ($handler = current($this->handlers)) {
if ($handler->isHandling(array('level'=> $level))) {
$handlerKey = key($this->handlers);
break;
}
next($this->handlers);
}
if (null === $handlerKey) {
return false;
}
if (!static::$timezone) {
static::$timezone = new \DateTimeZone(date_default_timezone_get() ?:'UTC');
}
if ($this->microsecondTimestamps && PHP_VERSION_ID < 70100) {
$ts = \DateTime::createFromFormat('U.u', sprintf('%.6F', microtime(true)), static::$timezone);
} else {
$ts = new \DateTime(null, static::$timezone);
}
$ts->setTimezone(static::$timezone);
$record = array('message'=> (string) $message,'context'=> $context,'level'=> $level,'level_name'=> $levelName,'channel'=> $this->name,'datetime'=> $ts,'extra'=> array(),
);
try {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
while ($handler = current($this->handlers)) {
if (true === $handler->handle($record)) {
break;
}
next($this->handlers);
}
} catch (Exception $e) {
$this->handleException($e, $record);
}
return true;
}
public function close()
{
foreach ($this->handlers as $handler) {
if (method_exists($handler,'close')) {
$handler->close();
}
}
}
public function reset()
{
foreach ($this->handlers as $handler) {
if ($handler instanceof ResettableInterface) {
$handler->reset();
}
}
foreach ($this->processors as $processor) {
if ($processor instanceof ResettableInterface) {
$processor->reset();
}
}
}
public function addDebug($message, array $context = array())
{
return $this->addRecord(static::DEBUG, $message, $context);
}
public function addInfo($message, array $context = array())
{
return $this->addRecord(static::INFO, $message, $context);
}
public function addNotice($message, array $context = array())
{
return $this->addRecord(static::NOTICE, $message, $context);
}
public function addWarning($message, array $context = array())
{
return $this->addRecord(static::WARNING, $message, $context);
}
public function addError($message, array $context = array())
{
return $this->addRecord(static::ERROR, $message, $context);
}
public function addCritical($message, array $context = array())
{
return $this->addRecord(static::CRITICAL, $message, $context);
}
public function addAlert($message, array $context = array())
{
return $this->addRecord(static::ALERT, $message, $context);
}
public function addEmergency($message, array $context = array())
{
return $this->addRecord(static::EMERGENCY, $message, $context);
}
public static function getLevels()
{
return array_flip(static::$levels);
}
public static function getLevelName($level)
{
if (!isset(static::$levels[$level])) {
throw new InvalidArgumentException('Level "'.$level.'" is not defined, use one of: '.implode(', ', array_keys(static::$levels)));
}
return static::$levels[$level];
}
public static function toMonologLevel($level)
{
if (is_string($level) && defined(__CLASS__.'::'.strtoupper($level))) {
return constant(__CLASS__.'::'.strtoupper($level));
}
return $level;
}
public function isHandling($level)
{
$record = array('level'=> $level,
);
foreach ($this->handlers as $handler) {
if ($handler->isHandling($record)) {
return true;
}
}
return false;
}
public function setExceptionHandler($callback)
{
if (!is_callable($callback)) {
throw new \InvalidArgumentException('Exception handler must be valid callable (callback or object with an __invoke method), '.var_export($callback, true).' given');
}
$this->exceptionHandler = $callback;
return $this;
}
public function getExceptionHandler()
{
return $this->exceptionHandler;
}
protected function handleException(Exception $e, array $record)
{
if (!$this->exceptionHandler) {
throw $e;
}
call_user_func($this->exceptionHandler, $e, $record);
}
public function log($level, $message, array $context = array())
{
$level = static::toMonologLevel($level);
return $this->addRecord($level, $message, $context);
}
public function debug($message, array $context = array())
{
return $this->addRecord(static::DEBUG, $message, $context);
}
public function info($message, array $context = array())
{
return $this->addRecord(static::INFO, $message, $context);
}
public function notice($message, array $context = array())
{
return $this->addRecord(static::NOTICE, $message, $context);
}
public function warn($message, array $context = array())
{
return $this->addRecord(static::WARNING, $message, $context);
}
public function warning($message, array $context = array())
{
return $this->addRecord(static::WARNING, $message, $context);
}
public function err($message, array $context = array())
{
return $this->addRecord(static::ERROR, $message, $context);
}
public function error($message, array $context = array())
{
return $this->addRecord(static::ERROR, $message, $context);
}
public function crit($message, array $context = array())
{
return $this->addRecord(static::CRITICAL, $message, $context);
}
public function critical($message, array $context = array())
{
return $this->addRecord(static::CRITICAL, $message, $context);
}
public function alert($message, array $context = array())
{
return $this->addRecord(static::ALERT, $message, $context);
}
public function emerg($message, array $context = array())
{
return $this->addRecord(static::EMERGENCY, $message, $context);
}
public function emergency($message, array $context = array())
{
return $this->addRecord(static::EMERGENCY, $message, $context);
}
public static function setTimezone(\DateTimeZone $tz)
{
self::$timezone = $tz;
}
}
}
namespace Symfony\Component\HttpKernel\Log
{
interface DebugLoggerInterface
{
public function getLogs();
public function countErrors();
}
}
namespace Symfony\Bridge\Monolog
{
use Monolog\Logger as BaseLogger;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
class Logger extends BaseLogger implements DebugLoggerInterface
{
public function getLogs()
{
if ($logger = $this->getDebugLogger()) {
return $logger->getLogs();
}
return [];
}
public function countErrors()
{
if ($logger = $this->getDebugLogger()) {
return $logger->countErrors();
}
return 0;
}
public function clear()
{
if (($logger = $this->getDebugLogger()) && method_exists($logger,'clear')) {
$logger->clear();
}
}
private function getDebugLogger()
{
foreach ($this->processors as $processor) {
if ($processor instanceof DebugLoggerInterface) {
return $processor;
}
}
foreach ($this->handlers as $handler) {
if ($handler instanceof DebugLoggerInterface) {
return $handler;
}
}
return null;
}
}
}
namespace Monolog\Handler\FingersCrossed
{
interface ActivationStrategyInterface
{
public function isHandlerActivated(array $record);
}
}
namespace Monolog\Handler\FingersCrossed
{
use Monolog\Logger;
class ErrorLevelActivationStrategy implements ActivationStrategyInterface
{
private $actionLevel;
public function __construct($actionLevel)
{
$this->actionLevel = Logger::toMonologLevel($actionLevel);
}
public function isHandlerActivated(array $record)
{
return $record['level'] >= $this->actionLevel;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class ParamConverterListener implements EventSubscriberInterface
{
private $manager;
private $autoConvert;
private $isParameterTypeSupported;
public function __construct(ParamConverterManager $manager, $autoConvert = true)
{
$this->manager = $manager;
$this->autoConvert = $autoConvert;
$this->isParameterTypeSupported = method_exists('ReflectionParameter','getType');
}
public function onKernelController(FilterControllerEvent $event)
{
$controller = $event->getController();
$request = $event->getRequest();
$configurations = [];
if ($configuration = $request->attributes->get('_converters')) {
foreach (\is_array($configuration) ? $configuration : [$configuration] as $configuration) {
$configurations[$configuration->getName()] = $configuration;
}
}
if (\is_array($controller)) {
$r = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (\is_object($controller) && \is_callable([$controller,'__invoke'])) {
$r = new \ReflectionMethod($controller,'__invoke');
} else {
$r = new \ReflectionFunction($controller);
}
if ($this->autoConvert) {
$configurations = $this->autoConfigure($r, $request, $configurations);
}
$this->manager->apply($request, $configurations);
}
private function autoConfigure(\ReflectionFunctionAbstract $r, Request $request, $configurations)
{
foreach ($r->getParameters() as $param) {
if ($param->getClass() && $param->getClass()->isInstance($request)) {
continue;
}
$name = $param->getName();
$class = $param->getClass();
$hasType = $this->isParameterTypeSupported && $param->hasType();
if ($class || $hasType) {
if (!isset($configurations[$name])) {
$configuration = new ParamConverter([]);
$configuration->setName($name);
$configurations[$name] = $configuration;
}
if ($class && null === $configurations[$name]->getClass()) {
$configurations[$name]->setClass($class->getName());
}
}
if (isset($configurations[$name])) {
$configurations[$name]->setIsOptional($param->isOptional() || $param->isDefaultValueAvailable() || $hasType && $param->getType()->allowsNull());
}
}
return $configurations;
}
public static function getSubscribedEvents()
{
return [
KernelEvents::CONTROLLER =>'onKernelController',
];
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
interface ParamConverterInterface
{
public function apply(Request $request, ParamConverter $configuration);
public function supports(ParamConverter $configuration);
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use DateTime;
class DateTimeParamConverter implements ParamConverterInterface
{
public function apply(Request $request, ParamConverter $configuration)
{
$param = $configuration->getName();
if (!$request->attributes->has($param)) {
return false;
}
$options = $configuration->getOptions();
$value = $request->attributes->get($param);
if (!$value && $configuration->isOptional()) {
$request->attributes->set($param, null);
return true;
}
$class = $configuration->getClass();
if (isset($options['format'])) {
$date = $class::createFromFormat($options['format'], $value);
if (0 < DateTime::getLastErrors()['warning_count']) {
$date = false;
}
if (!$date) {
throw new NotFoundHttpException(sprintf('Invalid date given for parameter "%s".', $param));
}
} else {
if (false === strtotime($value)) {
throw new NotFoundHttpException(sprintf('Invalid date given for parameter "%s".', $param));
}
$date = new $class($value);
}
$request->attributes->set($param, $date);
return true;
}
public function supports(ParamConverter $configuration)
{
if (null === $configuration->getClass()) {
return false;
}
return'DateTime'=== $configuration->getClass() || is_subclass_of($configuration->getClass(), \PHP_VERSION_ID < 50500 ?'DateTime':'DateTimeInterface');
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Doctrine\DBAL\Types\ConversionException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\ExpressionLanguage\SyntaxError;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NoResultException;
class DoctrineParamConverter implements ParamConverterInterface
{
private $registry;
private $language;
private $defaultOptions;
public function __construct(ManagerRegistry $registry = null, ExpressionLanguage $expressionLanguage = null, array $options = [])
{
$this->registry = $registry;
$this->language = $expressionLanguage;
$defaultValues = ['entity_manager'=> null,'exclude'=> [],'mapping'=> [],'strip_null'=> false,'expr'=> null,'id'=> null,'repository_method'=> null,'map_method_signature'=> false,'evict_cache'=> false,
];
$this->defaultOptions = array_merge($defaultValues, $options);
}
public function apply(Request $request, ParamConverter $configuration)
{
$name = $configuration->getName();
$class = $configuration->getClass();
$options = $this->getOptions($configuration);
if (null === $request->attributes->get($name, false)) {
$configuration->setIsOptional(true);
}
$errorMessage = null;
if ($expr = $options['expr']) {
$object = $this->findViaExpression($class, $request, $expr, $options, $configuration);
if (null === $object) {
$errorMessage = sprintf('The expression "%s" returned null', $expr);
}
} elseif (false === $object = $this->find($class, $request, $options, $name)) {
if (false === $object = $this->findOneBy($class, $request, $options)) {
if ($configuration->isOptional()) {
$object = null;
} else {
throw new \LogicException(sprintf('Unable to guess how to get a Doctrine instance from the request information for parameter "%s".', $name));
}
}
}
if (null === $object && false === $configuration->isOptional()) {
$message = sprintf('%s object not found by the @%s annotation.', $class, $this->getAnnotationName($configuration));
if ($errorMessage) {
$message .=' '.$errorMessage;
}
throw new NotFoundHttpException($message);
}
$request->attributes->set($name, $object);
return true;
}
private function find($class, Request $request, $options, $name)
{
if ($options['mapping'] || $options['exclude']) {
return false;
}
$id = $this->getIdentifier($request, $options, $name);
if (false === $id || null === $id) {
return false;
}
if ($options['repository_method']) {
$method = $options['repository_method'];
} else {
$method ='find';
}
$om = $this->getManager($options['entity_manager'], $class);
if ($options['evict_cache'] && $om instanceof EntityManagerInterface) {
$cacheProvider = $om->getCache();
if ($cacheProvider && $cacheProvider->containsEntity($class, $id)) {
$cacheProvider->evictEntity($class, $id);
}
}
try {
return $om->getRepository($class)->$method($id);
} catch (NoResultException $e) {
return;
} catch (ConversionException $e) {
return;
}
}
private function getIdentifier(Request $request, $options, $name)
{
if (null !== $options['id']) {
if (!\is_array($options['id'])) {
$name = $options['id'];
} elseif (\is_array($options['id'])) {
$id = [];
foreach ($options['id'] as $field) {
if (false !== strstr($field,'%s')) {
$field = sprintf($field, $name);
}
$id[$field] = $request->attributes->get($field);
}
return $id;
}
}
if ($request->attributes->has($name)) {
return $request->attributes->get($name);
}
if ($request->attributes->has('id') && !$options['id']) {
return $request->attributes->get('id');
}
return false;
}
private function findOneBy($class, Request $request, $options)
{
if (!$options['mapping']) {
$keys = $request->attributes->keys();
$options['mapping'] = $keys ? array_combine($keys, $keys) : [];
}
foreach ($options['exclude'] as $exclude) {
unset($options['mapping'][$exclude]);
}
if (!$options['mapping']) {
return false;
}
if ($options['id'] && null === $request->attributes->get($options['id'])) {
return false;
}
$criteria = [];
$em = $this->getManager($options['entity_manager'], $class);
$metadata = $em->getClassMetadata($class);
$mapMethodSignature = $options['repository_method']
&& $options['map_method_signature']
&& true === $options['map_method_signature'];
foreach ($options['mapping'] as $attribute => $field) {
if ($metadata->hasField($field)
|| ($metadata->hasAssociation($field) && $metadata->isSingleValuedAssociation($field))
|| $mapMethodSignature) {
$criteria[$field] = $request->attributes->get($attribute);
}
}
if ($options['strip_null']) {
$criteria = array_filter($criteria, function ($value) {
return null !== $value;
});
}
if (!$criteria) {
return false;
}
if ($options['repository_method']) {
$repositoryMethod = $options['repository_method'];
} else {
$repositoryMethod ='findOneBy';
}
try {
if ($mapMethodSignature) {
return $this->findDataByMapMethodSignature($em, $class, $repositoryMethod, $criteria);
}
return $em->getRepository($class)->$repositoryMethod($criteria);
} catch (NoResultException $e) {
return;
} catch (ConversionException $e) {
return;
}
}
private function findDataByMapMethodSignature($em, $class, $repositoryMethod, $criteria)
{
$arguments = [];
$repository = $em->getRepository($class);
$ref = new \ReflectionMethod($repository, $repositoryMethod);
foreach ($ref->getParameters() as $parameter) {
if (array_key_exists($parameter->name, $criteria)) {
$arguments[] = $criteria[$parameter->name];
} elseif ($parameter->isDefaultValueAvailable()) {
$arguments[] = $parameter->getDefaultValue();
} else {
throw new \InvalidArgumentException(sprintf('Repository method "%s::%s" requires that you provide a value for the "$%s" argument.', \get_class($repository), $repositoryMethod, $parameter->name));
}
}
return $ref->invokeArgs($repository, $arguments);
}
private function findViaExpression($class, Request $request, $expression, $options, ParamConverter $configuration)
{
if (null === $this->language) {
throw new \LogicException(sprintf('To use the @%s tag with the "expr" option, you need to install the ExpressionLanguage component.', $this->getAnnotationName($configuration)));
}
$repository = $this->getManager($options['entity_manager'], $class)->getRepository($class);
$variables = array_merge($request->attributes->all(), ['repository'=> $repository]);
try {
return $this->language->evaluate($expression, $variables);
} catch (NoResultException $e) {
return;
} catch (ConversionException $e) {
return;
} catch (SyntaxError $e) {
throw new \LogicException(sprintf('Error parsing expression -- %s -- (%s)', $expression, $e->getMessage()), 0, $e);
}
}
public function supports(ParamConverter $configuration)
{
if (null === $this->registry || !\count($this->registry->getManagerNames())) {
return false;
}
if (null === $configuration->getClass()) {
return false;
}
$options = $this->getOptions($configuration, false);
$em = $this->getManager($options['entity_manager'], $configuration->getClass());
if (null === $em) {
return false;
}
return !$em->getMetadataFactory()->isTransient($configuration->getClass());
}
private function getOptions(ParamConverter $configuration, $strict = true)
{
$passedOptions = $configuration->getOptions();
if (isset($passedOptions['repository_method'])) {
@trigger_error('The repository_method option of @ParamConverter is deprecated and will be removed in 6.0. Use the expr option or @Entity.', E_USER_DEPRECATED);
}
if (isset($passedOptions['map_method_signature'])) {
@trigger_error('The map_method_signature option of @ParamConverter is deprecated and will be removed in 6.0. Use the expr option or @Entity.', E_USER_DEPRECATED);
}
$extraKeys = array_diff(array_keys($passedOptions), array_keys($this->defaultOptions));
if ($extraKeys && $strict) {
throw new \InvalidArgumentException(sprintf('Invalid option(s) passed to @%s: %s', $this->getAnnotationName($configuration), implode(', ', $extraKeys)));
}
return array_replace($this->defaultOptions, $passedOptions);
}
private function getManager($name, $class)
{
if (null === $name) {
return $this->registry->getManagerForClass($class);
}
return $this->registry->getManager($name);
}
private function getAnnotationName(ParamConverter $configuration)
{
$r = new \ReflectionClass($configuration);
return $r->getShortName();
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
class ParamConverterManager
{
private $converters = [];
private $namedConverters = [];
public function apply(Request $request, $configurations)
{
if (\is_object($configurations)) {
$configurations = [$configurations];
}
foreach ($configurations as $configuration) {
$this->applyConverter($request, $configuration);
}
}
private function applyConverter(Request $request, ParamConverter $configuration)
{
$value = $request->attributes->get($configuration->getName());
$className = $configuration->getClass();
if (\is_object($value) && $value instanceof $className) {
return;
}
if ($converterName = $configuration->getConverter()) {
if (!isset($this->namedConverters[$converterName])) {
throw new \RuntimeException(sprintf("No converter named '%s' found for conversion of parameter '%s'.",
$converterName,
$configuration->getName()
));
}
$converter = $this->namedConverters[$converterName];
if (!$converter->supports($configuration)) {
throw new \RuntimeException(sprintf("Converter '%s' does not support conversion of parameter '%s'.",
$converterName,
$configuration->getName()
));
}
$converter->apply($request, $configuration);
return;
}
foreach ($this->all() as $converter) {
if ($converter->supports($configuration)) {
if ($converter->apply($request, $configuration)) {
return;
}
}
}
}
public function add(ParamConverterInterface $converter, $priority = 0, $name = null)
{
if (null !== $priority) {
if (!isset($this->converters[$priority])) {
$this->converters[$priority] = [];
}
$this->converters[$priority][] = $converter;
}
if (null !== $name) {
$this->namedConverters[$name] = $converter;
}
}
public function all()
{
krsort($this->converters);
$converters = [];
foreach ($this->converters as $all) {
$converters = array_merge($converters, $all);
}
return $converters;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser;
class TemplateListener implements EventSubscriberInterface
{
private $templateGuesser;
private $twig;
public function __construct(TemplateGuesser $templateGuesser, \Twig_Environment $twig = null)
{
$this->templateGuesser = $templateGuesser;
$this->twig = $twig;
}
public function onKernelController(FilterControllerEvent $event)
{
$request = $event->getRequest();
$template = $request->attributes->get('_template');
if (!$template instanceof Template) {
return;
}
$controller = $event->getController();
if (!\is_array($controller) && method_exists($controller,'__invoke')) {
$controller = [$controller,'__invoke'];
}
$template->setOwner($controller);
if (null === $template->getTemplate()) {
$template->setTemplate($this->templateGuesser->guessTemplateName($controller, $request));
}
}
public function onKernelView(GetResponseForControllerResultEvent $event)
{
$request = $event->getRequest();
$template = $request->attributes->get('_template');
if (!$template instanceof Template) {
return;
}
if (null === $this->twig) {
throw new \LogicException('You can not use the "@Template" annotation if the Twig Bundle is not available.');
}
$parameters = $event->getControllerResult();
$owner = $template->getOwner();
list($controller, $action) = $owner;
if (null === $parameters) {
$parameters = $this->resolveDefaultParameters($request, $template, $controller, $action);
}
if ($template->isStreamable()) {
$callback = function () use ($template, $parameters) {
$this->twig->display($template->getTemplate(), $parameters);
};
$event->setResponse(new StreamedResponse($callback));
} else {
$event->setResponse(new Response($this->twig->render($template->getTemplate(), $parameters)));
}
$template->setOwner([]);
}
public static function getSubscribedEvents()
{
return [
KernelEvents::CONTROLLER => ['onKernelController', -128],
KernelEvents::VIEW =>'onKernelView',
];
}
private function resolveDefaultParameters(Request $request, Template $template, $controller, $action)
{
$parameters = [];
$arguments = $template->getVars();
if (0 === \count($arguments)) {
$r = new \ReflectionObject($controller);
$arguments = [];
foreach ($r->getMethod($action)->getParameters() as $param) {
$arguments[] = $param;
}
}
foreach ($arguments as $argument) {
if ($argument instanceof \ReflectionParameter) {
$parameters[$name = $argument->getName()] = !$request->attributes->has($name) && $argument->isDefaultValueAvailable() ? $argument->getDefaultValue() : $request->attributes->get($name);
} else {
$parameters[$argument] = $request->attributes->get($argument);
}
}
return $parameters;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
class HttpCacheListener implements EventSubscriberInterface
{
private $lastModifiedDates;
private $etags;
private $expressionLanguage;
public function __construct()
{
$this->lastModifiedDates = new \SplObjectStorage();
$this->etags = new \SplObjectStorage();
}
public function onKernelController(FilterControllerEvent $event)
{
$request = $event->getRequest();
if (!$configuration = $request->attributes->get('_cache')) {
return;
}
$response = new Response();
$lastModifiedDate ='';
if ($configuration->getLastModified()) {
$lastModifiedDate = $this->getExpressionLanguage()->evaluate($configuration->getLastModified(), $request->attributes->all());
$response->setLastModified($lastModifiedDate);
}
$etag ='';
if ($configuration->getEtag()) {
$etag = hash('sha256', $this->getExpressionLanguage()->evaluate($configuration->getEtag(), $request->attributes->all()));
$response->setEtag($etag);
}
if ($response->isNotModified($request)) {
$event->setController(function () use ($response) {
return $response;
});
$event->stopPropagation();
} else {
if ($etag) {
$this->etags[$request] = $etag;
}
if ($lastModifiedDate) {
$this->lastModifiedDates[$request] = $lastModifiedDate;
}
}
}
public function onKernelResponse(FilterResponseEvent $event)
{
$request = $event->getRequest();
if (!$configuration = $request->attributes->get('_cache')) {
return;
}
$response = $event->getResponse();
if (!\in_array($response->getStatusCode(), [200, 203, 300, 301, 302, 304, 404, 410])) {
return;
}
if (!$response->headers->hasCacheControlDirective('s-maxage') && null !== $age = $configuration->getSMaxAge()) {
$age = $this->convertToSecondsIfNeeded($age);
$response->setSharedMaxAge($age);
}
if ($configuration->mustRevalidate()) {
$response->headers->addCacheControlDirective('must-revalidate');
}
if (!$response->headers->hasCacheControlDirective('max-age') && null !== $age = $configuration->getMaxAge()) {
$age = $this->convertToSecondsIfNeeded($age);
$response->setMaxAge($age);
}
if (!$response->headers->hasCacheControlDirective('max-stale') && null !== $stale = $configuration->getMaxStale()) {
$stale = $this->convertToSecondsIfNeeded($stale);
$response->headers->addCacheControlDirective('max-stale', $stale);
}
if (!$response->headers->has('Expires') && null !== $configuration->getExpires()) {
$date = \DateTime::createFromFormat('U', strtotime($configuration->getExpires()), new \DateTimeZone('UTC'));
$response->setExpires($date);
}
if (!$response->headers->has('Vary') && null !== $configuration->getVary()) {
$response->setVary($configuration->getVary());
}
if ($configuration->isPublic()) {
$response->setPublic();
}
if ($configuration->isPrivate()) {
$response->setPrivate();
}
if (!$response->headers->has('Last-Modified') && isset($this->lastModifiedDates[$request])) {
$response->setLastModified($this->lastModifiedDates[$request]);
unset($this->lastModifiedDates[$request]);
}
if (!$response->headers->has('Etag') && isset($this->etags[$request])) {
$response->setEtag($this->etags[$request]);
unset($this->etags[$request]);
}
}
public static function getSubscribedEvents()
{
return [
KernelEvents::CONTROLLER =>'onKernelController',
KernelEvents::RESPONSE =>'onKernelResponse',
];
}
private function getExpressionLanguage()
{
if (null === $this->expressionLanguage) {
if (!class_exists('Symfony\Component\ExpressionLanguage\ExpressionLanguage')) {
throw new \RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
}
$this->expressionLanguage = new ExpressionLanguage();
}
return $this->expressionLanguage;
}
private function convertToSecondsIfNeeded($time)
{
if (!is_numeric($time)) {
$now = microtime(true);
$time = ceil(strtotime($time, $now) - $now);
}
return $time;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter;
use Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage;
use Symfony\Component\HttpKernel\Event\FilterControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolverInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;
class SecurityListener implements EventSubscriberInterface
{
private $argumentNameConverter;
private $tokenStorage;
private $authChecker;
private $language;
private $trustResolver;
private $roleHierarchy;
private $logger;
public function __construct(ArgumentNameConverter $argumentNameConverter, ExpressionLanguage $language = null, AuthenticationTrustResolverInterface $trustResolver = null, RoleHierarchyInterface $roleHierarchy = null, TokenStorageInterface $tokenStorage = null, AuthorizationCheckerInterface $authChecker = null, LoggerInterface $logger = null)
{
$this->argumentNameConverter = $argumentNameConverter;
$this->tokenStorage = $tokenStorage;
$this->authChecker = $authChecker;
$this->language = $language;
$this->trustResolver = $trustResolver;
$this->roleHierarchy = $roleHierarchy;
$this->logger = $logger;
}
public function onKernelControllerArguments(FilterControllerArgumentsEvent $event)
{
$request = $event->getRequest();
if (!$configurations = $request->attributes->get('_security')) {
return;
}
if (null === $this->tokenStorage || null === $this->trustResolver) {
throw new \LogicException('To use the @Security tag, you need to install the Symfony Security bundle.');
}
if (null === $this->tokenStorage->getToken()) {
throw new \LogicException('To use the @Security tag, your controller needs to be behind a firewall.');
}
if (null === $this->language) {
throw new \LogicException('To use the @Security tag, you need to use the Security component 2.4 or newer and install the ExpressionLanguage component.');
}
foreach ($configurations as $configuration) {
if (!$this->language->evaluate($configuration->getExpression(), $this->getVariables($event))) {
if ($statusCode = $configuration->getStatusCode()) {
throw new HttpException($statusCode, $configuration->getMessage());
}
throw new AccessDeniedException($configuration->getMessage() ?: sprintf('Expression "%s" denied access.', $configuration->getExpression()));
}
}
}
private function getVariables(FilterControllerArgumentsEvent $event)
{
$request = $event->getRequest();
$token = $this->tokenStorage->getToken();
if (null !== $this->roleHierarchy) {
$roles = $this->roleHierarchy->getReachableRoles($token->getRoles());
} else {
$roles = $token->getRoles();
}
$variables = ['token'=> $token,'user'=> $token->getUser(),'object'=> $request,'subject'=> $request,'request'=> $request,'roles'=> array_map(function ($role) {
return $role->getRole();
}, $roles),'trust_resolver'=> $this->trustResolver,'auth_checker'=> $this->authChecker,
];
$controllerArguments = $this->argumentNameConverter->getControllerArguments($event);
if ($diff = array_intersect(array_keys($variables), array_keys($controllerArguments))) {
foreach ($diff as $key => $variableName) {
if ($variables[$variableName] === $controllerArguments[$variableName]) {
unset($diff[$key]);
}
}
if ($diff) {
$singular = 1 === \count($diff);
if (null !== $this->logger) {
$this->logger->warning(sprintf('Controller argument%s "%s" collided with the built-in security expression variables. The built-in value%s are being used for the @Security expression.', $singular ?'':'s', implode('", "', $diff), $singular ?'s':''));
}
}
}
return array_merge($controllerArguments, $variables);
}
public static function getSubscribedEvents()
{
return [KernelEvents::CONTROLLER_ARGUMENTS =>'onKernelControllerArguments'];
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Configuration
{
interface ConfigurationInterface
{
public function getAliasName();
public function allowArray();
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Configuration
{
abstract class ConfigurationAnnotation implements ConfigurationInterface
{
public function __construct(array $values)
{
foreach ($values as $k => $v) {
if (!method_exists($this, $name ='set'.$k)) {
throw new \RuntimeException(sprintf('Unknown key "%s" for annotation "@%s".', $k, \get_class($this)));
}
$this->$name($v);
}
}
}
}