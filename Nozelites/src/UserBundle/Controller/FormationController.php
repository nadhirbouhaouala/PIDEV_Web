<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationController extends Controller
{
    public function supprimerFormationAction(int $id){
        $em = $this->getDoctrine()->getManager();
        $personne = $em->getRepository("NozelitesBundle:Formation")->find($id);

        $em->remove($personne);
        $em->flush(); //Maj de la base

        return $this->redirectToRoute("fos_user_profile_edit");
    }
}