<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PublicationBundle\Entity\Publication;
use PublicationBundle\Form\PublicationType;
use PublicationBundle\Form\CommentaireType;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;

use Symfony\Component\HttpFoundation\Request;

class PublicationController extends Controller
{
    public function AjouterAction(Request $request)
    {
        $publication = new Publication();
        $form = $this->createForm('PublicationBundle\Form\PublicationType', $publication);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var UploadedFile $file
             */
            $file = $publication->getImage();
            $fileName = $file->getClientOriginalName();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );

            $em = $this->getDoctrine()->getManager();
            $imagePath = $this->getParameter('image_directory').'/'.$file->getClientOriginalName();
            $imagePath = str_replace("\\","/",$imagePath);
            $publication->setImage($imagePath);
            $publication->setNbJaime(0);

            $publication->setIdGroupe(1);
            $publication->setIdPublicateur(10);



            $em->persist($publication);
            $em->flush();



            return $this->redirectToRoute('Afficher', array('id' => $publication->getId()));
        }

        return $this->render('@Publication/Front/AjouterPublication.html.twig', array(
            'publication' => $publication,
            'f' => $form->createView(),
        ));
    }
    function AffichepubAction(){
        $publication=$this->getDoctrine()
            ->getRepository(Publication::class)
            ->findAll();
        return $this->render('@Publication/Front/Affichepub.html.twig',
            array('c'=>$publication));
    }
    function DeleteAction($id){
        $em=$this->getDoctrine()->getManager();
        $publication=$em->getRepository(Publication::class)
            ->find($id);
        $em->remove($publication);
        $em->flush();
        return $this->redirectToRoute('Afficher');

    }
    function DeletecommAction($idCommentaire){
        $em=$this->getDoctrine()->getManager();
        $commentaire=$em->getRepository(Commentaire::class)
            ->find($idCommentaire);
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('Affichercommentaire');

    }
    function AffichecommentaireAction(){
        $commentaire=$this->getDoctrine()
            ->getRepository(Commentaire::class)
            ->findAll();
        return $this->render('@Publication/Front/Affichecomm.html.twig',
            array('cc'=>$commentaire));
    }
    function UpdatecommAction($idCommentaire,Request $request){

        $em=$this->getDoctrine()->getManager();
        $commentaire=$em->getRepository(Commentaire::class)
            ->find($idCommentaire);
        $Form=$this->createForm(CommentaireType::class,$commentaire);
        $Form->handleRequest($request);
        if($Form->isSubmitted()){


            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('Affichercommentaire');

        }
        return $this->render('@Publication/Front/Updatecomm.html.twig',
            array('fc'=>$Form->createView()));
    }

    function UpdateAction($id,Request $request){

        $em=$this->getDoctrine()->getManager();
        $publication=$em->getRepository(Publication::class)
            ->find($id);
        $Form=$this->createForm(PublicationType::class,$publication);
        $Form->handleRequest($request);
        if($Form->isSubmitted()){
            /**
             * @var UploadedFile $file
             */
            $file = $publication->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $em=$this->getDoctrine()->getManager();
            $publication->setImage($fileName);
            $em->flush();
            return $this->redirectToRoute('Afficher');

        }
        return $this->render('@Publication/Front/Update.html.twig',
            array('f'=>$Form->createView()));
    }
    public function CommentaireAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()
            ->getRepository(Commentaire::class)
            ->findBy(array('idPublication'=>$id));
        $publication = $em->getRepository(Publication::class)->find($id);
        $var=[];
        $var2=[];
       $new= $this->getDoctrine()->getRepository('PublicationBundle:Publication')->findBy([], ['nbJaime' => 'DESC']);
        if(!empty($new[0]))
        {
            $var[0]=$new[0];
        }
        if(!empty($new[1]))
        {
            $var2[0]=$new[1];
        }





        return $this->render('@Publication/Front/Commentaire.html.twig',array('c'=>$publication,'p'=>$commentaire,'premiere'=>$var,'deuxieme'=>$var2));
    }
    function AfficheCommAction(){
        $commentaire=$this->getDoctrine()
            ->getRepository(Commentaire::class)
            ->findAll();
        return $this->render('@Publication/Front/Commentaire.html.twig',
            array('p'=>$commentaire ));
    }
    public function AjouterCommAction(Request $request,$id)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm('PublicationBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $pub=$em->getRepository('PublicationBundle:Publication')->find($id);

            $commentaire->setIdPublication($pub);

            $em->persist($commentaire);
            $em->flush();



            return $this->redirectToRoute('Commentaire',array('id'=>$id));
        }

        return $this->render('@Publication/Front/Ajoutcomm.html.twig', array(
            'publication' => $commentaire,
            'f' => $form->createView(),
        ));
    }
    public function jaimeAction(Request $request,$id){

        $somme = 0;
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->find($id);
        $somme=$publication->getNbJaime()+1;
        $publication->setNbJaime($somme);
        $em->persist($publication);
        $em->flush();




        return $this->redirectToRoute('Afficher');

    }
    public function premierepublicationAction(){
        $aux =0;
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->findAll();
        for($i=0 ; $i<sizeof($publication);$i++)
        {
            if($aux<$publication[$i].getNbJaime())
                $aux=$publication[$i].getNbJaime();
        }



    }
    public function ToponeAction($id)
    {

        $listtopone= [];

        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->findAll();
        for($i=0 ; $i<sizeof($publication);$i++)
        {
          $listtopone[$i]=$publication[$i];


        }
        sort($listtopone,$listtopone->getNbJaime());
        


        return $this->render('@Publication/Front/Commentaire.html.twig',
            array('list'=>$listtopone[0]->getTitre()));




    }

    public function ImprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->find($id);
        return $this->render('@Publication/Front/ImprimerPublication.html.twig',
            array('c'=>$publication));



    }

    function AffichepubbackAction(){
        $publication=$this->getDoctrine()
            ->getRepository(Publication::class)
            ->findAll();
        return $this->render('@Publication/Back/Affichepubback.html.twig',
            array('c'=>$publication));
    }
    function DeletebackAction($id){
        $em=$this->getDoctrine()->getManager();
        $publication=$em->getRepository(Publication::class)
            ->find($id);
        $em->remove($publication);
        $em->flush();
        return $this->redirectToRoute('Afficherback');

    }
    function UpdatebackAction($id,Request $request){

        $em=$this->getDoctrine()->getManager();
        $publication=$em->getRepository(Publication::class)
            ->find($id);
        $Form=$this->createForm(PublicationType::class,$publication);
        $Form->handleRequest($request);
        if($Form->isSubmitted()){

            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('Afficherback');

        }
        return $this->render('@Publication/Front/Updateback.html.twig',
            array('f'=>$Form->createView()));
    }
    function AffichecommbackAction(){
        $commentaire=$this->getDoctrine()
            ->getRepository(Commentaire::class)
            ->findAll();
        return $this->render('@Publication/Back/Affichecommback.html.twig',
            array('c'=>$commentaire));
    }
    function DeletecommbackAction($id){
        $em=$this->getDoctrine()->getManager();
        $commentaire=$em->getRepository(Commentaire::class)
            ->find($id);
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('Affichercommback');

    }



}
