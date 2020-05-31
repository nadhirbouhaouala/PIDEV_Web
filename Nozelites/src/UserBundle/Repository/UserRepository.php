<?php

namespace UserBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function findUserByName($name){
        $query=$this->getEntityManager()
            ->createQuery("SELECT user FROM UserBundle:User user WHERE user.nom = :recherche OR user.prenom = :recherche")
            ->setParameter('recherche',$name);
        return $query->getResult();
    }

    public function findUserByFormation($formation){
        $query=$this->getEntityManager()
            ->createQuery("Select user from UserBundle:User user INNER JOIN NozelitesBundle:Formation formation WITH user.id = formation.idMembre where formation.titre = :recherche")
        ->setParameter('recherche',$formation);

        return $query->getResult();
    }



}
