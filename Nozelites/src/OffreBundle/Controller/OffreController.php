<?php

namespace OffreBundle\Controller;

use NozelitesBundle\Entity\ChasseurTalent;
use NozelitesBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NozelitesBundle\Entity\Offre;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class OffreController extends Controller
{

    /**
     * @return integer
     */
    public function getRealIdAction()
    {
        $user = $this->getUser();
        $mail = $user->getEmail();

        if (in_array("ROLE_MEMBRE", $user->getRoles())) {

            $em = $this->getDoctrine()->getManager();
            $membre = $em->getRepository('NozelitesBundle:Membre')->findOneBymail($mail);
            return $membre->getIdusr();

        }
        elseif (in_array("ROLE_CHASSEUR", $user->getRoles())) {

            $em = $this->getDoctrine()->getManager();
            $chasseur = $em->getRepository('NozelitesBundle:ChasseurTalent')->findOneBymail($mail);
            return $chasseur->getIdusr();
        }
    }

    public function consulterOffresAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('NozelitesBundle:Offre')->findByIdemetteur($this->getRealIdAction());

        $id = $this->getRealIdAction();

        return $this->render('@Offre/Default/listeOffres.html.twig', array(
            'offres' => $offres,
            'id' => $id,
        ));
    }

    public function consulterOffresBackAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('NozelitesBundle:Offre')->findAll();

        return $this->render('@Offre/Default/listeOffresBack.html.twig', array(
            'offres' => $offres,
        ));
    }

    public function consulterOffresMembreAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('NozelitesBundle:Offre')->findByIdrecepteur($this->getRealIdAction());

        $id = $this->getRealIdAction();

        return $this->render('@Offre/Default/listeOffresMembre.html.twig', array(
            'offres' => $offres,
            'id' => $id,
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
            $id = $this->getRealIdAction();
            $c->setIdusr($id); //Id du chasseur connecté
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

    public function accepterOffreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository("NozelitesBundle:Offre")->find($id);

        $offre->setEtat("Acceptée");
        $em->flush();

        return $this->redirectToRoute('offre_liste_membre');
    }

    public function refuserOffreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository("NozelitesBundle:Offre")->find($id);

        $offre->setEtat("Refusée");
        $em->flush();

        return $this->redirectToRoute('offre_liste_membre');
    }

    public function JsonAllAction()
    {
        $offres = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Offre")->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offres);

        return new JsonResponse($formatted);
    }

    public function JsonAccepterAction($id)
    {
        $offre = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Offre")->find($id);

        $offre->setEtat("Acceptée");

        $em = $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }

    public function JsonRefuserAction($id)
    {
        $offre = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Offre")->find($id);

        $offre->setEtat("Refusée");

        $em = $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }

}
