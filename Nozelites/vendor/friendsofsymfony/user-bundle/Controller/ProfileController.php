<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;


use NozelitesBundle\Entity\ChasseurTalent;
use NozelitesBundle\Entity\Formation;
use NozelitesBundle\Entity\Listediplome;


use NozelitesBundle\Entity\Membre;
use NozelitesBundle\Form\FormationType;
use NozelitesBundle\Form\ListediplomeType;
use NozelitesBundle\NozelitesBundle;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller
{
    private $eventDispatcher;
    private $formFactory;
    private $userManager;

    public function __construct(EventDispatcherInterface $eventDispatcher, FactoryInterface $formFactory, UserManagerInterface $userManager)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->formFactory = $formFactory;
        $this->userManager = $userManager;
    }

    /**
     * Show the user.
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        $formations = new Formation();
        $formations = $em->getRepository("NozelitesBundle:Formation")->findby(array('idMembre'=>$user->getId()));
        $listDiplome = new Listediplome();
        $listeDiplome = $em->getRepository("NozelitesBundle:Listediplome")->findby(array('idMembre'=>$user->getId()));

        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'user' => $user,
            'listFormation' => $formations,
            'listeDiplome' => $listeDiplome

        ));
    }

    /**
     * Edit the user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }



        //Formulaire de la fomation
        $formation = new Formation();
        $formF = $this->createForm(FormationType::class, $formation);
        $formF->handleRequest($request);
        $formation->setIdMembre($user);
        $formation->setMembre($user->getId());

        if ($formF->isSubmitted()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            return $this->redirectToRoute('fos_user_profile_show');


        }

        //Formulaire diplome
        $diplomes = new Listediplome();
        $formD = $this->createForm(listeDiplomeType::class, $diplomes);
        $formD->handleRequest($request);
        $diplomes->setIdMembre($user);
        $diplomes->setMembre($user->getId());


        if ($formD->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($diplomes);
            $em->flush();
            return $this->redirectToRoute('fos_user_profile_show');

        }



        //Formulaire du User
        $form = $this->formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();


        if ($form->isSubmitted() && $form->isValid()) {




            $event = new FormEvent($form, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $this->userManager->updateUser($user);
            
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $this->eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }
        $em = $this->getDoctrine()->getManager();
        $formations = new Formation();
        $formations = $em->getRepository("NozelitesBundle:Formation")->findby(array('idMembre'=>$user->getId()));

        return $this->render('@FOSUser/Profile/edit.html.twig', array(
            'form' => $form->createView(),
            'formulaire' => $formF->createView(),
            'listFormation' => $formations,
            'formD'=>$formD->createView(),
            'user'=>$user,
        ));
    }
}
