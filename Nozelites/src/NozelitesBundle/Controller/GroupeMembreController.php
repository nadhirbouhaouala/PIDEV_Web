<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\GroupeMembre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Groupemembre controller.
 *
 * @Route("groupemembre")
 */
class GroupeMembreController extends Controller
{
    /**
     * Lists all groupeMembre entities.
     *
     * @Route("/", name="groupemembre_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $groupeMembres = $em->getRepository('NozelitesBundle:GroupeMembre')->findAll();

        return $this->render('@Nozelites/default/groupemembre/index.html.twig', array(
            'groupeMembres' => $groupeMembres,
        ));
    }

    /**
     * Creates a new groupeMembre entity.
     *
     * @Route("/new", name="groupemembre_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $groupeMembre = new Groupemembre();
        $form = $this->createForm('NozelitesBundle\Form\GroupeMembreType', $groupeMembre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groupeMembre);
            $em->flush();

            return $this->redirectToRoute('groupemembre_show', array('idGm' => $groupeMembre->getIdgm()));
        }

        return $this->render('@Nozelites/default/groupemembre/new.html.twig', array(
            'groupeMembre' => $groupeMembre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a groupeMembre entity.
     *
     * @Route("/{idGm}", name="groupemembre_show")
     * @Method("GET")
     */
    public function showAction(GroupeMembre $groupeMembre)
    {
        $deleteForm = $this->createDeleteForm($groupeMembre);

        return $this->render('@Nozelites/default/groupemembre/show.html.twig', array(
            'groupeMembre' => $groupeMembre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing groupeMembre entity.
     *
     * @Route("/{idGm}/edit", name="groupemembre_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GroupeMembre $groupeMembre)
    {
        $deleteForm = $this->createDeleteForm($groupeMembre);
        $editForm = $this->createForm('NozelitesBundle\Form\GroupeMembreType', $groupeMembre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('groupemembre_edit', array('idGm' => $groupeMembre->getIdgm()));
        }

        return $this->render('@Nozelites/default/groupemembre/edit.html.twig', array(
            'groupeMembre' => $groupeMembre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a groupeMembre entity.
     *
     * @Route("/{idGm}", name="groupemembre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GroupeMembre $groupeMembre)
    {
        $form = $this->createDeleteForm($groupeMembre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($groupeMembre);
            $em->flush();
        }

        return $this->redirectToRoute('groupemembre_index');
    }

    /**
     * Creates a form to delete a groupeMembre entity.
     *
     * @param GroupeMembre $groupeMembre The groupeMembre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GroupeMembre $groupeMembre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groupemembre_delete', array('idGm' => $groupeMembre->getIdgm())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
