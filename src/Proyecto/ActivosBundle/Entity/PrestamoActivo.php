<?php

namespace Proyecto\ActivosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrestamoActivo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ActivosBundle\Entity\PrestamoActivoRepository")
 * @ORM\HasLifeCycleCallbacks()
 */
class PrestamoActivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrega", type="datetime")
     */
    private $fechaEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_devolucion", type="datetime")
     */
    private $fechaDevolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity="StockActivo", inversedBy="pactivo")
     * @ORM\JoinColumn(name="stock_id", referencedColumnName="id")
     */
    private $sactivo;

    /**
     * @ORM\ManyToOne(targetEntity="Proyecto\AdminBundle\Entity\Usuarios", inversedBy="pactivo")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $users;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return PrestamoActivo
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set fechaDevolucion
     *
     * @param \DateTime $fechaDevolucion
     * @return PrestamoActivo
     */
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }

    /**
     * Get fechaDevolucion
     *
     * @return \DateTime
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return PrestamoActivo
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set sactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\StockActivo $sactivo
     * @return PrestamoActivo
     */
    public function setSactivo(\Proyecto\ActivosBundle\Entity\StockActivo $sactivo = null)
    {
        $this->sactivo = $sactivo;

        return $this;
    }

    /**
     * Get sactivo
     *
     * @return \Proyecto\ActivosBundle\Entity\StockActivo
     */
    public function getSactivo()
    {
        return $this->sactivo;
    }

    /**
     * Set users
     *
     * @param \Proyecto\AdminBundle\Entity\Usuarios $users
     * @return PrestamoActivo
     */
    public function setUsers(\Proyecto\AdminBundle\Entity\Usuarios $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Proyecto\AdminBundle\Entity\Usuarios
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @ORM\PrePersist()
     */
    public function setCrearFecha(){
        $this->fechaEntrega = new \DateTime();
        $this->fechaDevolucion = new \DateTime('+2 hour');
    }
}
