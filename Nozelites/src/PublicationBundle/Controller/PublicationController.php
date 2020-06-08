<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Commentaire;
use PublicationBundle\Entity\Favoris;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PublicationBundle\Entity\Publication;
use PublicationBundle\Form\PublicationType;
use PublicationBundle\Form\CommentaireType;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class PublicationController extends Controller
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
    {
        $publication = new Publication();
        $form = $this->createForm('PublicationBundle\Form\PublicationType', $publication);
        $form->handleRequest($request);
        $id_emeteur = $this->getRealIdAction();

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
            $membrecn = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);

            $imagePath = $this->getParameter('image_directory').'/'.$file->getClientOriginalName();
            $imagePath = str_replace("\\","/",$imagePath);
            $publication->setImage($imagePath);
            $publication->setNbJaime(0);

            $publication->setIdGroupe(1);
            $publication->setIdPublicateur($membrecn);



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
        $id_emeteur = $this->getRealIdAction();

        $publication=$this->getDoctrine()
            ->getRepository(Publication::class)
            ->findAll();

        $em = $this->getDoctrine()->getManager();

        $membrecn = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        $jaime=$this->getDoctrine()
            ->getRepository(Favoris::class)
            ->findBy(array('idMembre'=>$id_emeteur));


        return $this->render('@Publication/Front/Affichepub.html.twig',
            array('c'=>$publication,'d'=>$membrecn,'favoris'=>$jaime));
    }
    function notificationAction(){
        $id_emeteur = $this->getRealIdAction();

        $publication=$this->getDoctrine()
            ->getRepository(Publication::class)
            ->findBy(array('idMembre'=>$id_emeteur));

        $em = $this->getDoctrine()->getManager();

        $membrecn = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        $jaime=$this->getDoctrine()
            ->getRepository(Favoris::class)
            ->findAll();


        return $this->render('@Nozelites/basefrontmembre.html.twig',
            array('c'=>$publication,'d'=>$membrecn,'favoris'=>$jaime));
    }
    function DeleteAction($id){
        $em=$this->getDoctrine()->getManager();
        $publication=$em->getRepository(Publication::class)
            ->find($id);
        $part=$em->getRepository(Favoris::class)
            ->findBy(
                ['idPub' => $id]);
        for ($j=0; $j<sizeof($part);$j++)
        {
            $em->remove($part[$j]);
        }

        $em->flush();
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
        $id_emeteur = $this->getRealIdAction();

        $commentaire = new Commentaire();
        $em = $this->getDoctrine()->getManager();
        $membrecn = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        $form = $this->createForm('PublicationBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {



            $pub=$em->getRepository('PublicationBundle:Publication')->find($id);
            $commentaire->setIdMembre($membrecn);
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
        $id_emeteur = $this->getRealIdAction();

        $somme = 0;
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->find($id);
        $somme=$publication->getNbJaime()+1;
        $publication->setNbJaime($somme);

        $jaime= new Favoris();
        $mbre = $em->getRepository('PublicationBundle:Membre')->find($id_emeteur);
        $jaime->setIdMembre($mbre);
        $jaime->setIdPub($publication);
        $em->persist($publication);
        $em->persist($jaime);
        $em->flush();


        $pub=$em->getRepository('PublicationBundle:Publication')->find($id);

        $membrecn = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        $mail=$pub->getIdPublicateur()->getMail();

        $nom=$membrecn->getNom();
        $prenom=$membrecn->getPrenom();
       // $mail = "firasbenhiba@yahoo.fr";
        $msg="$nom $prenom a aimé votre publication " ;
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance()
            ->setSubject('Notification Nozelites')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

        $this->get('mailer')->send($message);




        return $this->redirectToRoute('Afficher');


    }
    public function dislikeAction(Request $request,$id){
        $id_emeteur = $this->getRealIdAction();

        $somme = 0;
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->find($id);
        $somme=$publication->getNbJaime()-1;
        $publication->setNbJaime($somme);

        $jaime= $em->getRepository('PublicationBundle:Favoris')->findOneBy(array('idPub'=>$id,'idMembre'=>$id_emeteur));


        $em->persist($publication);
        $em->remove($jaime);
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

    function RechercheAction($titre){
        $em=$this->getDoctrine()->getManager();
        $publication=$em->getRepository(Publication::class)
            ->find($titre);
        $alo=$this->getDoctrine()
            ->getRepository(Publication::class)
            ->findAll();
        

        return $this->redirectToRoute('Afficher');
    }

   

    public function JsonAllAction()
    {
        $publication = $this->getDoctrine()->getManager()
            ->getRepository("PublicationBundle:Publication")->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($publication);

        return new JsonResponse($formatted);
    }


    public function JsonAddAction($idm,$idg,$titre,$description,$image)
    {

        $em = $this->getDoctrine()->getManager();
        $publication = new Publication();
        $membre=$em->getRepository("NozelitesBundle:Membre")->find($idm);
;        $publication->setTitre($titre);
        $publication->setDescription($description);
        $publication->setImage($image);
        $publication->setIdGroupe(1);
        $publication->setIdPublicateur($membre);
        $publication->setNbJaime(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($publication);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($publication);
     //   $mail=$publication->getIdPublicateur()->getMail();


         $mail = "firasbenhiba@yahoo.fr";
        $msg="Publication ajouté" ;
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance()
            ->setSubject('Notification Nozelites')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

        $this->get('mailer')->send($message);
        return new JsonResponse($formatted);
    }

    public function JsonDeleteAction($id)
    {
        $publication = $this->getDoctrine()->getManager()
            ->getRepository("PublicationBundle:Publication")->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($publication);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($publication);

        return new JsonResponse($formatted);
    }

    public function JsonEditAction($id,$titre,$description,$image)
    {
        $publication = $this->getDoctrine()->getManager()
            ->getRepository("PublicationBundle:Publication")->find($id);
        $publication->setTitre($titre);
        $publication->setDescription($description);
        $publication->setImage($image);


        $em = $this->getDoctrine()->getManager();
        $em->persist($publication);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($publication);

        return new JsonResponse($formatted);
    }
    public function JsonLikeAction($id)
    {

        $somme = 0;
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->find($id);
        $somme=$publication->getNbJaime()+1;
        $publication->setNbJaime($somme);
        $em->persist($publication);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($publication);

        return new JsonResponse($formatted);
    }
    public function JsonDislikeAction($id)
    {

        $somme = 0;
        $em = $this->getDoctrine()->getManager();
        $publication = $em->getRepository(Publication::class)->find($id);
        $somme=$publication->getNbJaime()-1;
        $publication->setNbJaime($somme);
        $em->persist($publication);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($publication);

        return new JsonResponse($formatted);
    }


    public function facebookAction()
    {
        return $this->render('@Publication/Front/buttonsharefacebook.html.twig');
    }


}
