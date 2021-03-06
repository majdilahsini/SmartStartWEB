<?php

namespace Proxies\__CG__\OffreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Offres extends \OffreBundle\Entity\Offres implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'id', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'titre', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'datePublication', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'niveauEtude', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'salaire', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'photo', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'entreprise', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'domaine', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'langueRef', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'typePost', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'skill1', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'skill2', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'skill3'];
        }

        return ['__isInitialized__', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'id', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'titre', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'datePublication', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'niveauEtude', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'salaire', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'photo', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'entreprise', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'domaine', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'langueRef', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'typePost', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'skill1', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'skill2', '' . "\0" . 'OffreBundle\\Entity\\Offres' . "\0" . 'skill3'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Offres $proxy) {
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
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePublication', []);

        return parent::getDatePublication();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePublication($datePublication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePublication', [$datePublication]);

        return parent::setDatePublication($datePublication);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveauEtude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveauEtude', []);

        return parent::getNiveauEtude();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveauEtude($niveauEtude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveauEtude', [$niveauEtude]);

        return parent::setNiveauEtude($niveauEtude);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalaire', []);

        return parent::getSalaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalaire($salaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalaire', [$salaire]);

        return parent::setSalaire($salaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
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
    public function getDomaine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomaine', []);

        return parent::getDomaine();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomaine($domaine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomaine', [$domaine]);

        return parent::setDomaine($domaine);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangueRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangueRef', []);

        return parent::getLangueRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setLangueRef($langueRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangueRef', [$langueRef]);

        return parent::setLangueRef($langueRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypePost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypePost', []);

        return parent::getTypePost();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypePost($typePost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypePost', [$typePost]);

        return parent::setTypePost($typePost);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkill1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkill1', []);

        return parent::getSkill1();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkill1($skill1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkill1', [$skill1]);

        return parent::setSkill1($skill1);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkill2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkill2', []);

        return parent::getSkill2();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkill2($skill2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkill2', [$skill2]);

        return parent::setSkill2($skill2);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkill3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkill3', []);

        return parent::getSkill3();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkill3($skill3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkill3', [$skill3]);

        return parent::setSkill3($skill3);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
