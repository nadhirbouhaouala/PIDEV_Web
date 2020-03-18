<?php

namespace NozelitesBundle\Repository;

class GroupeMembreRepository extends \Doctrine\ORM\EntityRepository
{
    public function getInvitations($idMembre)
    {	$query=$this->getEntityManager()
        ->createQuery("SELECT gm FROM NozelitesBundle:GroupeMembre gm WHERE (gm.id_membre LIKE :idm and gm.etat = 'invitation')")
        ->setParameter('idm','%'.$idMembre.'%');
        return $query->getResult();	}
}