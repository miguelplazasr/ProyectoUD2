<?php

namespace Proxies\__CG__\Proyecto\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuarios extends \Proyecto\AdminBundle\Entity\Usuarios implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'id', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'username', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'idCarnet', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'nombres', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'apellidos', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'password', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'salt', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'email', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'estado', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'foto', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'path', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'file', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'isActive', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'roles', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'dependencia', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'ssocial', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'remer', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'pdepor', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'pactivo', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'psalas');
        }

        return array('__isInitialized__', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'id', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'username', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'idCarnet', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'nombres', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'apellidos', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'password', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'salt', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'email', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'estado', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'foto', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'path', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'file', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'isActive', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'roles', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'dependencia', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'ssocial', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'remer', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'pdepor', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'pactivo', '' . "\0" . 'Proyecto\\AdminBundle\\Entity\\Usuarios' . "\0" . 'psalas');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuarios $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCarnet($idCarnet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCarnet', array($idCarnet));

        return parent::setIdCarnet($idCarnet);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCarnet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCarnet', array());

        return parent::getIdCarnet();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombres($nombres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombres', array($nombres));

        return parent::setNombres($nombres);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombres', array());

        return parent::getNombres();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', array($apellidos));

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', array());

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
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
    public function setFoto($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', array($foto));

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', array());

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
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
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function addRole(\Proyecto\AdminBundle\Entity\Roles $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', array($roles));

        return parent::addRole($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole(\Proyecto\AdminBundle\Entity\Roles $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', array($roles));

        return parent::removeRole($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addDependencium(\Proyecto\AdminBundle\Entity\Dependencia $dependencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDependencium', array($dependencia));

        return parent::addDependencium($dependencia);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDependencium(\Proyecto\AdminBundle\Entity\Dependencia $dependencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDependencium', array($dependencia));

        return parent::removeDependencium($dependencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDependencia', array());

        return parent::getDependencia();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', array());

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', array());

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', array());

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function addSsocial(\Proyecto\EnfermeriaBundle\Entity\SeguridadSocial $ssocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSsocial', array($ssocial));

        return parent::addSsocial($ssocial);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSsocial(\Proyecto\EnfermeriaBundle\Entity\SeguridadSocial $ssocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSsocial', array($ssocial));

        return parent::removeSsocial($ssocial);
    }

    /**
     * {@inheritDoc}
     */
    public function getSsocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSsocial', array());

        return parent::getSsocial();
    }

    /**
     * {@inheritDoc}
     */
    public function addRemer(\Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia $remer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRemer', array($remer));

        return parent::addRemer($remer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRemer(\Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia $remer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRemer', array($remer));

        return parent::removeRemer($remer);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemer', array());

        return parent::getRemer();
    }

    /**
     * {@inheritDoc}
     */
    public function setPdepor(\Proyecto\DeportesBundle\Entity\PrestamoDeportes $pdepor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPdepor', array($pdepor));

        return parent::setPdepor($pdepor);
    }

    /**
     * {@inheritDoc}
     */
    public function getPdepor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPdepor', array());

        return parent::getPdepor();
    }

    /**
     * {@inheritDoc}
     */
    public function addPactivo(\Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPactivo', array($pactivo));

        return parent::addPactivo($pactivo);
    }

    /**
     * {@inheritDoc}
     */
    public function removePactivo(\Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePactivo', array($pactivo));

        return parent::removePactivo($pactivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPactivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPactivo', array());

        return parent::getPactivo();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', array());

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function storeFilenameForRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'storeFilenameForRemove', array());

        return parent::storeFilenameForRemove();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', array());

        return parent::removeUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function convertToBlob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'convertToBlob', array());

        return parent::convertToBlob();
    }

    /**
     * {@inheritDoc}
     */
    public function addPsala(\Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPsala', array($psalas));

        return parent::addPsala($psalas);
    }

    /**
     * {@inheritDoc}
     */
    public function removePsala(\Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePsala', array($psalas));

        return parent::removePsala($psalas);
    }

    /**
     * {@inheritDoc}
     */
    public function getPsalas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPsalas', array());

        return parent::getPsalas();
    }

}
