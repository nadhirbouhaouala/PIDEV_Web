<?php

namespace NozelitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListediplomeController extends Controller
{
    public function DeleteDiplomeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $diplome = $em->getRepository("NozelitesBundle:Listediplome")->find($id);
        $em->remove($diplome);
        $em->flush();

        return $this->redirectToRoute("fos_user_profile_show");
    }
}
