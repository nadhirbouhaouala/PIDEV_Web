<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'groupemembre_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupemembre/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupemembre/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_show' => array (  0 =>   array (    0 => 'idGm',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGm',    ),    1 =>     array (      0 => 'text',      1 => '/groupemembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_edit' => array (  0 =>   array (    0 => 'idGm',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGm',    ),    2 =>     array (      0 => 'text',      1 => '/groupemembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_delete' => array (  0 =>   array (    0 => 'idGm',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGm',    ),    1 =>     array (      0 => 'text',      1 => '/groupemembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_show' => array (  0 =>   array (    0 => 'idGroupe',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGroupe',    ),    1 =>     array (      0 => 'text',      1 => '/groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_edit' => array (  0 =>   array (    0 => 'idGroupe',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGroupe',    ),    2 =>     array (      0 => 'text',      1 => '/groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_delete' => array (  0 =>   array (    0 => 'idGroupe',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGroupe',    ),    1 =>     array (      0 => 'text',      1 => '/groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_homepagefront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\DefaultFrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_homepageback' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\DefaultBackController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
