<?php

namespace Proxies\__CG__\FormationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Inscriptions extends \FormationBundle\Entity\Inscriptions implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'id', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'lettreMotivation', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'etat', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'domaineRef', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'formationRef', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'entreprise', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'id', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'lettreMotivation', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'etat', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'domaineRef', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'formationRef', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'entreprise', '' . "\0" . 'FormationBundle\\Entity\\Inscriptions' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Inscriptions $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getLettreMotivation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLettreMotivation', []);

        return parent::getLettreMotivation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLettreMotivation($lettreMotivation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLettreMotivation', [$lettreMotivation]);

        return parent::setLettreMotivation($lettreMotivation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomaineRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomaineRef', []);

        return parent::getDomaineRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomaineRef($domaineRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomaineRef', [$domaineRef]);

        return parent::setDomaineRef($domaineRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormationRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormationRef', []);

        return parent::getFormationRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormationRef($formationRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormationRef', [$formationRef]);

        return parent::setFormationRef($formationRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntreprise', []);

        return parent::getEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntreprise($entreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntreprise', [$entreprise]);

        return parent::setEntreprise($entreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}