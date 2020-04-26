<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Evaluation;
use NozelitesBundle\Entity\Evenement;
use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\Publication;
use NozelitesBundle\Entity\Membre;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Form\ReclamationType;
use ReclamationBundle\Form\UpdateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ReclamationController extends Controller
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
            $membres = $em->getRepository('NozelitesBundle:Membre')
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
        for($i=0; $i < sizeof($Reclamations); $i++) {
            if ($Reclamations[$i]->getSelecteur() == "groupe") {
                $gr = $this->getDoctrine()->getRepository(Groupe::class)->find($Reclamations[$i]->getIdCible());
                if (!in_array($gr, $groupes)) $groupes[sizeof($groupes)] = $gr;
            }
            if ($Reclamations[$i]->getSelecteur() == "evenement") {
                $fr = $this->getDoctrine()->getRepository(Evenement::class)->find($Reclamations[$i]->getIdCible());
                if (!in_array($fr, $evenements)) $evenements[sizeof($evenements)] = $fr;
            }
        }



        return $this->render('@Reclamation/Front/AfficheReclamation.html.twig',
            array('R'=>$Reclamations,'IdEmeteur' => $membre,'groupes' => $groupes,'evenements' => $evenements));
    }



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
            if($Reclamations[$i]->getSelecteur()=="evenement") {
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

      $id_emeteur = $this->getRealIdAction();

        $em = $this->getDoctrine()->getManager();
       $membres = $em->getRepository('NozelitesBundle:Membre')->findAll();
       $membrecn = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        $entity = "";$resultat= 0;
        if($type=="groupe")
        {
            $entity='NozelitesBundle:Groupe';
            $resultat = $em->getRepository($entity)->find($id);
            $resultat = $resultat->getIdGroupe();
        }
        else if($type=="evenement")
        {
            $entity='NozelitesBundle:Evenement';
            $resultat = $em->getRepository($entity)->find($id);
            $resultat = $resultat->getIdE();
        }
        else if($type=="pub")
        {
            $entity='NozelitesBundle:Publication';
            $resultat = $em->getRepository($entity)->find($id);
        }



       if ($request->getMethod() == Request::METHOD_POST) {

            $reclamation = new Reclamation();


           //$c = new Membre();
          // $id = $this->getRealIdAction();
          // $c->setIdusr($id); //Id du chasseur connecté
           $reclamation->setIdEmeteur($membrecn);

            $reclamation->setDescription($request->get('description'));
            $reclamation->setSelecteur($request->get('selecteur'));
            $reclamation->setEtat(0);
            $reclamation->setDate(new  \DateTime("now + 1 hour"));

           // $reclamation->setIdEmeteur($membres[1]);
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
