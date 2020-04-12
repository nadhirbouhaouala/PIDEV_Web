<?php

namespace OffreBundle\Controller;

use NozelitesBundle\Entity\ChasseurTalent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NozelitesBundle\Entity\Offre;
use Symfony\Component\HttpFoundation\Request;

class OffreController extends Controller
{
    public function consulterOffresAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('NozelitesBundle:Offre')->findAll();

        return $this->render('@Offre/Default/listeOffres.html.twig', array(
            'offres' => $offres,
        ));
    }

    public function deleteAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository("NozelitesBundle:Offre")->find($id);

        $em->remove($offre);
        $em->flush();

        return $this->redirectToRoute('offre_liste');
    }

    public function newAction(Request $request)
    {
        $offre = new Offre();
        $form = $this->createForm('OffreBundle\Form\OffreType', $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $c = new ChasseurTalent();
            $c->setIdusr(2); //Id du chasseur connecté
            $offre->setIdemetteur($c);
            $offre->setEtat("En attente");
            $offre->setDate(date('Y-m-d'));

            $em = $this->getDoctrine()->getManager();
            $em->merge($offre);
            $em->flush();

            return $this->redirectToRoute('offre_liste');
        }

        return $this->render('@Offre/Default/ajouterOffre.html.twig', array('form' => $form->createView()));
    }

    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository("NozelitesBundle:Offre")->find($id);

        $form = $this->createForm('OffreBundle\Form\OffreType', $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('offre_liste');
        }

        return $this->render('@Offre/Default/modifierOffre.html.twig', array('form' => $form->createView()));
    }
}
