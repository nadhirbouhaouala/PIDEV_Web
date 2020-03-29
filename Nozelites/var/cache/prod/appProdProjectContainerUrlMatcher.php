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

        if (0 === strpos($pathinfo, '/groupe')) {
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

            // groupe_index
            if ('/groupe' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::indexAction',  '_route' => 'groupe_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_groupe_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'groupe_index'));
                }

                return $ret;
            }
            not_groupe_index:

            // groupe_new
            if ('/groupe/new' === $pathinfo) {
                return array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::newAction',  '_route' => 'groupe_new',);
            }

            // groupe_show
            if (preg_match('#^/groupe/(?P<idGroupe>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupe_show']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::showAction',));
            }

            // groupe_edit
            if (preg_match('#^/groupe/(?P<idGroupe>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupe_edit']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::editAction',));
            }

            // groupe_delete
            if (preg_match('#^/groupe/(?P<idGroupe>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'groupe_delete']), array (  '_controller' => 'NozelitesBundle\\Controller\\GroupeController::deleteAction',));
            }

        }

        // nozelites_homepagefront
        if ('/front' === $pathinfo) {
            return array (  '_controller' => 'NozelitesBundle\\Controller\\DefaultFrontController::indexAction',  '_route' => 'nozelites_homepagefront',);
        }

        // nozelites_homepageback
        if ('/back' === $pathinfo) {
            return array (  '_controller' => 'NozelitesBundle\\Controller\\DefaultBackController::indexAction',  '_route' => 'nozelites_homepageback',);
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
