<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Listparticipant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use NozelitesBundle\Entity\Membre;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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
    public function JsonFindAction($id,$id_membre)
    {
        $em = $this->getDoctrine()->getManager();

        $listeparticipant= $em->getRepository('NozelitesBundle:Listparticipant')->findOneBy(array('ide'=>$id,'idm'=>$id_membre));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($listeparticipant);

        return new JsonResponse($formatted);
    }
    public function JsonAllAction()
    {
        $part = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Listparticipant")->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($part);

        return new JsonResponse($formatted);
    }
    public function JsonAddAction($id_evenement,$id_membre)
    {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id_evenement);
        $old1=$evenement->getNbplace();
        $old=$evenement->getNbparticipant();
        if ($old1>$old) {
            $listeparticipant = new Listparticipant();
            $listeparticipant->setIde($em->getRepository("NozelitesBundle:Evenement")->find($id_evenement));
            $listeparticipant->setIdm($em->getRepository("NozelitesBundle:Membre")->find($id_membre));
            $listeparticipant->setEtatp(1);
            $em->persist($listeparticipant);
            $em->flush();
            $evenement->setNbplace($old1 - 1);
            $evenement->setNbparticipant($old + 1);

            $em->persist($evenement);
            $em->flush();
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($listeparticipant);

        return new JsonResponse($formatted);
    }
    public function JsonDeleteAction($id,$id_membre)
    {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('NozelitesBundle:Evenement')->find($id);
        $listeparticipant= $em->getRepository('NozelitesBundle:Listparticipant')->findOneBy(array('ide'=>$id,'idm'=>$id_membre));
        $old1=$evenement->getNbplace();
        $old=$evenement->getNbparticipant();
        $evenement->setNbparticipant($old - 1);
        $evenement->setNbplace($old1 + 1);
        $em->persist($evenement);
        $em->remove($listeparticipant);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($listeparticipant);

        return new JsonResponse($formatted);
    }
}
