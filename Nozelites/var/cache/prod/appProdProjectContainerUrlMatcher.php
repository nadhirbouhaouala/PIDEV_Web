<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // user_homepage
        if ('/user/homepage' === $pathinfo) {
            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // formation_supp
        if (0 === strpos($pathinfo, '/user/supprimerFormation') && preg_match('#^/user/supprimerFormation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'formation_supp']), array (  '_controller' => 'UserBundle\\Controller\\FormationController::supprimerFormationAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/listparticipant')) {
                // listparticipant_index
                if ('/listparticipant' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'NozelitesBundle\\Controller\\ListparticipantController::indexAction',  '_route' => 'listparticipant_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_listparticipant_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'listparticipant_index'));
                    }

                    return $ret;
                }
                not_listparticipant_index:

                // listparticipant_new
                if ('/listparticipant/new' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\ListparticipantController::newAction',  '_route' => 'listparticipant_new',);
                }

                // listparticipant_show
                if (preg_match('#^/listparticipant/(?P<ide>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'listparticipant_show']), array (  '_controller' => 'NozelitesBundle\\Controller\\ListparticipantController::showAction',));
                }

                // listparticipant_edit
                if (preg_match('#^/listparticipant/(?P<ide>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'listparticipant_edit']), array (  '_controller' => 'NozelitesBundle\\Controller\\ListparticipantController::editAction',));
                }

                // listparticipant_delete
                if (preg_match('#^/listparticipant/(?P<ide>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'listparticipant_delete']), array (  '_controller' => 'NozelitesBundle\\Controller\\ListparticipantController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/evenement')) {
            // evenement_index
            if ('/evenement' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_evenement_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'evenement_index'));
                }

                return $ret;
            }
            not_evenement_index:

            // evenement_new
            if ('/evenement/new' === $pathinfo) {
                return array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
            }

            // evenement_show
            if (preg_match('#^/evenement/(?P<ide>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_show']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::showAction',));
            }

            // evenement_edit
            if (preg_match('#^/evenement/(?P<ide>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_edit']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::editAction',));
            }

            // evenement_delete
            if (preg_match('#^/evenement/(?P<ide>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_delete']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/offre')) {
            // offre_homepage
            if ('/offre' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'OffreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'offre_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_offre_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'offre_homepage'));
                }

                return $ret;
            }
            not_offre_homepage:

            if (0 === strpos($pathinfo, '/offre/s')) {
                if (0 === strpos($pathinfo, '/offre/show')) {
                    if (0 === strpos($pathinfo, '/offre/showoffres')) {
                        // offre_liste
                        if ('/offre/showoffres' === $pathinfo) {
                            return array (  '_controller' => 'OffreBundle\\Controller\\OffreController::consulterOffresAction',  '_route' => 'offre_liste',);
                        }

                        // offre_liste_back
                        if ('/offre/showoffresback' === $pathinfo) {
                            return array (  '_controller' => 'OffreBundle\\Controller\\OffreController::consulterOffresBackAction',  '_route' => 'offre_liste_back',);
                        }

                        // offre_liste_membre
                        if ('/offre/showoffresmembre' === $pathinfo) {
                            return array (  '_controller' => 'OffreBundle\\Controller\\OffreController::consulterOffresMembreAction',  '_route' => 'offre_liste_membre',);
                        }

                    }

                    // message_showone
                    if (0 === strpos($pathinfo, '/offre/showonemessage') && preg_match('#^/offre/showonemessage(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'message_showone']), array (  '_controller' => 'OffreBundle\\Controller\\MessageController::consulterOneMessageAction',));
                    }

                    if (0 === strpos($pathinfo, '/offre/showmessages')) {
                        // message_liste
                        if ('/offre/showmessages' === $pathinfo) {
                            return array (  '_controller' => 'OffreBundle\\Controller\\MessageController::consulterMessagesAction',  '_route' => 'message_liste',);
                        }

                        // message_liste_envoyes
                        if ('/offre/showmessagesenvoyes' === $pathinfo) {
                            return array (  '_controller' => 'OffreBundle\\Controller\\MessageController::consulterMessagesEnvoyesAction',  '_route' => 'message_liste_envoyes',);
                        }

                    }

                }

                // offre_supprimer
                if (0 === strpos($pathinfo, '/offre/supprimeroffre') && preg_match('#^/offre/supprimeroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'offre_supprimer']), array (  '_controller' => 'OffreBundle\\Controller\\OffreController::deleteAction',));
                }

                // message_supprimer
                if (0 === strpos($pathinfo, '/offre/supprimermessage') && preg_match('#^/offre/supprimermessage/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'message_supprimer']), array (  '_controller' => 'OffreBundle\\Controller\\MessageController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/offre/a')) {
                // offre_accepter
                if (0 === strpos($pathinfo, '/offre/accepterOffre') && preg_match('#^/offre/accepterOffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'offre_accepter']), array (  '_controller' => 'OffreBundle\\Controller\\OffreController::accepterOffreAction',));
                }

                // offre_ajouter
                if ('/offre/ajouteroffre' === $pathinfo) {
                    return array (  '_controller' => 'OffreBundle\\Controller\\OffreController::newAction',  '_route' => 'offre_ajouter',);
                }

                // message_ajouter
                if ('/offre/ajoutermessage' === $pathinfo) {
                    return array (  '_controller' => 'OffreBundle\\Controller\\MessageController::newAction',  '_route' => 'message_ajouter',);
                }

            }

            // offre_refuser
            if (0 === strpos($pathinfo, '/offre/refuserOffre') && preg_match('#^/offre/refuserOffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'offre_refuser']), array (  '_controller' => 'OffreBundle\\Controller\\OffreController::refuserOffreAction',));
            }

            // message_repondre
            if (0 === strpos($pathinfo, '/offre/repondremessage') && preg_match('#^/offre/repondremessage(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'message_repondre']), array (  '_controller' => 'OffreBundle\\Controller\\MessageController::repondreAction',));
            }

            // offre_modifier
            if (0 === strpos($pathinfo, '/offre/modifieroffre') && preg_match('#^/offre/modifieroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'offre_modifier']), array (  '_controller' => 'OffreBundle\\Controller\\OffreController::updateAction',));
            }

            // message_transferer
            if (0 === strpos($pathinfo, '/offre/transferermessage') && preg_match('#^/offre/transferermessage(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'message_transferer']), array (  '_controller' => 'OffreBundle\\Controller\\MessageController::transfererAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reclamation')) {
                // reclamation_homepage
                if ('/reclamation/index' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reclamation_homepage',);
                }

                if (0 === strpos($pathinfo, '/reclamation/A')) {
                    // reclamation_show
                    if ('/reclamation/AfficheReclamation' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AfficheRecAction',  '_route' => 'reclamation_show',);
                    }

                    // AfficherNote
                    if (0 === strpos($pathinfo, '/reclamation/AfficherNote') && preg_match('#^/reclamation/AfficherNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AfficherNote']), array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::AfficherNoteAction',));
                    }

                    // Ajouter1
                    if (0 === strpos($pathinfo, '/reclamation/AjoutReclamation1') && preg_match('#^/reclamation/AjoutReclamation1/(?P<id>[^/]++)/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'Ajouter1']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::Ajouter1Action',));
                    }

                    if (0 === strpos($pathinfo, '/reclamation/AjoutNote')) {
                        // AjouterNote
                        if (preg_match('#^/reclamation/AjoutNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'AjouterNote']), array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::AjoutNoteAction',));
                        }

                        // AjouterNoteTest
                        if (0 === strpos($pathinfo, '/reclamation/AjoutNoteTest') && preg_match('#^/reclamation/AjoutNoteTest/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'AjouterNoteTest']), array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::AjoutNoteTestAction',));
                        }

                    }

                }

                // nozelites_homepagebac
                if ('/reclamation/back' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AfficheRec1Action',  '_route' => 'nozelites_homepagebac',);
                }

                // Traiter
                if (0 === strpos($pathinfo, '/reclamation/TraiterReclamation') && preg_match('#^/reclamation/TraiterReclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Traiter']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::TraiterAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/groupe')) {
            if (0 === strpos($pathinfo, '/groupemembre')) {
                // groupemembre_index
                if ('/groupemembre' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::indexAction',  '_route' => 'groupemembre_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_groupemembre_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'groupemembre_index'));
                    }

                    return $ret;
                }
                not_groupemembre_index:

                // groupemembre_new
                if ('/groupemembre/new' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::newAction',  '_route' => 'groupemembre_new',);
                }

                // groupemembre_show
                if (preg_match('#^/groupemembre/(?P<idGm>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupemembre_show']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::showAction',));
                }

                // groupemembre_edit
                if (preg_match('#^/groupemembre/(?P<idGm>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupemembre_edit']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::editAction',));
                }

                // groupemembre_delete
                if (preg_match('#^/groupemembre/(?P<idGm>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupemembre_delete']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/groupe/a')) {
                // groupe_index
                if ('/groupe/acceuil' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::indexAction',  '_route' => 'groupe_index',);
                }

                // groupe_new
                if ('/groupe/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::newAction',  '_route' => 'groupe_new',);
                }

                // groupe_show
                if (0 === strpos($pathinfo, '/groupe/afficher') && preg_match('#^/groupe/afficher/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupe_show']), array (  '_controller' => 'NozelitesBundl	e:Groupe:show',));
                }

            }

            // groupe_edit
            if (0 === strpos($pathinfo, '/groupe/modifier') && preg_match('#^/groupe/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupe_edit']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::editAction',));
            }

            // groupe_delete
            if (0 === strpos($pathinfo, '/groupe/supprimer') && preg_match('#^/groupe/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupe_delete']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/front')) {
            // nozelites_homepagefront
            if ('/front' === $pathinfo) {
                return array (  '_controller' => 'NozelitesBundle\\Controller\\DefaultFrontController::indexAction',  '_route' => 'nozelites_homepagefront',);
            }

            if (0 === strpos($pathinfo, '/frontEvenement')) {
                // nozelites_Evenementajouterfront
                if ('/frontEvenementAjouter' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::newAction',  '_route' => 'nozelites_Evenementajouterfront',);
                }

                if (0 === strpos($pathinfo, '/frontEvenementAfficher')) {
                    // nozelites_Evenementafficherfront
                    if ('/frontEvenementAfficher' === $pathinfo) {
                        return array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::afficherAction',  '_route' => 'nozelites_Evenementafficherfront',);
                    }

                    // nozelites_AllEvenementfront
                    if ('/frontEvenementAfficherall' === $pathinfo) {
                        return array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::afficherAllAction',  '_route' => 'nozelites_AllEvenementfront',);
                    }

                }

                // nozelites_Evenementmodifierfront
                if (0 === strpos($pathinfo, '/frontEvenementmodifier') && preg_match('#^/frontEvenementmodifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_Evenementmodifierfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::editAction',));
                }

                // nozelites_Evenementsupprimerfront
                if (0 === strpos($pathinfo, '/frontEvenementsupprimer') && preg_match('#^/frontEvenementsupprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_Evenementsupprimerfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::deleteAction',));
                }

                // nozelites_EvenementRejoindrefront
                if (0 === strpos($pathinfo, '/frontEvenementrejoindre') && preg_match('#^/frontEvenementrejoindre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_EvenementRejoindrefront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::rejoindreAction',));
                }

                // nozelites_EvenementRefuserfront
                if (0 === strpos($pathinfo, '/frontEvenementrefuser') && preg_match('#^/frontEvenementrefuser/(?P<id>[^/]++)/(?P<idm>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_EvenementRefuserfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::refuserParticipantAction',));
                }

                // nozelites_EvenementAccepterfront
                if (0 === strpos($pathinfo, '/frontEvenementaccepter') && preg_match('#^/frontEvenementaccepter/(?P<id>[^/]++)/(?P<idm>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_EvenementAccepterfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::accepterParticipantAction',));
                }

                // nozelites_Evenementdisjoindrefront
                if (0 === strpos($pathinfo, '/frontEvenementdisjoindre') && preg_match('#^/frontEvenementdisjoindre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_Evenementdisjoindrefront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::disjoindreAction',));
                }

                if (0 === strpos($pathinfo, '/frontEvenementpage')) {
                    // nozelites_Evenementpagefront
                    if (preg_match('#^/frontEvenementpage/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_Evenementpagefront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::afficherEventAction',));
                    }

                    // nozelites_EvenementpageMfront
                    if (0 === strpos($pathinfo, '/frontEvenementpageM') && preg_match('#^/frontEvenementpageM/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_EvenementpageMfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::afficherEventMAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/frontmembre')) {
                if (0 === strpos($pathinfo, '/frontmembregroupes')) {
                    // nozelites_membregroupesfront
                    if ('/frontmembregroupes' === $pathinfo) {
                        return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::showGroupesInvitationsAction',  '_route' => 'nozelites_membregroupesfront',);
                    }

                    // nozelites_membregroupesajouterfront
                    if ('/frontmembregroupesajouter' === $pathinfo) {
                        return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::newgroupeInvitationAction',  '_route' => 'nozelites_membregroupesajouterfront',);
                    }

                    // nozelites_membregroupesaccepterinvitationfront
                    if (0 === strpos($pathinfo, '/frontmembregroupesaccepterinvitation') && preg_match('#^/frontmembregroupesaccepterinvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membregroupesaccepterinvitationfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::accepterinvitationAction',));
                    }

                    // nozelites_membregroupesrefuserinvitationfront
                    if (0 === strpos($pathinfo, '/frontmembregroupesrefuserinvitation') && preg_match('#^/frontmembregroupesrefuserinvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membregroupesrefuserinvitationfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::refuserinvitationAction',));
                    }

                    // nozelites_membregroupesmodifierfront
                    if (0 === strpos($pathinfo, '/frontmembregroupesmodifier') && preg_match('#^/frontmembregroupesmodifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membregroupesmodifierfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::modifiergroupeAction',));
                    }

                    // nozelites_membregroupessupprimerfront
                    if (0 === strpos($pathinfo, '/frontmembregroupessupprimer') && preg_match('#^/frontmembregroupessupprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membregroupessupprimerfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::supprimergroupeAction',));
                    }

                }

                // nozelites_membregroupeafficherfront
                if (0 === strpos($pathinfo, '/frontmembregroupeafficher') && preg_match('#^/frontmembregroupeafficher/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membregroupeafficherfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::affichergroupeAction',));
                }

                // nozelites_membreinviterfront
                if (0 === strpos($pathinfo, '/frontmembreinviter') && preg_match('#^/frontmembreinviter/(?P<id>[^/]++)/(?P<idmembre>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membreinviterfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::invitermembreAction',));
                }

                // nozelites_membreretirerfront
                if (0 === strpos($pathinfo, '/frontmembreretirer') && preg_match('#^/frontmembreretirer/(?P<id>[^/]++)/(?P<idmembre>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_membreretirerfront']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::retirermembreAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/back')) {
            // nozelites_homepageback
            if ('/back' === $pathinfo) {
                return array (  '_controller' => 'NozelitesBundle\\Controller\\DefaultBackController::indexAction',  '_route' => 'nozelites_homepageback',);
            }

            if (0 === strpos($pathinfo, '/backadmingroupe')) {
                // nozelites_admingroupesback
                if ('/backadmingroupes' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::showGroupesadminAction',  '_route' => 'nozelites_admingroupesback',);
                }

                // nozelites_admingroupeafficherback
                if (0 === strpos($pathinfo, '/backadmingroupe/afficher') && preg_match('#^/backadmingroupe/afficher/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_admingroupeafficherback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::affichergroupeadminAction',));
                }

                // nozelites_admingroupesupprimerback
                if (0 === strpos($pathinfo, '/backadmingroupe/supprimer') && preg_match('#^/backadmingroupe/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_admingroupesupprimerback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::supprimergroupeadminAction',));
                }

                // nozelites_admingroupemodifierback
                if (0 === strpos($pathinfo, '/backadmingroupe/modifier') && preg_match('#^/backadmingroupe/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_admingroupemodifierback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::modifiergroupeadminAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/backadminEvenement')) {
                // nozelites_adminEvenementback
                if ('/backadminEvenement' === $pathinfo) {
                    return array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::showEvenementadminAction',  '_route' => 'nozelites_adminEvenementback',);
                }

                if (0 === strpos($pathinfo, '/backadminEvenementall')) {
                    // nozelites_adminEvenementAllback
                    if ('/backadminEvenementall' === $pathinfo) {
                        return array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::afficherEventAllAction',  '_route' => 'nozelites_adminEvenementAllback',);
                    }

                    // nozelites_adminEvenementAllsupprimerback
                    if (0 === strpos($pathinfo, '/backadminEvenementall/delete') && preg_match('#^/backadminEvenementall/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_adminEvenementAllsupprimerback']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::supprimerEventAlladminAction',));
                    }

                }

                // nozelites_adminEvenementsupprimerback
                if (0 === strpos($pathinfo, '/backadminEvenement/supprimer') && preg_match('#^/backadminEvenement/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_adminEvenementsupprimerback']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::supprimerEvenementadminAction',));
                }

                // nozelites_adminEvenementAccepterback
                if (0 === strpos($pathinfo, '/backadminEvenement/accepter') && preg_match('#^/backadminEvenement/accepter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_adminEvenementAccepterback']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::accepterEventAction',));
                }

                // nozelites_adminEvenementPageback
                if (0 === strpos($pathinfo, '/backadminEvenement/page') && preg_match('#^/backadminEvenement/page/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_adminEvenementPageback']), array (  '_controller' => 'NozelitesBundle\\Controller\\EvenementController::afficherEventadminAction',));
                }

            }

            // nozelites_adminbloquermembreback
            if (0 === strpos($pathinfo, '/backbloquermembre') && preg_match('#^/backbloquermembre/(?P<id>[^/]++)/(?P<idmembre>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_adminbloquermembreback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::bloquermembreadminAction',));
            }

            // nozelites_admindebloquermembreback
            if (0 === strpos($pathinfo, '/backdebloquermembre') && preg_match('#^/backdebloquermembre/(?P<id>[^/]++)/(?P<idmembre>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_admindebloquermembreback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::debloquermembreadminAction',));
            }

            // nozelites_adminpdfgroupesback
            if ('/backpdfgroupes' === $pathinfo) {
                return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::pdfGroupesAction',  '_route' => 'nozelites_adminpdfgroupesback',);
            }

        }

        elseif (0 === strpos($pathinfo, '/publication')) {
            // publication_homepage
            if ('/publication/index' === $pathinfo) {
                return array (  '_controller' => 'PublicationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'publication_homepage',);
            }

            if (0 === strpos($pathinfo, '/publication/A')) {
                // Ajouter
                if ('/publication/AjoutPublication' === $pathinfo) {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AjouterAction',  '_route' => 'Ajouter',);
                }

                // AjouterComm
                if (0 === strpos($pathinfo, '/publication/AjoutCommentaire') && preg_match('#^/publication/AjoutCommentaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AjouterComm']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AjouterCommAction',));
                }

                if (0 === strpos($pathinfo, '/publication/Affiche')) {
                    if (0 === strpos($pathinfo, '/publication/AffichePublication')) {
                        // Afficher
                        if ('/publication/AffichePublication' === $pathinfo) {
                            return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AffichepubAction',  '_route' => 'Afficher',);
                        }

                        // Afficherback
                        if ('/publication/AffichePublicationback' === $pathinfo) {
                            return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AffichepubbackAction',  '_route' => 'Afficherback',);
                        }

                    }

                    // AfficherComm
                    if ('/publication/AfficherCommentaire' === $pathinfo) {
                        return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AfficheCommAction',  '_route' => 'AfficherComm',);
                    }

                    if (0 === strpos($pathinfo, '/publication/Affichecommentaire')) {
                        // Affichercommentaire
                        if ('/publication/Affichecommentaire' === $pathinfo) {
                            return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AffichecommentaireAction',  '_route' => 'Affichercommentaire',);
                        }

                        // Affichercommback
                        if ('/publication/Affichecommentaireback' === $pathinfo) {
                            return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::AffichecommbackAction',  '_route' => 'Affichercommback',);
                        }

                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/publication/DeletePublication')) {
                // Delete
                if (preg_match('#^/publication/DeletePublication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Delete']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::DeleteAction',));
                }

                // Deleteback
                if (0 === strpos($pathinfo, '/publication/DeletePublicationback') && preg_match('#^/publication/DeletePublicationback/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Deleteback']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::DeletebackAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/publication/Deletecommentaire')) {
                // Deletecomm
                if (preg_match('#^/publication/Deletecommentaire/(?P<idCommentaire>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Deletecomm']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::DeletecommAction',));
                }

                // Deletecommback
                if (0 === strpos($pathinfo, '/publication/Deletecommentaireback') && preg_match('#^/publication/Deletecommentaireback/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Deletecommback']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::DeletecommbackAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/publication/UpdatePublication')) {
                // Update
                if (preg_match('#^/publication/UpdatePublication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Update']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::UpdateAction',));
                }

                // Updateback
                if (0 === strpos($pathinfo, '/publication/UpdatePublicationback') && preg_match('#^/publication/UpdatePublicationback/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Updateback']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::UpdatebackAction',));
                }

            }

            // Updatecomm
            if (0 === strpos($pathinfo, '/publication/Updatecommentaire') && preg_match('#^/publication/Updatecommentaire/(?P<idCommentaire>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Updatecomm']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::UpdatecommAction',));
            }

            // Commentaire
            if (0 === strpos($pathinfo, '/publication/Commentaire') && preg_match('#^/publication/Commentaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Commentaire']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::CommentaireAction',));
            }

            // jaime
            if (0 === strpos($pathinfo, '/publication/jaime') && preg_match('#^/publication/jaime/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'jaime']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::jaimeAction',));
            }

            // Imprimer
            if (0 === strpos($pathinfo, '/publication/Imprimer') && preg_match('#^/publication/Imprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Imprimer']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::ImprimerAction',));
            }

            // Topone
            if ('/publication/Topone' === $pathinfo) {
                return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::TopeoneAction',  '_route' => 'Topone',);
            }

            // map
            if ('/publication/map' === $pathinfo) {
                return array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::mapAction',  '_route' => 'map',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        // homepage
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
