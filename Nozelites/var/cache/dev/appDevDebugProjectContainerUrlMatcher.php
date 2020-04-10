<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
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

            // offre_liste
            if ('/offre/showoffres' === $pathinfo) {
                return array (  '_controller' => 'OffreBundle\\Controller\\OffreController::consulterOffresAction',  '_route' => 'offre_liste',);
            }

            // offre_supprimer
            if (0 === strpos($pathinfo, '/offre/supprimeroffre') && preg_match('#^/offre/supprimeroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'offre_supprimer']), array (  '_controller' => 'OffreBundle\\Controller\\OffreController::deleteAction',));
            }

            // offre_ajouter
            if ('/offre/ajouteroffre' === $pathinfo) {
                return array (  '_controller' => 'OffreBundle\\Controller\\OffreController::newAction',  '_route' => 'offre_ajouter',);
            }

            // offre_modifier
            if (0 === strpos($pathinfo, '/offre/modifieroffre') && preg_match('#^/offre/modifieroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'offre_modifier']), array (  '_controller' => 'OffreBundle\\Controller\\OffreController::updateAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/reclamation')) {
            // reclamation_homepage
            if ('/reclamation/index' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reclamation_homepage',);
            }

            if (0 === strpos($pathinfo, '/reclamation/A')) {
                if (0 === strpos($pathinfo, '/reclamation/AjoutReclamation')) {
                    // Ajouter
                    if ('/reclamation/AjoutReclamation' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AjouterAction',  '_route' => 'Ajouter',);
                    }

                    // Ajouter1
                    if ('/reclamation/AjoutReclamation1' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::Ajouter1Action',  '_route' => 'Ajouter1',);
                    }

                }

                // AjouterNote
                if (0 === strpos($pathinfo, '/reclamation/AjoutNote') && preg_match('#^/reclamation/AjoutNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AjouterNote']), array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::AjoutNoteAction',));
                }

                // reclamation_show
                if ('/reclamation/AfficheReclamation' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AfficheRecAction',  '_route' => 'reclamation_show',);
                }

            }

            // Delete
            if (0 === strpos($pathinfo, '/reclamation/DeleteReclamation') && preg_match('#^/reclamation/DeleteReclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Delete']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::DeleteAction',));
            }

            // Deleteback
            if (0 === strpos($pathinfo, '/reclamation/DeleteBack') && preg_match('#^/reclamation/DeleteBack/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Deleteback']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::DeletebackAction',));
            }

            // Update
            if (0 === strpos($pathinfo, '/reclamation/UpdateReclamation') && preg_match('#^/reclamation/UpdateReclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Update']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::UpdateAction',));
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

            if (0 === strpos($pathinfo, '/frontmembre')) {
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

            // nozelites_adminbloquermembreback
            if (0 === strpos($pathinfo, '/frontbloquermembre') && preg_match('#^/frontbloquermembre/(?P<id>[^/]++)/(?P<idmembre>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_adminbloquermembreback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::bloquermembreadminAction',));
            }

            // nozelites_admindebloquermembreback
            if (0 === strpos($pathinfo, '/frontdebloquermembre') && preg_match('#^/frontdebloquermembre/(?P<id>[^/]++)/(?P<idmembre>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'nozelites_admindebloquermembreback']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::debloquermembreadminAction',));
            }

        }

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

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
