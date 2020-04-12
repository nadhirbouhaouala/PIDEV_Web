<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Evenement;
use NozelitesBundle\Entity\Listparticipant;
use NozelitesBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Evenement controller.
 *
 * @Route("evenement")
 */
class EvenementController extends Controller
{
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

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var UploadedFile $file
             */
            $file = $evenement->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );

            $em = $this->getDoctrine()->getManager();
            $evenement->setEtat(0);
            $evenement->setNbparticipant(0);
            $evenement->setImage($fileName);

            $membre = $em->getRepository('NozelitesBundle:Membre')->find(10);
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
        $id_membre_actif = 10;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findAll();
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('idm'=>$id_membre_actif));
        return $this->render('@Nozelites/Front/EvenementAfficher.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant));
    }
    public function afficherAllAction()
    {
        $id_membre_actif = 10;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findAll();
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('idm'=>$id_membre_actif));
        return $this->render('@Nozelites/Front/AllEvenement.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant));
    }
    public function afficherEventAllAction()
    {
        $id_membre_actif = 10;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findAll();

        return $this->render('@Nozelites/back/AdminEvenementAll.html.twig', array(
            'evenement' => $evenement));
    }
    public function afficherEventAction($id)
    {
        $id_membre_actif = 10;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->find($id);
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('idm'=>$id_membre_actif,'ide'=>$id));
        return $this->render('@Nozelites/Front/EvenementPage.html.twig', array(
            'evenement' => $evenement,'participant'=>$participant));
    }
    public function afficherEventMAction($id)
    {
        $id_membre_actif = 10;
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->find($id);
        $participant=$this->getDoctrine()
            ->getRepository(Listparticipant::class)->findBy(array('ide'=>$id));
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
            'evenement' => $evenement,'participant'=>$participant,'liste'=>$liste,'listp'=>$listp));
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
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $evenement->setImage($fileName);
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
        $id_membre_actif = 10;
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id);

        $listeparticipant= new Listparticipant();
        $listeparticipant->setIde($evenement);
        $membre = $em->getRepository('NozelitesBundle:Membre')->find($id_membre_actif);
        $listeparticipant->setIdm($membre);
        $listeparticipant->setEtatp(0);
        $em->persist($listeparticipant);
        $em->flush();
        return $this->redirectToRoute('nozelites_Evenementpagefront',array('id' => $id));

    }
    public function disjoindreAction(Request $request,$id)
    {
        $id_membre_actif = 10;
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id);

        $listeparticipant= $em->getRepository('NozelitesBundle:Listparticipant')->findOneBy(array('ide'=>$id,'idm'=>$id_membre_actif));

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

    }

    private function createDeleteForm(Evenement $evenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evenement_delete', array('ide' => $evenement->getIde())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
