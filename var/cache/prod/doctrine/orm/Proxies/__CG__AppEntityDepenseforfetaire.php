<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Depenseforfetaire extends \App\Entity\Depenseforfetaire implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'qte', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'idAvoir2', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'idTyper'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'qte', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'idAvoir2', '' . "\0" . 'App\\Entity\\Depenseforfetaire' . "\0" . 'idTyper'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Depenseforfetaire $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function setId(int $id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getQte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQte', []);

        return parent::getQte();
    }

    /**
     * {@inheritDoc}
     */
    public function setQte($qte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQte', [$qte]);

        return parent::setQte($qte);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAvoir2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAvoir2', []);

        return parent::getIdAvoir2();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAvoir2(\App\Entity\Fichefrais $idAvoir2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAvoir2', [$idAvoir2]);

        return parent::setIdAvoir2($idAvoir2);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTyper()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTyper', []);

        return parent::getIdTyper();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTyper(\App\Entity\Type $idTyper)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTyper', [$idTyper]);

        return parent::setIdTyper($idTyper);
    }

}
