<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Listparticipant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Listparticipant controller.
 *
 * @Route("listparticipant")
 */
class ListparticipantController extends Controller
{
    /**
     * Lists all listparticipant entities.
     *
     * @Route("/", name="listparticipant_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listparticipants = $em->getRepository('NozelitesBundle:Listparticipant')->findAll();

        return $this->render('listparticipant/index.html.twig', array(
            'listparticipants' => $listparticipants,
        ));
    }

    /**
     * Creates a new listparticipant entity.
     *
     * @Route("/new", name="listparticipant_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $listparticipant = new Listparticipant();
        $form = $this->createForm('NozelitesBundle\Form\ListparticipantType', $listparticipant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listparticipant);
            $em->flush();

            return $this->redirectToRoute('listparticipant_show', array('ide' => $listparticipant->getIde()));
        }

        return $this->render('listparticipant/new.html.twig', array(
            'listparticipant' => $listparticipant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a listparticipant entity.
     *
     * @Route("/{ide}", name="listparticipant_show")
     * @Method("GET")
     */
    public function showAction(Listparticipant $listparticipant)
    {
        $deleteForm = $this->createDeleteForm($listparticipant);

        return $this->render('listparticipant/show.html.twig', array(
            'listparticipant' => $listparticipant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing listparticipant entity.
     *
     * @Route("/{ide}/edit", name="listparticipant_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Listparticipant $listparticipant)
    {
        $deleteForm = $this->createDeleteForm($listparticipant);
        $editForm = $this->createForm('NozelitesBundle\Form\ListparticipantType', $listparticipant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listparticipant_edit', array('ide' => $listparticipant->getIde()));
        }

        return $this->render('listparticipant/edit.html.twig', array(
            'listparticipant' => $listparticipant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a listparticipant entity.
     *
     * @Route("/{ide}", name="listparticipant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Listparticipant $listparticipant)
    {
        $form = $this->createDeleteForm($listparticipant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listparticipant);
            $em->flush();
        }

        return $this->redirectToRoute('listparticipant_index');
    }

    /**
     * Creates a form to delete a listparticipant entity.
     *
     * @param Listparticipant $listparticipant The listparticipant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Listparticipant $listparticipant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listparticipant_delete', array('ide' => $listparticipant->getIde())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
