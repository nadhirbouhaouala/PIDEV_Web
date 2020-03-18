<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\GroupeMembre;
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

            $groupeMembre = new Groupemembre();
            $groupeMembre->setIdGroupe(8);
            $groupeMembre->setIdMembre(1);// membre connected (session)
            $em->persist($groupeMembre);
            $em->flush();

            return $this->redirectToRoute('groupe_show', array('idGroupe' => $groupe->getIdgroupe()));
        }

        return $this->render('@Nozelites/Front/MembreGroupesAjouter.html.twig', array(
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



    public function showGroupesInvitationsAction()
    {
        $id_membre_actif = 8;

        $em = $this->getDoctrine()->getManager();
        $groupes = $em->getRepository('NozelitesBundle:Groupe')->findAll();

        $groupesmembres = $em->getRepository('NozelitesBundle:GroupeMembre')
            ->findBy(array('idMembre'=>$id_membre_actif));
        $membres = $em->getRepository('NozelitesBundle:Membre')->findAll();

        return $this->render('@Nozelites/Front/MembreGroupes.html.twig',
            array('groupes' => $groupes,'groupesmembres' => $groupesmembres,'membres'=>$membres)
            );
    }

    public function newgroupeInvitationAction(Request $request)
    {
        $id_membre_actif = 8;

        $groupe = new Groupe();
        $form = $this->createForm('NozelitesBundle\Form\GroupeType', $groupe);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository('NozelitesBundle:Membre')->findAll();
        $membrecncte = $em->getRepository('NozelitesBundle:Membre')->find($id_membre_actif);

        if ($request->getMethod() == "POST") {
            $groupe = new Groupe();
            $groupe->setTitre($request->get('titre'));
            $groupe->setDescription($request->get('description'));
            $groupe->setAutorisation($request->get('autorisation'));
            $em->persist($groupe);
            $em->flush();
            //admin
            $groupeMembre = new Groupemembre();
            $groupeMembre->setIdGroupe($groupe);
            $groupeMembre->setIdMembre($membrecncte);// membre connected (session)
            $groupeMembre->setIdInvite(-1);
            $groupeMembre->setEtat("administrateur");
            $em->persist($groupeMembre);
            $em->flush();
            //invitations
            for($i=0 ; $i<$request->get('invitations'); $i++)
            {
                $groupeMembre = new Groupemembre();
                $groupeMembre->setIdGroupe($groupe);
                    $membre = $em->getRepository('NozelitesBundle:Membre')->find($request->get('membre'.$i));
                $groupeMembre->setIdMembre($membre);// membre connected (session)
                $groupeMembre->setIdInvite($id_membre_actif);
                $groupeMembre->setEtat("invitation");
                $em->persist($groupeMembre);
                $em->flush();
            }
            /*

            $groupeMembre = new Groupemembre();
            $groupeMembre->setIdGroupe($groupe->getIdGroupe());
            $groupeMembre->setIdMembre($id_membre_actif);// membre connected (session)
            $em->persist($groupeMembre);
            $em->flush();*/

            return $this->redirectToRoute('nozelites_membregroupesfront');
        }

        return $this->render('@Nozelites/Front/MembreGroupesAjouter.html.twig',
            array('membres'=> $membres,));
    }

    public function accepterinvitationAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $gm = $em->getRepository('NozelitesBundle:GroupeMembre')->find($id);
        if($gm->getEtat()=="invitation")$gm->setEtat("standard");
        $em->persist($gm);
        $em->flush();

        return $this->redirectToRoute('nozelites_membregroupesfront');
    }
}
