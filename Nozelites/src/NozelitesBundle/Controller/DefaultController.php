<?php

namespace NozelitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Nozelites/front/index.html.twig');
    }
}
