<?php

namespace NozelitesBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChasseurRepository extends \Doctrine\ORM\EntityRepository
{

    public function findChasseurByEmail($mail){
        $query=$this->getEntityManager()
            ->createQuery("SELECT chasseur FROM NozelitesBundle:ChasseurTalent chasseur WHERE chasseur.mail = :mail")
            ->setParameter('mail',$mail);
        return $query->getResult();
    }
}