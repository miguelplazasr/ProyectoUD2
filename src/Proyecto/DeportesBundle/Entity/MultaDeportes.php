<?php

namespace Proyecto\DeportesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MultaDeportes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\DeportesBundle\Entity\MultaDeportesRepository")
 */
class MultaDeportes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="text")
     */
    private $detalle;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;

    /**
     * @ORM\ManyToOne(targetEntity="Proyecto\AdminBundle\Entity\Usuarios", inversedBy="mdeportes")
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
     * Set detalle
     *
     * @param string $detalle
     * @return MultaDeportes
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return MultaDeportes
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return MultaDeportes
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set users
     *
     * @param \Proyecto\AdminBundle\Entity\Usuarios $users
     * @return MultaDeportes
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
}
