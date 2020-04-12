<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\TabReclamation;
use ReclamationBundle\Entity\Evaluation;
use ReclamationBundle\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class EvaluationController extends Controller
{
//    public function affichageAction()
//    {
//        // return $this->render('@Club/Default/read.html.twig');
//        //Fetching Objects (Clubs) from the Database
//        $Evaluations=$this->getDoctrine()->getManager()->getRepository(Evaluation::class)->findAll();
//        //add the list of clubs to the render function as input to be sent to the view
//        return $this->render('@Reclamation/Evaluation/affichage.html.twig', array('Evaluations'=>$Evaluations ));
//
//    }
//    public function affichage1Action()
//    {
//        // return $this->render('@Club/Default/read.html.twig');
//        //Fetching Objects (Clubs) from the Database
//        $Evaluations=$this->getDoctrine()->getManager()->getRepository(Evaluation::class)->findAll();
//        //add the list of clubs to the render function as input to be sent to the view
//        return $this->render('@Reclamation/Evaluation/affichage1.html.twig', array('Evaluations'=>$Evaluations ));
//
//    }
    public function AjoutNoteAction(Request $request,$id)
    {

        $Evaluation = new Evaluation();
        $IdR=$this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->find($id);
        $form = $this->createForm(EvaluationType::class,$Evaluation);
        $form = $form->handleRequest($request);

            if ($request->getMethod() == Request::METHOD_POST) {
                $Evaluation->setIdR($IdR);
                $Evaluation->setNote($request->get('note'));

                $em = $this->getDoctrine()->getManager();
                $em->persist($Evaluation);
                $em->flush();

                return $this->redirectToRoute('');
            }

        return $this->render('@Reclamation/Front/AjoutNote.html.twig',array('R' => $IdR));
    }

    function AjoutNoteTestAction($id)
    {
        $reclamation=$this->getDoctrine()->getRepository(Evaluation::class)
            ->findBy(array('idR'=>$id));

        if(sizeof($reclamation)==0)
        {
            return $this->redirectToRoute("AjouterNoteTest");
        }

        return $this->redirectToRoute("reclamation_show");
    }

    function AfficherNoteAction($id){


        $reclamation=$this->getDoctrine()->getRepository(Reclamation::class)
            ->find($id);

        $Evaluation=$this->getDoctrine()
            ->getRepository(Evaluation::class)
            ->findBy(array('idR'=>$reclamation));

        return $this->render('@Reclamation/Back/AfficherNote.html.twig', array('Eval' => $Evaluation,'r' => $reclamation));

    }


}