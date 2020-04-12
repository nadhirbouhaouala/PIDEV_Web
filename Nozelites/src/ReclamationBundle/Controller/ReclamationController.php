<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Evaluation;
use ReclamationBundle\Entity\Evenement;
use ReclamationBundle\Entity\Groupe;
use ReclamationBundle\Entity\Publication;
use ReclamationBundle\Entity\Membre;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Form\ReclamationType;
use ReclamationBundle\Form\UpdateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReclamationController extends Controller
{

    public function AjouterAction(Request $request)
    { // $id_membre_actif = 9;
        $reclamation = new Reclamation();
        $em = $this->getDoctrine()->getManager();

     //   $membres = $em->getRepository('ReclamationBundle:Reclamation')
       //     ->findBy(array('idEmeteur'=>$id_membre_actif));

        $form = $this->createForm('ReclamationBundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idcible=$reclamation->getIdCible();
          //  $groups = $em->getRepository('ReclamationBundle:Groupe')
           //     ->find($idcible);
            $idmemb=$reclamation->getIdEmeteur();
            $membres = $em->getRepository('ReclamationBundle:Membre')
               ->find($idmemb);
           // $groups = $em->getRepository('ReclamationBundle:Evenement')
              //  ->find($idcible);
            //$reclamation->setIdEmeteur($membre);
           $reclamation->setIdEmeteur($membres);
            $reclamation->setIdCible(5);
//            $idG=$reclamation->getIdCible();
//            $groupes = $em->getRepository('ReclamationBundle:Groupe')
//                ->find($idG);
//            $reclamation->setIdCible($groupes);

            $reclamation->setEtat(0);
            $reclamation->setDate(new  \DateTime("now + 1 hour"));
            $em->persist($reclamation);
            $em->flush();

$mail="mohamedkheireddine.bairam@esprit.tn";
  $msg="On a bien recu votre Reclamation";
                $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
           $mailer = \Swift_Mailer::newInstance($transport);
                                    $message = \Swift_Message::newInstance()
                                        ->setSubject('Validation')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

            $this->get('mailer')->send($message);


 //   dump($id_membre_actif);
            return $this->redirectToRoute('reclamation_show', array('idrecl' => $reclamation->getIdrecl()));
        }

        return $this->render('@Reclamation/Front/AjouterReclamation.html.twig', array(
            'reclamation' => $reclamation,
            'f' => $form->createView(),
        ));
    }




    function DeleteAction($id){
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)
            ->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('reclamation_show');
    }
    function DeletebackAction($id){
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)
            ->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('nozelites_homepagebac');
    }
    function AfficheRecAction(){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $ide=5;
        $Reclamations=$this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $membre=$this->getDoctrine()->getRepository(Membre::class)->findBy(array('idusr'=>$user));

        $groupes = []; $evenements = [];
        for($i=0; $i < sizeof($Reclamations); $i++)
        {
            if($Reclamations[$i]->getSelecteur()=="groupe") {
                $gr = $this->getDoctrine()->getRepository(Groupe::class)->find($Reclamations[$i]->getIdCible());
                if(!in_array($gr,$groupes))$groupes[sizeof($groupes)] = $gr;
            }
            if($Reclamations[$i]->getSelecteur()=="event")
                $evenements[sizeof($evenements)] =
                    $this->getDoctrine()->getRepository(Evenement::class)->find($Reclamations[$i]->getIdCible());
        }



        return $this->render('@Reclamation/Front/AfficheReclamation.html.twig',
            array('R'=>$Reclamations,'IdEmeteur' => $membre,'groupes' => $groupes,'evenements' => $evenements));
    }


    /* function AfficheRecAction(){
        $user = $this->get('security.token_storage')->getToken()->getUser();
     //   $Reclamation=$this->getDoctrine()
          //  ->getRepository(Reclamation::class)
          //  ->findAll();
$ide=5;
        $Reclamation=$this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();

        $membre=$this->getDoctrine()
            ->getRepository(Membre::class)
            ->findBy(array('idusr'=>$user));

        $groups=$this->getDoctrine()

            ->getRepository(Groupe::class)
            ->findBy(array('idGroupe'=>$user));
        $event=$this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findBy(array('idCible'=>$ide));
        return $this->render('@Reclamation/Front/AfficheReclamation.html.twig',
            array('R'=>$Reclamation,'IdEmeteur' => $membre,'idCible' => $groups,'idCible' => $event));
    }*/


    function AfficheRec1Action(){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $ide=5;
        $Reclamations=$this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $membre=$this->getDoctrine()->getRepository(Membre::class)->findBy(array('idusr'=>$user));
        $evaluation=$this->getDoctrine()->getRepository(Evaluation::class)->findBy(array('id'=>$user));
        $groupes = []; $evenements = []; $pubs = [];
        for($i=0; $i < sizeof($Reclamations); $i++)
        {
            if($Reclamations[$i]->getSelecteur()=="groupe") {
                $gr = $this->getDoctrine()->getRepository(Groupe::class)->find($Reclamations[$i]->getIdCible());
                if(!in_array($gr,$groupes))$groupes[sizeof($groupes)] = $gr;
            }
            if($Reclamations[$i]->getSelecteur()=="event") {
                  $fr =  $this->getDoctrine()->getRepository(Evenement::class)->find($Reclamations[$i]->getIdCible());
                if(!in_array($fr,$evenements))$evenements[sizeof($evenements)] = $fr;
            }
            if($Reclamations[$i]->getSelecteur()=="pub")
                $pubs[sizeof($pubs)] =
                    $this->getDoctrine()->getRepository(Publication::class)->find($Reclamations[$i]->getIdCible());
        }



        return $this->render('@Reclamation/Back/ListReclamation.html.twig',
            array('R'=>$Reclamations,'IdEmeteur' => $membre,'groupes' => $groupes,'evenements' => $evenements,'pubs' => $pubs,'idrecl' =>$evaluation));
    }
    function UpdateAction($id,Request $request){

        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)
            ->find($id);
        $Form=$this->createForm(UpdateType::class,$reclamation);
        $Form->handleRequest($request);
        if($Form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('reclamation_show');

        }
        return $this->render('@Reclamation/Front/UpdateReclamation.html.twig',
            array('f'=>$Form->createView()));
    }
    function TraiterAction($id,Request $request){

        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)
            ->find($id);

        $reclamation->setEtat(1);
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('nozelites_homepagebac');

        return $this->render('@Reclamation/Front/ListReclamation.html.twig');

    }

    public function Ajouter1Action(Request $request,$id,$type)
    {

      $id_emeteur = 9;

        $em = $this->getDoctrine()->getManager();
       $membres = $em->getRepository('ReclamationBundle:Membre')->findAll();
       $membrecn = $em->getRepository('ReclamationBundle:Membre')->find($id_emeteur);
        $entity = "";$resultat= 0;
        if($type=="groupe")
        {
            $entity='ReclamationBundle:Groupe';
            $resultat = $em->getRepository($entity)->find($id);
            $resultat = $resultat->getIdGroupe();
        }
        else if($type=="event")
        {
            $entity='ReclamationBundle:Evenement';
            $resultat = $em->getRepository($entity)->find($id);
            $resultat = $resultat->getIdE();
        }
        else if($type=="pub")
        {
            $entity='ReclamationBundle:Publication';
            $resultat = $em->getRepository($entity)->find($id);
        }



       if ($request->getMethod() == Request::METHOD_POST) {

            $reclamation = new Reclamation();

            //$reclamation->setIdEmeteur($id_emeteur);
           //$reclamation->setIdEmeteur($membrecn);
            //$reclamation->setIdCible($groupss);//
            $reclamation->setDescription($request->get('description'));
            $reclamation->setSelecteur($request->get('selecteur'));
            $reclamation->setEtat(0);
            $reclamation->setDate(new  \DateTime("now + 1 hour"));
            $reclamation->setIdEmeteur($membres[1]);
            $reclamation->setIdCible($id);
            $em->persist($reclamation);
            $em->flush();
           $mail="mohamedkheireddine.bairam@esprit.tn";
           $msg="On a bien recu votre Reclamation";
           $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
           $mailer = \Swift_Mailer::newInstance($transport);
           $message = \Swift_Message::newInstance()
               ->setSubject('Validation')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

           $this->get('mailer')->send($message);


           return $this->redirectToRoute('reclamation_show');
       }

       return $this->render('@Reclamation/Front/AjouterRec.html.twig',array('resultat' =>$resultat, "type"=>$type ));




    }


}
