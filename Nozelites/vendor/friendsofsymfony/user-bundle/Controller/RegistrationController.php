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
use NozelitesBundle\Entity\Membre;

use NozelitesBundle\Entity\ChasseurTalent;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the registration.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends Controller
{
    private $eventDispatcher;
    private $formFactory;
    private $userManager;
    private $tokenStorage;

    public function __construct(EventDispatcherInterface $eventDispatcher, FactoryInterface $formFactory, UserManagerInterface $userManager, TokenStorageInterface $tokenStorage)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->formFactory = $formFactory;
        $this->userManager = $userManager;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function registerAction(Request $request)
    {

        if($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirectToRoute("nozelites_homepagefront");
        }

        $user = $this->userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $this->formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);


        $em = $this->getDoctrine()->getManager();

        if(in_array("ROLE_MEMBRE",$user->getRoles())){
            $case =1;
            
            $membre = new Membre();
            $membre->setNom($user->getNom());
            $membre->setPrenom($user->getPrenom());
            $membre->setMail($user->getEmail());
            $membre->setLogin($user->getUsername());
            $membre->setTel($user->getTelephone());
            $membre->setDate(date("y-m-d"));
            $membre->setType(1);
            $membre->setMdp($user->getPlainPassword());
            $membre->setAge($user->getAge());

        }
        elseif(in_array("ROLE_CHASSEUR",$user->getRoles())){
            $chasseur = new ChasseurTalent();
            $chasseur->setNom($user->getNom());
            $chasseur->setPrenom($user->getPrenom());
            $chasseur->setMail($user->getEmail());
            $chasseur->setLogin($user->getUsername());
            $chasseur->setTel($user->getTelephone());
            $chasseur->setDate(date("y-m-d"));
            $chasseur->setMdp($user->getPlainPassword());
            $chasseur->setAge($user->getAge());


            $case = 2;
        }
            
        
        

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);


                $this->userManager->updateUser($user);

                if($case === 1){
                    $membre->setImage("D:/xampp/htdocs/PIDEV_Web/Nozelites/web/images/".$user->getImageName());
                    $em->persist($membre);
                    $em->flush();
                }
                elseif ($case === 2){
                    $chasseur->setImage("D:/xampp/htdocs/PIDEV_Web/Nozelites/web/images/".$user->getImageName());
                    $em->persist($chasseur);
                    $em->flush();
                }

                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('nozelites_homepagefront');
                    $response = new RedirectResponse($url);
                }

                $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }

            $event = new FormEvent($form, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('@FOSUser/Registration/register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Tell the user to check their email provider.
     */
    public function checkEmailAction(Request $request)
    {
        $email = $request->getSession()->get('fos_user_send_confirmation_email/email');

        if (empty($email)) {
            return new RedirectResponse($this->generateUrl('fos_user_registration_register'));
        }

        $request->getSession()->remove('fos_user_send_confirmation_email/email');
        $user = $this->userManager->findUserByEmail($email);

        if (null === $user) {
            return new RedirectResponse($this->container->get('router')->generate('fos_user_security_login'));
        }

        return $this->render('@FOSUser/Registration/check_email.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user.
     *
     * @param Request $request
     * @param string  $token
     *
     * @return Response
     */
    public function confirmAction(Request $request, $token)
    {
        $userManager = $this->userManager;

        $user = $userManager->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);

        $userManager->updateUser($user);

        if (null === $response = $event->getResponse()) {
            $url = $this->generateUrl('fos_user_registration_confirmed');
            $response = new RedirectResponse($url);
        }

        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }

    /**
     * Tell the user his account is now confirmed.
     */
    public function confirmedAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('@FOSUser/Registration/confirmed.html.twig', array(
            'user' => $user,
            'targetUrl' => $this->getTargetUrlFromSession($request->getSession()),
        ));
    }

    /**
     * @return string|null
     */
    private function getTargetUrlFromSession(SessionInterface $session)
    {
        $key = sprintf('_security.%s.target_path', $this->tokenStorage->getToken()->getProviderKey());

        if ($session->has($key)) {
            return $session->get($key);
        }

        return null;
    }
}
