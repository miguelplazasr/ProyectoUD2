<?php

namespace Proyecto\SalonesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrestamoSalon
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\SalonesBundle\Entity\PrestamoSalonRepository")
 * @ORM\HasLifecycleCallbacks
 */
class PrestamoSalon
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
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=20)
     */
    private $horario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime")
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text")
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="Salones", inversedBy="psalas")
     * @ORM\JoinColumn(name="salon_id", referencedColumnName="id")
     */
    private $sala;

    /**
     * @ORM\ManyToOne(targetEntity="Proyecto\AdminBundle\Entity\Usuarios", inversedBy="psalas")
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return PrestamoSalon
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return PrestamoSalon
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return PrestamoSalon
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set sala
     *
     * @param \Proyecto\SalonesBundle\Entity\Salones $sala
     * @return PrestamoSalon
     */
    public function setSala(\Proyecto\SalonesBundle\Entity\Salones $sala = null)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return \Proyecto\SalonesBundle\Entity\Salones
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set users
     *
     * @param \Proyecto\AdminBundle\Entity\Usuarios $users
     * @return PrestamoSalon
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
     * Set horario
     *
     * @param string $horario
     * @return PrestamoSalon
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function setHoras(){

        $horas = $this->getHorario();

        switch($horas){
            case "1":
                $this->getFechaInicio()->setTime(6,0,0);
                $this->getFechaFin()->setTime(8,0,0);
                break;
            case "2":
                $this->getFechaInicio()->setTime(8,0,0);
                $this->getFechaFin()->setTime(10,0,0);
                break;
            case "3":
                $this->getFechaInicio()->setTime(10,0,0);
                $this->getFechaFin()->setTime(12,0,0);
                break;
            case "4":
                $this->getFechaInicio()->setTime(12,0,0);
                $this->getFechaFin()->setTime(14,0,0);
                break;
            case "5":
                $this->getFechaInicio()->setTime(14,0,0);
                $this->getFechaFin()->setTime(16,0,0);
                break;
            case "6":
                $this->getFechaInicio()->setTime(16,0,0);
                $this->getFechaFin()->setTime(18,0,0);
                break;
            case "7":
                $this->getFechaInicio()->setTime(18,0,0);
                $this->getFechaFin()->setTime(20,0,0);
                break;
            case "8":
                $this->getFechaInicio()->setTime(20,0,0);
                $this->getFechaFin()->setTime(22,0,0);
                break;
        }

    }
}
