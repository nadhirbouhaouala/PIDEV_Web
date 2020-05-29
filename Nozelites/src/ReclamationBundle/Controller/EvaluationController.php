<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\TabReclamation;
use ReclamationBundle\Entity\Evaluation;
use ReclamationBundle\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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

                return $this->redirectToRoute('reclamation_show');
            }

        return $this->render('@Reclamation/Front/AjoutNote.html.twig',array('R' => $IdR));
    }

   /* function AjoutNoteTestAction(Request $request,$id)
    {
        $reclamation=$this->getDoctrine()->getRepository(Evaluation::class)
            ->findBy(array('idR'=>$id));

        if(sizeof($reclamation)==0)
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
                $Evaluation->setRating($request->get('rating'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($Evaluation);
                $em->flush();

                return $this->redirectToRoute('reclamation_show');
            }

            return $this->render('@Reclamation/Front/AjoutNote.html.twig',array('R' => $IdR));

        }

        return $this->redirectToRoute("reclamation_show");
    }*/

   function AjoutNoteTestAction(Request $request,$id)
   {
       $reclamation = $this->getDoctrine()->getRepository(Evaluation::class)
           ->findBy(array('idR' => $id));

       if (sizeof($reclamation) == 0) {

           $Evaluation = new Evaluation();

           $form = $this->createForm('ReclamationBundle\Form\EvaluationType', $Evaluation);
           $form = $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
               $IdR = $em->getRepository(Reclamation::class)->find($id);
               $Evaluation->setIdR($IdR);


               $em->persist($Evaluation);
               $em->flush();

               return $this->redirectToRoute('reclamation_show', array('id' => $id));
           }

           return $this->render('@Reclamation/Front/AjoutNote.html.twig', array('R' => $Evaluation, 'f' => $form->createView(),));

       }

       return $this->redirectToRoute('reclamation_show', array('id' => $id));
   }








    function AfficherNoteAction($id){


        $reclamation=$this->getDoctrine()->getRepository(Reclamation::class)
            ->find($id);

        $Evaluation=$this->getDoctrine()
            ->getRepository(Evaluation::class)
            ->findBy(array('idR'=>$reclamation));

        return $this->render('@Reclamation/Back/AfficherNote.html.twig', array('Eval' => $Evaluation,'r' => $reclamation));

    }

    public function JsonAddAction($id_r,$rating)
    {

        $em = $this->getDoctrine()->getManager();

        $evaluation = new evaluation();

        $evaluation->setIdR($em->getRepository("ReclamationBundle:Reclamation")->find($id_r));


        $evaluation->setRating($rating);
        $em->persist($evaluation);
        $em->flush();



        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evaluation);

        return new JsonResponse($formatted);
    }


}