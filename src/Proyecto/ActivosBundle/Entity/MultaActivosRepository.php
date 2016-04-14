<?php

namespace Proyecto\ActivosBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MultaActivosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MultaActivosRepository extends EntityRepository
{
    public function findByUsers($id)
    {

        $em = $this->getEntityManager();

        $consulta = $em->createQuery('
           SELECT m
           FROM ActivosBundle:MultaActivos m
           WHERE m.users = :id
        ');

        $consulta->setParameter('id', $id);

        return $consulta->getResult();
    }
}