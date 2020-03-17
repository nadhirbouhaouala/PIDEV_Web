<?php

namespace NozelitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultFrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Nozelites/front/index.html.twig');
    }
    public function membregroupesAction()
    {
        return $this->render('@Nozelites/Front/MembreGroupes.html.twig');
    }
    public function membregroupesajouterAction()
    {
        return $this->render('@Nozelites/Front/MembreGroupesAjouter.html.twig');
    }
}
