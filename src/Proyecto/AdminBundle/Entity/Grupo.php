<?php

namespace Proyecto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\Group as BaseGroup;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo")
 * @ORM\Entity(repositoryClass="Proyecto\AdminBundle\Entity\GrupoRepository")
 */
class Grupo extends BaseGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $id;


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
     * Set id
     *
     * @param integer $id
     * @return Grupo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function __toString(){
        return $this->getName();
    }
}
