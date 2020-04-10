<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\GroupeMembre;
use NozelitesBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

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
        $id_membre_actif = 9;

        //email
        $mail="nadhir.bouhaouala@esprit.tn";
        $msg="test";
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance()
            ->setSubject('Validation')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);
        $this->get('mailer')->send($message);

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
        $id_membre_actif = 9;

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
                //email
                $mail="nadhir.bouhaouala@esprit.tn";
                $msg="test";
                $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
                $mailer = \Swift_Mailer::newInstance($transport);
                $message = \Swift_Message::newInstance()
                    ->setSubject('Validation')->setFrom('nozelitesa3@gmail.com')->setTo($mail)->setBody($msg);

                $this->get('mailer')->send($message);
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
            array('membres'=> $membres,"membrecncte"=>$membrecncte,));
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

    public function refuserinvitationAction(GroupeMembre $idgm)
    {
        $em = $this->getDoctrine()->getManager();
        $groupeMembre = $em->getRepository('NozelitesBundle:GroupeMembre')->find($idgm);
        $em->remove($groupeMembre);
        $em->flush();

        return $this->redirectToRoute('nozelites_membregroupesfront');
    }

    public function modifiergroupeAction(Request $request, Groupe $id)
    {
        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);
        $editForm = $this->createForm('NozelitesBundle\Form\GroupeType', $groupe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nozelites_membregroupesfront');
        }

        return $this->render('@Nozelites/Front/MembreGroupesModifier.html.twig', array(
            'groupe' => $groupe,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function supprimergroupeAction(Request $request, Groupe $id)
    {
        $id_membre_actif = 9;

        $em = $this->getDoctrine()->getManager();
        $gm = $em->getRepository('NozelitesBundle:GroupeMembre')
            ->findOneBy(array('idGroupe'=>$id,
                'idMembre'=>$id_membre_actif));
        if($gm->getEtat()=="administrateur")//que l'admin peut supprimer
        {
            $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);
            $em->remove($groupe);
            $em->remove($gm);
            $em->flush();
        }


        return $this->redirectToRoute('nozelites_membregroupesfront');
    }

    public function affichergroupeAction(Groupe $id)
    {
        $id_membre_actif = 9;

        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);

        $gms = $em->getRepository('NozelitesBundle:GroupeMembre')->findBy(array('idGroupe'=>$id));
        $m_admins = [];$m_membres = [];$m_bloquer = [];$m_autres = [];
        for($i=0 ; $i<sizeof($gms);$i++)
        {
            if($gms[$i]->getEtat() == "administrateur")$m_admins[sizeof($m_admins)]=$gms[$i]->getIdMembre();
            else if($gms[$i]->getEtat() == "standard" || $gms[$i]->getEtat() == "membre")$m_membres[sizeof($m_membres)]=$gms[$i]->getIdMembre();
            else $m_bloquer[sizeof($m_bloquer)]=$gms[$i]->getIdMembre();
        }
        $membres = $em->getRepository('NozelitesBundle:Membre')->findAll();
        for($j=0 ; $j<sizeof($membres);$j++)
        {
            $exist = false;
            for($i=0 ; $i<sizeof($gms);$i++)
                if($membres[$j] == $gms[$i]->getIdMembre()){$exist=true;break;}

            if($exist==false)$m_autres[sizeof($m_autres)] = $membres[$j];
        }

        $isadmin = false;
        $result = $em->getRepository('NozelitesBundle:GroupeMembre')->findOneBy(array('idGroupe'=>$id,'idMembre'=>$id_membre_actif));
        if($result)
            if($result->getEtat()=="administrateur")
                $isadmin=true;

        //var_dump($gm_membres);
        return $this->render('@Nozelites/Front/MembreGroup.html.twig', array(
            'isadmin'=>$isadmin,
            'groupe' => $groupe,
            'admins' => $m_admins,
            'membres' => $m_membres,
            'autres' => $m_autres,
        ));
    }

    public function invitermembreAction(Groupe $id,Membre $idmembre)
    {
        $id_membre_actif = 9;

        $em = $this->getDoctrine()->getManager();

        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);

        //inviter membre
        $groupeMembre = new Groupemembre();
        $groupeMembre->setIdGroupe($groupe);
        $membre = $em->getRepository('NozelitesBundle:Membre')->find($idmembre);
        $groupeMembre->setIdMembre($membre);// membre connected (session)
        $groupeMembre->setIdInvite($id_membre_actif);
        $groupeMembre->setEtat("invitation");
        $em->persist($groupeMembre);
        $em->flush();
        //fin inviter membre

        $gms = $em->getRepository('NozelitesBundle:GroupeMembre')->findBy(array('idGroupe'=>$id));
        $m_admins = [];$m_membres = [];$m_bloquer = [];$m_autres = [];
        for($i=0 ; $i<sizeof($gms);$i++)
        {
            if($gms[$i]->getEtat() == "administrateur")$m_admins[sizeof($m_admins)]=$gms[$i]->getIdMembre();
            else if($gms[$i]->getEtat() == "standard" || $gms[$i]->getEtat() == "membre")$m_membres[sizeof($m_membres)]=$gms[$i]->getIdMembre();
            else $m_bloquer[sizeof($m_bloquer)]=$gms[$i]->getIdMembre();
        }
        $membres = $em->getRepository('NozelitesBundle:Membre')->findAll();
        for($j=0 ; $j<sizeof($membres);$j++)
        {
            $exist = false;
            for($i=0 ; $i<sizeof($gms);$i++)
                if($membres[$j] == $gms[$i]->getIdMembre()){$exist=true;break;}

            if($exist==false)$m_autres[sizeof($m_autres)] = $membres[$j];
        }

        $isadmin = false;
        $result = $em->getRepository('NozelitesBundle:GroupeMembre')->findOneBy(array('idGroupe'=>$id,'idMembre'=>$id_membre_actif));
        if($result)
            if($result->getEtat()=="administrateur")
                $isadmin=true;

        //var_dump($gm_membres);
        return $this->render('@Nozelites/Front/MembreGroup.html.twig', array(
            'isadmin'=>$isadmin,
            'groupe' => $groupe,
            'admins' => $m_admins,
            'membres' => $m_membres,
            'autres' => $m_autres,
        ));
    }

    public function retirermembreAction(Groupe $id,Membre $idmembre)
    {
        $id_membre_actif = 9;

        $em = $this->getDoctrine()->getManager();

        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);

        //inviter membre
        $groupeMembre = $em->getRepository('NozelitesBundle:GroupeMembre')
            ->findOneBy(array('idGroupe'=>$id,
                'idMembre'=>$idmembre));
        $groupeMembre->setEtat("bloqué");
        $em->persist($groupeMembre);
        $em->flush();
        //fin inviter membre

        $gms = $em->getRepository('NozelitesBundle:GroupeMembre')->findBy(array('idGroupe'=>$id));
        $m_admins = [];$m_membres = [];$m_bloquer = [];$m_autres = [];
        for($i=0 ; $i<sizeof($gms);$i++)
        {
            if($gms[$i]->getEtat() == "administrateur")$m_admins[sizeof($m_admins)]=$gms[$i]->getIdMembre();
            else if($gms[$i]->getEtat() == "standard" || $gms[$i]->getEtat() == "membre")$m_membres[sizeof($m_membres)]=$gms[$i]->getIdMembre();
            else $m_bloquer[sizeof($m_bloquer)]=$gms[$i]->getIdMembre();
        }
        $membres = $em->getRepository('NozelitesBundle:Membre')->findAll();
        for($j=0 ; $j<sizeof($membres);$j++)
        {
            $exist = false;
            for($i=0 ; $i<sizeof($gms);$i++)
                if($membres[$j] == $gms[$i]->getIdMembre()){$exist=true;break;}

            if($exist==false)$m_autres[sizeof($m_autres)] = $membres[$j];
        }

        $isadmin = false;
        $result = $em->getRepository('NozelitesBundle:GroupeMembre')->findOneBy(array('idGroupe'=>$id,'idMembre'=>$id_membre_actif));
        if($result)
            if($result->getEtat()=="administrateur")
                $isadmin=true;

        //var_dump($gm_membres);
        return $this->render('@Nozelites/Front/MembreGroup.html.twig', array(
            'isadmin'=>$isadmin,
            'groupe' => $groupe,
            'admins' => $m_admins,
            'membres' => $m_membres,
            'autres' => $m_autres,
        ));
    }

//back
    public function showGroupesadminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $groupes = $em->getRepository('NozelitesBundle:Groupe')->findAll();

        return $this->render('@Nozelites/Back/AdminGroupes.html.twig',
            array('groupes' => $groupes)
        );
    }

    public function affichergroupeadminAction(Groupe $id)
    {
        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);

        $gms = $em->getRepository('NozelitesBundle:GroupeMembre')->findBy(array('idGroupe'=>$id));
        $m_membres = [];$m_bloquer = [];
        for($i=0 ; $i<sizeof($gms);$i++)
        {
            if($gms[$i]->getEtat() == "standard" || $gms[$i]->getEtat() == "membre")$m_membres[sizeof($m_membres)]=$gms[$i]->getIdMembre();
            else if($gms[$i]->getEtat() == "bloqué") $m_bloquer[sizeof($m_bloquer)]=$gms[$i]->getIdMembre();
        }


        //var_dump($gm_membres);
        return $this->render('@Nozelites/Back/AdminGroupe.html.twig', array(
            'groupe' => $groupe,
            'membres' => $m_membres,
            'membres_b' => $m_bloquer,
        ));
    }

    public function supprimergroupeadminAction(Request $request, Groupe $id)
    {

        $em = $this->getDoctrine()->getManager();
        $gm = $em->getRepository('NozelitesBundle:GroupeMembre')
            ->findOneBy(array('idGroupe'=>$id));
        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);
        $em->remove($groupe);
        $em->remove($gm);
        $em->flush();


        return $this->redirectToRoute('nozelites_admingroupesback');
    }

    public function modifiergroupeadminAction(Request $request, Groupe $id)
    {
        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);
        $editForm = $this->createForm('NozelitesBundle\Form\GroupeType', $groupe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nozelites_admingroupesback');
        }

        return $this->render('@Nozelites/Back/AdminGroupeModifier.html.twig', array(
            'groupe' => $groupe,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function bloquermembreadminAction(Request $request, Groupe $id,Membre $idmembre)
    {
        $em = $this->getDoctrine()->getManager();

        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);

        //inviter membre
        $groupeMembre = $em->getRepository('NozelitesBundle:GroupeMembre')
            ->findOneBy(array('idGroupe'=>$id,
                'idMembre'=>$idmembre));
        $groupeMembre->setEtat("bloqué");
        $em->persist($groupeMembre);
        $em->flush();

        return $this->redirectToRoute('nozelites_admingroupeafficherback',array('id'=>$id->getIdGroupe()));
    }

    public function debloquermembreadminAction(Request $request, Groupe $id,Membre $idmembre)
    {
        $em = $this->getDoctrine()->getManager();

        $groupe = $em->getRepository('NozelitesBundle:Groupe')->find($id);

        //inviter membre
        $groupeMembre = $em->getRepository('NozelitesBundle:GroupeMembre')
            ->findOneBy(array('idGroupe'=>$id,
                'idMembre'=>$idmembre));
        $groupeMembre->setEtat("standard");
        if($groupeMembre->getIdInvite()==-1)$groupeMembre->setEtat("administrateur");
        $em->persist($groupeMembre);
        $em->flush();

        return $this->redirectToRoute('nozelites_admingroupeafficherback',array('id'=>$id->getIdGroupe()));
    }

    public function pdfGroupesAction()
    {
        //twig
        $em = $this->getDoctrine()->getManager();
        $groupes = $em->getRepository('NozelitesBundle:Groupe')->findAll();
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView(
            '@Nozelites/Default/groupe/index.html.twig', array('groupes' => $groupes)
        );
        $filename = 'myFirstSnappyPDF';
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );

        /* url
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $url = 'http://ourcodeworld.com';
        return new Response(
            $snappy->getOutput($url),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );*/
    }


}
