<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Groupe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Groupe controller.
 *
 * @Route("groupe")
 */
class GroupeController extends Controller
{
    /**
     * Lists all groupe entities.
     *
     * @Route("/", name="groupe_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $groupes = $em->getRepository('NozelitesBundle:Groupe')->findAll();

        return $this->render('@Nozelites/default/groupe/index.html.twig', array(
            'groupes' => $groupes,
        ));
    }

    /**
     * Creates a new groupe entity.
     *
     * @Route("/new", name="groupe_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $groupe = new Groupe();
        $form = $this->createForm('NozelitesBundle\Form\GroupeType', $groupe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groupe);
            $em->flush();

            return $this->redirectToRoute('groupe_show', array('idGroupe' => $groupe->getIdgroupe()));
        }

        return $this->render('@Nozelites/default/groupe/new.html.twig', array(
            'groupe' => $groupe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a groupe entity.
     *
     * @Route("/{idGroupe}", name="groupe_show")
     * @Method("GET")
     */
    public function showAction(Groupe $groupe)
    {
        $deleteForm = $this->createDeleteForm($groupe);

        return $this->render('@Nozelites/default/groupe/show.html.twig', array(
            'groupe' => $groupe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing groupe entity.
     *
     * @Route("/{idGroupe}/edit", name="groupe_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Groupe $groupe)
    {
        $deleteForm = $this->createDeleteForm($groupe);
        $editForm = $this->createForm('NozelitesBundle\Form\GroupeType', $groupe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('groupe_edit', array('idGroupe' => $groupe->getIdgroupe()));
        }

        return $this->render('@Nozelites/default/groupe/edit.html.twig', array(
            'groupe' => $groupe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a groupe entity.
     *
     * @Route("/{idGroupe}", name="groupe_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Groupe $groupe)
    {
        $form = $this->createDeleteForm($groupe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($groupe);
            $em->flush();
        }

        return $this->redirectToRoute('groupe_index');
    }

    /**
     * Creates a form to delete a groupe entity.
     *
     * @param Groupe $groupe The groupe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Groupe $groupe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groupe_delete', array('idGroupe' => $groupe->getIdgroupe())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
