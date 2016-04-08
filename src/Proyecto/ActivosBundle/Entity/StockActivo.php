<?php

namespace Proyecto\ActivosBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * StockActivo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ActivosBundle\Entity\StockActivoRepository")
 */
class StockActivo
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity="ElementosActivos", inversedBy="sactivo")
     * @ORM\JoinColumn(name="elemento_id", referencedColumnName="id")
     */
    private $eactivo;

    /**
     * @ORM\OneToMany(targetEntity="PrestamoActivo", mappedBy="sactivo")
     */
    private $pactivo;

    public function __construct(){
        $this->pactivo = new ArrayCollection();
    }


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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return StockActivo
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
     * Set id
     *
     * @param string $id
     * @return StockActivo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set eactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\ElementosActivos $eactivo
     * @return StockActivo
     */
    public function setEactivo(\Proyecto\ActivosBundle\Entity\ElementosActivos $eactivo = null)
    {
        $this->eactivo = $eactivo;

        return $this;
    }

    /**
     * Get eactivo
     *
     * @return \Proyecto\ActivosBundle\Entity\ElementosActivos
     */
    public function getEactivo()
    {
        return $this->eactivo;
    }

    /**
     * Add pactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\PrestamoActivo $pactivo
     * @return StockActivo
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
}
