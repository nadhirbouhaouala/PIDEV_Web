<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Evenement;
use NozelitesBundle\Entity\Listparticipant;
use NozelitesBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\Marker;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Evenement controller.
 *
 * @Route("evenement")
 */
class EvenementController extends Controller
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
    /**
     * Lists all evenement entities.
     *
     * @Route("/", name="evenement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository('NozelitesBundle:Evenement')->findAll();

        return $this->render('evenement/index.html.twig', array(
            'evenements' => $evenements,
        ));
    }

    /**
     * Creates a new evenement entity.
     *
     * @Route("/new", name="evenement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $evenement = new Evenement();
        $form = $this->createForm('NozelitesBundle\Form\EvenementType', $evenement);
        $form->handleRequest($request);
        $id_emeteur = $this->getRealIdAction();

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var UploadedFile $file
             */
            $file = $evenement->getImage();
            $fileName = $file->getClientOriginalName();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );

            $imagePath = $this->getParameter('image_directory').'/'.$file->getClientOriginalName();
            $imagePath = str_replace("\\","/",$imagePath);
            $evenement->setImage($imagePath);
            $em = $this->getDoctrine()->getManager();
            $evenement->setEtat(0);
            $evenement->setNbparticipant(0);

            $membre = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
            $evenement->setIdc($membre);
            $em->persist($evenement);
            $em->flush();

            return $this->redirectToRoute('nozelites_Evenementafficherfront');
        }

        return $this->render('@Nozelites/Front/EvenementAjouter.html.twig', array(
            'evenement' => $evenement,
            'form' => $form->createView(),
        ));
    }


    public function afficherAction()
    {
        $id_emeteur = $this->getRealIdAction();
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findBy(array('idc'=>$id_emeteur));
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('idm'=>$id_emeteur));
        return $this->render('@Nozelites/Front/EvenementAfficher.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant));
    }
    public function afficherAllAction()
    {
        $id_emeteur = $this->getRealIdAction();
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findAll();
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('idm'=>$id_emeteur));
        return $this->render('@Nozelites/Front/AllEvenement.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant));
    }
    public function afficherEventAllAction()
    {
        $id_membre_actif = 9;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findAll();

        return $this->render('@Nozelites/back/AdminEvenementAll.html.twig', array(
            'evenement' => $evenement));
    }
    public function affichertopAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evenement=$this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();
       // $publication = $em->getRepository(Publication::class)->find($id);
        $var=[];
        $var2=[];
        $var3=[];
        $new= $this->getDoctrine()->getRepository('NozelitesBundle:Evenement')->findBy([], ['nbparticipant' => 'DESC']);
        if(!empty($new[0]))
        {
            $var[0]=$new[0];
        }
        if(!empty($new[1]))
        {
            $var2[0]=$new[1];
        }
        if(!empty($new[2]))
        {
            $var3[0]=$new[2];
        }
        $var4=[];
        if(!empty($new[3]))
        {
            $var4[0]=$new[3];
        }



        return $this->render('@Nozelites/Front/TopEvenement.html.twig',array('premiere'=>$var,'deuxieme'=>$var2,'tt'=>$var3,'kk'=>$var4));


    }
    public function afficherEventAction($id)
    {
        $id_emeteur = $this->getRealIdAction();
        $membrecn = $this->getDoctrine()
            ->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        // $map->getOverlayManager()->addMarker(new Marker(new Coordinate(4.4705, 54.6548)));
        $id_membre_actif = 9;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->find($id);
        $var=explode("/",$evenement->getLieu());
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('ide'=>$id));
        $part=[];
        $map = new Map();
        $map->getOverlayManager()->addMarker(new Marker(new Coordinate($var[0], $var[1])));
        $map->setCenter(new Coordinate($var[0], $var[1]));
        for($i=0 ; $i<sizeof($participant);$i++)
        {
            if($participant[$i]->getEtatp()==1)
            {
                $part[$i]=$participant[$i]->getIdm();
            }
        }
        $listp=[];
        for ($i=0 ;$i<sizeof($part);$i++)
        {
            $listp=$this->getDoctrine()
                ->getRepository(Membre::class)->findBy(array('idusr'=>$part));
        }
        return $this->render('@Nozelites/Front/EvenementPage.html.twig', array(
            'evenement' => $evenement,'d'=>$membrecn,'participant'=>$participant,'listp'=>$listp,'map'=>$map));
    }
    public function afficherEventMAction($id)
    {
        $id_membre_actif = 9;
        $map = new Map();
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->find($id);
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('ide'=>$id));
        $var=explode("/",$evenement->getLieu());
        $map->getOverlayManager()->addMarker(new Marker(new Coordinate($var[0], $var[1])));
        $map->setCenter(new Coordinate($var[0], $var[1]));
        $membre=[];
        $part=[];
        for($i=0 ; $i<sizeof($participant);$i++)
        {
            if($participant[$i]->getEtatp()==0)
            {
                $membre[$i]=$participant[$i]->getIdm();
            }
        }
        for($i=0 ; $i<sizeof($participant);$i++)
        {
            if($participant[$i]->getEtatp()==1)
            {
                $part[$i]=$participant[$i]->getIdm();
            }
        }
        $liste=[];
        $listp=[];
        for ($i=0 ;$i<sizeof($membre);$i++)
        {
            $liste=$this->getDoctrine()
                ->getRepository(Membre::class)->findBy(array('idusr'=>$membre));
        }
        for ($i=0 ;$i<sizeof($part);$i++)
        {
            $listp=$this->getDoctrine()
                ->getRepository(Membre::class)->findBy(array('idusr'=>$part));
        }
        return $this->render('@Nozelites/Front/EvenementPageM.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant,'liste'=>$liste,'listp'=>$listp,'map'=>$map));
    }


    /**
     * Finds and displays a evenement entity.
     *
     * @Route("/{ide}", name="evenement_show")
     * @Method("GET")
     */
    public function showAction(Evenement $evenement)
    {
        $deleteForm = $this->createDeleteForm($evenement);

        return $this->render('evenement/show.html.twig', array(
            'evenement' => $evenement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing evenement entity.
     *
     * @Route("/{ide}/edit", name="evenement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Evenement $evenement)
    {
        $deleteForm = $this->createDeleteForm($evenement);
        $editForm = $this->createForm('NozelitesBundle\Form\EvenementType', $evenement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file = $evenement->getImage();
            $fileName = $file->getClientOriginalName();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );

            $imagePath = $this->getParameter('image_directory').'/'.$file->getClientOriginalName();
            $imagePath = str_replace("\\","/",$imagePath);
            $evenement->setImage($imagePath);
            /*$file = $evenement->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $imagePath = $this->getParameter('image_directory').'/'.$file->getClientOriginalName();
            $imagePath = str_replace("\\","/",$imagePath);*/

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nozelites_Evenementafficherfront');
        }

        return $this->render('@Nozelites/Front/EvenementModifier.html.twig', array(
            'evenement' => $evenement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a evenement entity.
     *
     * @Route("/{ide}", name="evenement_delete")
     * @Method("DELETE")
     */
    /**public function deleteAction(Request $request, Evenement $evenement)
    {
    $form = $this->createDeleteForm($evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->remove($evenement);
    $em->flush();
    }

    return $this->redirectToRoute('evenement_index');
    }*/
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $evenement=$em->getRepository(Evenement::class)
            ->find($id);
        $part=$em->getRepository(Listparticipant::class)
            ->findBy(
                ['ide' => $id]);
        for ($j=0; $j<sizeof($part);$j++)
        {
            $em->remove($part[$j]);
        }

        $em->flush();
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('nozelites_Evenementafficherfront');
    }



    public function accepterEventAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $gm = $em->getRepository(Evenement::class)->find($id);
        if($gm->getEtat()==0)$gm->setEtat(1);
        $em->persist($gm);
        $em->flush();
        $membre=$em->getRepository(Membre::class)->find($gm->getIdc());
        $mail=$membre->getMail();
        $msg="your event has been accepted";
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance()
            ->setSubject('Validation')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

        $this->get('mailer')->send($message);
        return $this->redirectToRoute('nozelites_adminEvenementback');
    }
    public function showEvenementadminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->findAll();

        return $this->render('@Nozelites/Back/AdminEvenement.html.twig',
            array('evenement'=> $evenement)
        );
    }
    public function supprimerEvenementadminAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($id);
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('nozelites_adminEvenementback');
    }
    public function supprimerEventAlladminAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($id);
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('nozelites_adminEvenementAllback');
    }
    public function RejoindreAction(Request $request,$id)
    {
        $id_emeteur = $this->getRealIdAction();
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id);

        $listeparticipant= new Listparticipant();
        $listeparticipant->setIde($evenement);
        $membre = $em->getRepository('NozelitesBundle:Membre')->find($id_emeteur);
        $listeparticipant->setIdm($membre);
        $listeparticipant->setEtatp(0);
        $em->persist($listeparticipant);
        $em->flush();
        return $this->redirectToRoute('nozelites_Evenementpagefront',array('id' => $id));

    }
    public function disjoindreAction(Request $request,$id)
    {
        $id_emeteur = $this->getRealIdAction();
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id);

        $listeparticipant= $em->getRepository('NozelitesBundle:Listparticipant')->findOneBy(array('ide'=>$id,'idm'=>$id_emeteur));

        $old1=$evenement->getNbplace();
        $old=$evenement->getNbparticipant();
        $evenement->setNbparticipant($old - 1);
        $evenement->setNbplace($old1 + 1);
        $em->remove($listeparticipant);
        $em->persist($evenement);
        $em->flush();
        return $this->redirectToRoute('nozelites_Evenementpagefront',array('id' => $id));

    }
    public function accepterParticipantAction(Request $request,$id,$idm)
    {

        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id);
        $old1=$evenement->getNbplace();
        $old=$evenement->getNbparticipant();
        if ($old1>$old) {
            $participant = $em->getRepository('NozelitesBundle:Listparticipant')->findOneBy(array('ide'=>$id,'idm'=>$idm));
            $participant->setEtatp(1);
            $em->persist($participant);
            $em->flush();
            $evenement->setNbplace($old1 - 1);
            $evenement->setNbparticipant($old + 1);

            $em->persist($evenement);
            $em->flush();

            $membre=$em->getRepository(Membre::class)->find($idm);
            $mail=$membre->getMail();
            $nom=$evenement->getNom();
            $msg="you have been accepted to $nom ";
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance()
                ->setSubject('Validation')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

            $this->get('mailer')->send($message);

        }
        return $this->redirectToRoute('nozelites_EvenementpageMfront',array('id' => $id));

    }
    public function refuserParticipantAction(Request $request,$id,$idm)
    {
        $em = $this->getDoctrine()->getManager();
        $participant = $em->getRepository('NozelitesBundle:Listparticipant')->findOneBy(array('ide'=>$id,'idm'=>$idm));
        $em->remove($participant);
        $em->flush();
        return $this->redirectToRoute('nozelites_EvenementpageMfront',array('id' => $id));
    }



    public function afficherInvitationAction()
    {
        $id_emeteur = $this->getRealIdAction();
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findBy(array('idc'=>$id_emeteur));

        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findAll();
        $list=[];
        $m=0;
        for ($i=0 ; $i<sizeof($evenement);$i++)
        {
            for ($j=0; $j<sizeof($participant);$j++)
            {
                if ($evenement[$i]->getIde()==$participant[$j]->getIde()->getIde())
                {
                    if($participant[$j]->getEtatp()==0)
                    {
                    $list[$m] = $participant[$j];
                    $m++;
                     }
                }
            }
        }
        $mem=[];
        $a=0;
        $all=$this->getDoctrine()
            ->getRepository(Membre::class)->findAll();
        for ($i=0 ; $i<sizeof($all);$i++)
        {
            for ($j=0; $j<sizeof($list);$j++)
            {
                if ($all[$i]->getIdusr()==$list[$j]->getIdm()->getIdusr())
                {
                    $mem[$a]=$all[$i];
                    $a++;
                }
            }
        }
        return $this->render('@Nozelites/basefrontmembre.html.twig', array('membre' => $mem,'part' => $list));
    }
    public function afficherEventadminAction($id)
    {

        // $map->getOverlayManager()->addMarker(new Marker(new Coordinate(4.4705, 54.6548)));
        $id_membre_actif = 9;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->find($id);
        $var=explode("/",$evenement->getLieu());
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('ide'=>$id));
        $part=[];
        for($i=0 ; $i<sizeof($participant);$i++)
        {
            if($participant[$i]->getEtatp()==1)
            {
                $part[$i]=$participant[$i]->getIdm();
            }
        }
        $listp=[];
        for ($i=0 ;$i<sizeof($part);$i++)
        {
            $listp=$this->getDoctrine()
                ->getRepository(Membre::class)->findBy(array('idusr'=>$part));
        }
        return $this->render('@Nozelites/back/AdminEvenementPage.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant,'listp'=>$listp));
    }

    private function createDeleteForm(Evenement $evenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evenement_delete', array('ide' => $evenement->getIde())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function JsonAllAction()
    {
        $evenement = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Evenement")->findAll();
        for($i=0 ; $i<sizeof($evenement);$i++)
        {
            $value=$evenement[$i]->getHeure();
            $evenement[$i]->setHeure($value->format('H:i'));

            $value1=$evenement[$i]->getDate();
            $evenement[$i]->setDate($value1->format('Y-m-d'));

        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evenement);

        return new JsonResponse($formatted);
    }
    public function JsonFindAction($id)
    {
        $evenement = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Evenement")->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize( $evenement);

        return new JsonResponse($formatted);
    }
    public function JsonAddAction($id_membre,$nom,$lieu,$date,$heure,$description,$siteweb,$nbplace,$image)
    {
        $dat = new \DateTime($date);
        $da = new \DateTime($heure);
        $em = $this->getDoctrine()->getManager();
        $evenement = new Evenement();
        $ni=str_replace('-','/',$image);
        $nw=str_replace('-','/',$lieu);


        $evenement->setIdc($em->getRepository("NozelitesBundle:Membre")->find($id_membre));
        $evenement->setNom($nom);
        $evenement->setLieu($nw);
        $evenement->setDate($dat);
        $evenement->setHeure($da);
        $evenement->setNbplace($nbplace);
        $evenement->setDescription($description);
        $evenement->setSiteweb($siteweb);
        $evenement->setImage($ni);
        $evenement->setNbparticipant(0);
        $evenement->setEtat(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($evenement);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evenement);

        return new JsonResponse($formatted);
    }
    public function JsonDeleteAction($id)
    {
        $evenement = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Evenement")->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evenement);

        return new JsonResponse($formatted);
    }
    public function JsonEditAction($ide,$nom,$lieu,$date,$heure,$description,$siteweb,$nbplace,$image)
    {
        $em = $this->getDoctrine()->getManager();
        $dat = new \DateTime($date);
        $da = new \DateTime($heure);
        $evenement = $em->getRepository("NozelitesBundle:Evenement")->find($ide);
        $evenement->setNom($nom);
        $nw=str_replace('-','/',$lieu);
        $evenement->setLieu($nw);
        $evenement->setDate($dat);
        $evenement->setHeure($da);
        $evenement->setNbplace($nbplace);
        $evenement->setDescription($description);
        $evenement->setSiteweb($siteweb);
        $evenement->setImage($image);

        $em->persist($evenement);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evenement);

        return new JsonResponse($formatted);
    }

}
