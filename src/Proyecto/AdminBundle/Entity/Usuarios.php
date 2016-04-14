<?php

namespace Proyecto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Proyecto\AdminBundle\Entity\Dependencia;
use Proyecto\AdminBundle\Entity\Roles;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\AdminBundle\Entity\UsuariosRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Usuarios implements AdvancedUserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="idCarnet", type="string", length=255)
     */
    private $idCarnet;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="blob")
     */
    private $foto;

    /**
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
     *
     */
    private $roles;

    /**
     * @ORM\ManyToMany(targetEntity="Dependencia", inversedBy="users")
     */
    private $dependencia;

    /**
     * @ORM\OneToMany(targetEntity="Proyecto\EnfermeriaBundle\Entity\SeguridadSocial", mappedBy="users")
     */
    private $ssocial;

    /**
     *
     * @ORM\OneToMany(targetEntity="Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia", mappedBy="users")
     *
     */
    private $remer;

    /**
     * @ORM\OneToOne(targetEntity="Proyecto\DeportesBundle\Entity\PrestamoDeportes", mappedBy="users")
     * @Assert\Valid
     */
    private $pdepor;

    /**
     * @ORM\OnetoMany(targetEntity="Proyecto\ActivosBundle\Entity\PrestamoActivo", mappedBy="users")
     * @Assert\Valid
     */
    private $pactivo;

    /**
     * @ORM\OneToMany(targetEntity="Proyecto\SalonesBundle\Entity\PrestamoSalon", mappedBy="users")
     * @Assert\valid
     */
    private $psalas;

    /**
     * @ORM\OneToMany(targetEntity="Proyecto\DeportesBundle\Entity\MultaDeportes", mappedBy="users")
     * @Assert\valid
     */
    private $mdeportes;

    /**
     * @ORM\OneToMany(targetEntity="Proyecto\ActivosBundle\Entity\MultaActivos", mappedBy="users")
     * @Assert\valid
     */
    private $mactivos;


    public function __construct(){
        $this->roles = new ArrayCollection();
        $this->dependencia = new ArrayCollection();
        $this->ssocial = new ArrayCollection();
        $this->remer = new ArrayCollection();
        $this->pactivo = new ArrayCollection();
        $this->psalas = new ArrayCollection();
        $this->mdeportes = new ArrayCollection();
        $this->mactivos = new ArrayCollection();
    }

    public function __toString(){
        return $this->getId();
    }


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set idCarnet
     *
     * @param string $idCarnet
     * @return Usuarios
     */
    public function setIdCarnet($idCarnet)
    {
        $this->idCarnet = $idCarnet;

        return $this;
    }

    /**
     * Get idCarnet
     *
     * @return string
     */
    public function getIdCarnet()
    {
        return $this->idCarnet;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuarios
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuarios
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Usuarios
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Usuarios
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Usuarios
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Usuarios
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Usuarios
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        if(is_file($this->getAbsolutePath())){
            $this->temp = $this->getAbsolutePath();
        }else{
            $this->path = 'initial';
        }
    }

    /**
     * Add roles
     *
     * @param \Proyecto\AdminBundle\Entity\Roles $roles
     * @return Usuarios
     */
    public function addRole(Roles $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Proyecto\AdminBundle\Entity\Roles $roles
     */
    public function removeRole(Roles $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Add dependencia
     *
     * @param \Proyecto\AdminBundle\Entity\Dependencia $dependencia
     * @return Usuarios
     */
    public function addDependencium(Dependencia $dependencia)
    {
        $this->dependencia[] = $dependencia;

        return $this;
    }

    /**
     * Remove dependencia
     *
     * @param \Proyecto\AdminBundle\Entity\Dependencia $dependencia
     */
    public function removeDependencium(Dependencia $dependencia)
    {
        $this->dependencia->removeElement($dependencia);
    }

    /**
     * Get dependencia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    public function eraseCredentials(){
    }

    public function isAccountNonExpired(){
        return true;
    }

    public function isAccountNonLocked(){
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return true;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
        ));
    }

    public function unserialize($serialized) {
        list(
            $this->id,
            )= unserialize($serialized);
    }



    /**
     * Add ssocial
     *
     * @param \Proyecto\EnfermeriaBundle\Entity\SeguridadSocial $ssocial
     * @return Usuarios
     */
    public function addSsocial(\Proyecto\EnfermeriaBundle\Entity\SeguridadSocial $ssocial)
    {
        $this->ssocial[] = $ssocial;

        return $this;
    }

    /**
     * Remove ssocial
     *
     * @param \Proyecto\EnfermeriaBundle\Entity\SeguridadSocial $ssocial
     */
    public function removeSsocial(\Proyecto\EnfermeriaBundle\Entity\SeguridadSocial $ssocial)
    {
        $this->ssocial->removeElement($ssocial);
    }

    /**
     * Get ssocial
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSsocial()
    {
        return $this->ssocial;
    }

    /**
     * Add remer
     *
     * @param \Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia $remer
     * @return Usuarios
     */
    public function addRemer(\Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia $remer)
    {
        $this->remer[] = $remer;

        return $this;
    }

    /**
     * Remove remer
     *
     * @param \Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia $remer
     */
    public function removeRemer(\Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia $remer)
    {
        $this->remer->removeElement($remer);
    }

    /**
     * Get remer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRemer()
    {
        return $this->remer;
    }

    /**
     * Set pdepor
     *
     * @param \Proyecto\DeportesBundle\Entity\PrestamoDeportes $pdepor
     * @return Usuarios
     */
    public function setPdepor(\Proyecto\DeportesBundle\Entity\PrestamoDeportes $pdepor = null)
    {
        $this->pdepor = $pdepor;

        return $this;
    }

    /**
     * Get pdepor
     *
     * @return \Proyecto\DeportesBundle\Entity\PrestamoDeportes
     */
    public function getPdepor()
    {
        return $this->pdepor;
    }

    /**
     * Add pactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo
     * @return Usuarios
     */
    public function addPactivo(\Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo)
    {
        $this->pactivo[] = $pactivo;

        return $this;
    }

    /**
     * Remove pactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo
     */
    public function removePactivo(\Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo)
    {
        $this->pactivo->removeElement($pactivo);
    }

    /**
     * Get pactivo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPactivo()
    {
        return $this->pactivo;
    }

    public function getAbsolutePath(){
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->id.'.'.$this->path;
    }

    public function getWebPath(){
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->id.'.'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // la ruta absoluta del directorio donde se deben
        // guardar los archivos cargados
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }


    private function getUploadDir()
    {
        // se deshace del __DIR__ para no meter la pata
        // al mostrar el documento/imagen cargada en la vista.
        return 'uploads/documents/usuarios';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload(){
        if(null !== $this->getFile()){
            $this->path = $this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload(){

        if(null === $this->getFile()){
            return;
        }

        if(isset($this->temp)){
            unlink($this->temp);
            $this->temp = null;
        }

        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->id.'.'.$this->getFile()->guessExtension()
        );

        $this->setFile(null);
    }


    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->temp = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload(){
        if(isset($this->temp)){
            unlink($this->temp);
        }
    }

    /**
     *
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function convertToBlob(){
        $this->setFoto($this->getFile());
    }


    /**
     * Add psalas
     *
     * @param \Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas
     * @return Usuarios
     */
    public function addPsala(\Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas)
    {
        $this->psalas[] = $psalas;

        return $this;
    }

    /**
     * Remove psalas
     *
     * @param \Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas
     */
    public function removePsala(\Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas)
    {
        $this->psalas->removeElement($psalas);
    }

    /**
     * Get psalas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPsalas()
    {
        return $this->psalas;
    }

    /**
     * Add mdeportes
     *
     * @param \Proyecto\DeportesBundle\Entity\MultaDeportes $mdeportes
     * @return Usuarios
     */
    public function addMdeporte(\Proyecto\DeportesBundle\Entity\MultaDeportes $mdeportes)
    {
        $this->mdeportes[] = $mdeportes;

        return $this;
    }

    /**
     * Remove mdeportes
     *
     * @param \Proyecto\DeportesBundle\Entity\MultaDeportes $mdeportes
     */
    public function removeMdeporte(\Proyecto\DeportesBundle\Entity\MultaDeportes $mdeportes)
    {
        $this->mdeportes->removeElement($mdeportes);
    }

    /**
     * Get mdeportes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMdeportes()
    {
        return $this->mdeportes;
    }

    /**
     * Add mactivos
     *
     * @param \Proyecto\ActivosBundle\Entity\MultaActivos $mactivos
     * @return Usuarios
     */
    public function addMactivo(\Proyecto\ActivosBundle\Entity\MultaActivos $mactivos)
    {
        $this->mactivos[] = $mactivos;

        return $this;
    }

    /**
     * Remove mactivos
     *
     * @param \Proyecto\ActivosBundle\Entity\MultaActivos $mactivos
     */
    public function removeMactivo(\Proyecto\ActivosBundle\Entity\MultaActivos $mactivos)
    {
        $this->mactivos->removeElement($mactivos);
    }

    /**
     * Get mactivos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMactivos()
    {
        return $this->mactivos;
    }
}
