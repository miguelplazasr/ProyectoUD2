<?php

namespace Proyecto\SalonesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Salones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\SalonesBundle\Entity\SalonesRepository")
 */
class Salones
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length = 10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_sala", type="string", length=30)
     */
    private $nombreSala;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="PrestamoSalon", mappedBy="sala")
     */
    private $psalas;

    public function __construct(){
        $this->psalas = new ArrayCollection();
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
     * Set nombreSala
     *
     * @param string $nombreSala
     * @return Salones
     */
    public function setNombreSala($nombreSala)
    {
        $this->nombreSala = $nombreSala;

        return $this;
    }

    /**
     * Get nombreSala
     *
     * @return string
     */
    public function getNombreSala()
    {
        return $this->nombreSala;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Salones
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
     * Add psalas
     *
     * @param \Proyecto\SalonesBundle\Entity\PrestamoSalon $psalas
     * @return Salones
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
     * Set id
     *
     * @param string $id
     * @return Salones
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
