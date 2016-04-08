<?php

namespace Proyecto\ActivosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ElementosActivos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ActivosBundle\Entity\ElementosActivosRepository")
 */
class ElementosActivos
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="StockActivo", mappedBy="eactivo", cascade={"persist","remove"})
     */
    private $sactivo;


    public function __construct(){
        $this->sactivo = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return ElementosActivos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ElementosActivos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return ElementosActivos
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Add sactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\StockActivo $sactivo
     * @return ElementosActivos
     */
    public function addSactivo(\Proyecto\ActivosBundle\Entity\StockActivo $sactivo)
    {
        $this->sactivo[] = $sactivo;

        return $this;
    }

    /**
     * Remove sactivo
     *
     * @param \Proyecto\ActivosBundle\Entity\StockActivo $sactivo
     */
    public function removeSactivo(\Proyecto\ActivosBundle\Entity\StockActivo $sactivo)
    {
        $this->sactivo->removeElement($sactivo);
    }

    /**
     * Get sactivo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSactivo()
    {
        return $this->sactivo;
    }
}
