<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\GroupeMembre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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

    public function JsonAllAction()
    {
        $groupesmembres = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:GroupeMembre")->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($groupesmembres);

        return new JsonResponse($formatted);
    }

    public function JsonFindAction($id)
    {
        $groupemembre = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:GroupeMembre")->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($groupemembre);

        return new JsonResponse($formatted);
    }

    public function JsonAddAction($id_groupe,$id_membre,$id_invite,$etat)
    {
        $em = $this->getDoctrine()->getManager();

        $groupemembre = new GroupeMembre();
        $groupemembre->setIdGroupe($em->getRepository("NozelitesBundle:Groupe")->find($id_groupe));
        $groupemembre->setIdMembre($em->getRepository("NozelitesBundle:Membre")->find($id_membre));
        $groupemembre->setIdInvite($id_invite);
        $groupemembre->setEtat($etat);

        $em->persist($groupemembre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($groupemembre);

        return new JsonResponse($formatted);
    }

    public function JsonEditAction($idGm,$id_groupe,$id_membre,$id_invite,$etat)
    {
        $em = $this->getDoctrine()->getManager();

        $groupemembre = $em->getRepository("NozelitesBundle:GroupeMembre")->find($idGm);
        $groupemembre->setIdGroupe($em->getRepository("NozelitesBundle:Groupe")->find($id_groupe));
        $groupemembre->setIdMembre($em->getRepository("NozelitesBundle:Membre")->find($id_membre));
        $groupemembre->setIdInvite($id_invite);
        $groupemembre->setEtat($etat);

        $em->persist($groupemembre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($groupemembre);

        return new JsonResponse($formatted);
    }

    public function JsonDeleteAction($id)
    {
        $groupemembre = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:GroupeMembre")->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($groupemembre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($groupemembre);

        return new JsonResponse($formatted);
    }
}
