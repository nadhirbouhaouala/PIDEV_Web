<?php

namespace OffreBundle\Repository;

/**
 * OffreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OffreRepository extends \Doctrine\ORM\EntityRepository
{

    public function findOneBymail($mail){
        $query = $this->getEntityManager()
            ->createQuery("SELECT m FROM NozelitesBundle:Membre m WHERE m.mail
            LIKE :mail")
            ->setParameter('mail','%'.$mail.'%');

        return $query->getResult();
    }

    public function findOneByemail($mail){
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM NozelitesBundle:ChasseurTalent c WHERE c.mail
            LIKE :mail")
            ->setParameter('mail','%'.$mail.'%');

        return $query->getResult();
    }

}
