<?php

namespace Proxies\__CG__\Proyecto\SalonesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PrestamoSalon extends \Proyecto\SalonesBundle\Entity\PrestamoSalon implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'id', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'horario', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'fechaInicio', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'fechaFin', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'observaciones', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'sala', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'users');
        }

        return array('__isInitialized__', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'id', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'horario', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'fechaInicio', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'fechaFin', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'observaciones', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'sala', '' . "\0" . 'Proyecto\\SalonesBundle\\Entity\\PrestamoSalon' . "\0" . 'users');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PrestamoSalon $proxy) {
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
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', array($fechaInicio));

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', array());

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFin($fechaFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFin', array($fechaFin));

        return parent::setFechaFin($fechaFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFin', array());

        return parent::getFechaFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', array($observaciones));

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', array());

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setSala(\Proyecto\SalonesBundle\Entity\Salones $sala = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSala', array($sala));

        return parent::setSala($sala);
    }

    /**
     * {@inheritDoc}
     */
    public function getSala()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSala', array());

        return parent::getSala();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsers(\Proyecto\AdminBundle\Entity\Usuarios $users = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsers', array($users));

        return parent::setUsers($users);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', array());

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setHorario($horario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHorario', array($horario));

        return parent::setHorario($horario);
    }

    /**
     * {@inheritDoc}
     */
    public function getHorario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHorario', array());

        return parent::getHorario();
    }

    /**
     * {@inheritDoc}
     */
    public function setHoras()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoras', array());

        return parent::setHoras();
    }

}