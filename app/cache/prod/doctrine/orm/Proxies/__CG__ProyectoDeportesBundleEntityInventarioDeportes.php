<?php

namespace Proxies\__CG__\Proyecto\DeportesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InventarioDeportes extends \Proyecto\DeportesBundle\Entity\InventarioDeportes implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'id', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'fecha', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'estado', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'cantidad', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'elemendepor', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'pdepor');
        }

        return array('__isInitialized__', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'id', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'fecha', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'estado', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'cantidad', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'elemendepor', '' . "\0" . 'Proyecto\\DeportesBundle\\Entity\\InventarioDeportes' . "\0" . 'pdepor');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InventarioDeportes $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCantidad($cantidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantidad', array($cantidad));

        return parent::setCantidad($cantidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantidad', array());

        return parent::getCantidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setElemendepor(\Proyecto\DeportesBundle\Entity\ElementosDeportes $elemendepor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElemendepor', array($elemendepor));

        return parent::setElemendepor($elemendepor);
    }

    /**
     * {@inheritDoc}
     */
    public function getElemendepor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElemendepor', array());

        return parent::getElemendepor();
    }

    /**
     * {@inheritDoc}
     */
    public function setCrearFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCrearFecha', array());

        return parent::setCrearFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function addPdepor(\Proyecto\DeportesBundle\Entity\PrestamoDeportes $pdepor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPdepor', array($pdepor));

        return parent::addPdepor($pdepor);
    }

    /**
     * {@inheritDoc}
     */
    public function removePdepor(\Proyecto\DeportesBundle\Entity\PrestamoDeportes $pdepor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePdepor', array($pdepor));

        return parent::removePdepor($pdepor);
    }

    /**
     * {@inheritDoc}
     */
    public function getPdepor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPdepor', array());

        return parent::getPdepor();
    }

}
