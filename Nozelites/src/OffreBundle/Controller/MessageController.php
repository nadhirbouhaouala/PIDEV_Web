<?php

namespace OffreBundle\Controller;

use NozelitesBundle\Entity\Membre;
use NozelitesBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MessageController extends Controller
{
    public function consulterMessagesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeMessages = $em->getRepository('NozelitesBundle:Message')->findAll();
        $messages  = $this->get('knp_paginator')->paginate(
            $listeMessages,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            8/*nbre d'éléments par page*/
        );

        return $this->render('@Offre/Default/listeMessages.html.twig', array(
            'messages' => $messages,
        ));
    }

    public function consulterMessagesEnvoyesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeMessages = $em->getRepository('NozelitesBundle:Message')->findAll();
        $messages  = $this->get('knp_paginator')->paginate(
            $listeMessages,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            8/*nbre d'éléments par page*/
        );


        return $this->render('@Offre/Default/listeMessagesEnvoyes.html.twig', array(
            'messages' => $messages,
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
            $m->setIdusr(2); //Id du membre connecté
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
}
