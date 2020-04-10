<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Evenement;
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
        $evenement= $this->getDoctrine()
            ->getRepository(Evenement::class)->findAll();

        return $this->render('@Nozelites/Front/EvenementAfficher.html.twig', array(
            'evenement' => $evenement));
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

            return $this->redirectToRoute('evenement_edit', array('ide' => $evenement->getIde()));
        }

        return $this->render('evenement/edit.html.twig', array(
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
    private function createDeleteForm(Evenement $evenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evenement_delete', array('ide' => $evenement->getIde())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
