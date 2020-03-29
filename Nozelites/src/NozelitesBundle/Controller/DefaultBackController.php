<?php

namespace NozelitesBundle\Controller;
use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\GroupeMembre;
use NozelitesBundle\Entity\Membre;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultBackController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $groupes_f = $em->getRepository('NozelitesBundle:Groupe')->findBy(array('autorisation'=>0));

        $groupes_o = $em->getRepository('NozelitesBundle:Groupe')->findBy(array('autorisation'=>1));

        return $this->render('@Nozelites/Back/index.html.twig',
        //return $this->render('@Nozelites/Back/AdminGroupes.html.twig',
            array('groupes_o' => sizeof($groupes_o),'groupes_f' => sizeof($groupes_f))
        );
    }
}
