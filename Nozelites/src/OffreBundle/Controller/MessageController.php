<?php

namespace OffreBundle\Controller;

use NozelitesBundle\Entity\Membre;
use NozelitesBundle\Entity\Message;
use NozelitesBundle\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;


class MessageController extends Controller
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

    public function consulterMessagesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeMessages = $em->getRepository('NozelitesBundle:Message')->findByIdDestinataire($this->getRealIdAction());
        $messages  = $this->get('knp_paginator')->paginate(
            $listeMessages,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            8/*nbre d'éléments par page*/
        );

        $id = $this->getRealIdAction();

        return $this->render('@Offre/Default/listeMessages.html.twig', array(
            'messages' => $messages,
            'id' => $id,
        ));
    }

    public function consulterMessagesEnvoyesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeMessages = $em->getRepository('NozelitesBundle:Message')->findByIdEmeteur($this->getRealIdAction());
        $messages  = $this->get('knp_paginator')->paginate(
            $listeMessages,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            8/*nbre d'éléments par page*/
        );

        $id = $this->getRealIdAction();

        return $this->render('@Offre/Default/listeMessagesEnvoyes.html.twig', array(
            'messages' => $messages,
            'id' => $id,
        ));
    }

    public function deleteAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository("NozelitesBundle:Message")->find($id);

        $em->remove($message);
        $em->flush();

        return $this->redirectToRoute('message_liste_envoyes');
    }

    public function newAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm('OffreBundle\Form\MessageType', $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $m = new Membre();
            $id = $this->getRealIdAction();
            $m->setIdusr($id); //Id du membre connecté
            $message->setIdemeteur($m);
            $message->setDate(date('Y-m-d'));

            $em = $this->getDoctrine()->getManager();
            $em->merge($message);
            $em->flush();

            return $this->redirectToRoute('message_liste_envoyes');
        }

        return $this->render('@Offre/Default/ajouterMessage.html.twig', array('form' => $form->createView()));
    }

    public function transfererAction(int $id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository("NozelitesBundle:Message")->find($id);
        $message1 = new Message();
        $message1->setIdmessage(-1);
        $message1->setObjet($message->getObjet());
        $message1->setTexte($message->getTexte());
        $message1->setDate(date('Y-m-d'));
        $message1->setIdDestinataire($message->getIdDestinataire());
        $message1->setIdEmeteur($message->getIdEmeteur());

        $form = $this->createForm('OffreBundle\Form\MessageType', $message1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($message1);
            $em1->flush();

            return $this->redirectToRoute('message_liste_envoyes');
        }

        return $this->render('@Offre/Default/ajouterMessage.html.twig', array('form' => $form->createView()));
    }

    public function repondreAction(int $id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository("NozelitesBundle:Message")->find($id);
        $message1 = new Message();
        $message1->setIdmessage(-1);
        $message1->setObjet("Re : ".$message->getObjet());
        $message1->setTexte("");
        $message1->setDate(date('Y-m-d'));
        $message1->setIdDestinataire($message->getIdEmeteur());
        $message1->setIdEmeteur($message->getIdDestinataire());

        $form = $this->createForm('OffreBundle\Form\MessageType', $message1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($message1);
            $em1->flush();

            return $this->redirectToRoute('message_liste_envoyes');
        }

        return $this->render('@Offre/Default/ajouterMessage.html.twig', array('form' => $form->createView()));
    }

    public function consulterOneMessageAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository("NozelitesBundle:Message")->find($id);

        return $this->render('@Offre/Default/oneMessage.html.twig', array('message' => $message));
    }

    public function JsonidbyemailAction($email)
    {
        $em = $this->getDoctrine()->getManager();
        $lastid = $em->getRepository('NozelitesBundle:Membre')->findOneByMail($email)->getIdusr();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lastid);

        return new JsonResponse($formatted);
    }

    public function JsonlastidAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lastid = $em->getRepository('NozelitesBundle:Message')->findOneBy([], ['idmessage' => 'desc'])->getIdmessage();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lastid);

        return new JsonResponse($formatted);
    }

    public function JsonAllAction()
    {
        $messages = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Message")->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($messages);

        return new JsonResponse($formatted);
    }

    public function JsonAddAction(Request $request,$id,$idMembre,$idDest,$objet,$texte)
    {
        $message = new Message();

        $m = new Membre();
        $m->setIdusr($idMembre);

        $m1 = new Membre();
        $m1->setIdusr($idDest);

        if ($id == -1)
        {
            $message->setIdmessage(null);
        }
        else
        {
            $message->setIdmessage($id);
        }

        $message->setIdEmeteur($m);
        $message->setIdDestinataire($m1);
        $message->setObjet($objet);
        $message->setTexte($texte);
        $message->setDate(date('Y-m-d'));


        $em = $this->getDoctrine()->getManager();
        $em->merge($message);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($message);

        return new JsonResponse($formatted);
    }

    public function JsonDeleteAction($id)
    {
        $message = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Message")->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($message);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($message);

        return new JsonResponse($formatted);
    }
}
