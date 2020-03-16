<?php

namespace NozelitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultBackController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Nozelites/back/index.html.twig');
    }
}
