<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OffreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OffreBundle\\Controller\\OffreController::consulterOffresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/showoffres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OffreBundle\\Controller\\OffreController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/offre/supprimeroffre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OffreBundle\\Controller\\OffreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/ajouteroffre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OffreBundle\\Controller\\OffreController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/offre/modifieroffre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamation_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamation/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AjouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamation/AjoutReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamation_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AfficheRecAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamation/AfficheReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reclamation/DeleteReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reclamation/UpdateReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_homepagebac' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::AfficheRec1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamation/back',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ajouter1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::Ajouter1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamation/AjoutReclamation1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Traiter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::TraiterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reclamation/TraiterReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Deleteback' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::DeletebackAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reclamation/DeleteBack',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AjouterNote' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::AjoutNoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reclamation/AjoutNote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupemembre/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupemembre/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_show' => array (  0 =>   array (    0 => 'idGm',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGm',    ),    1 =>     array (      0 => 'text',      1 => '/groupemembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_edit' => array (  0 =>   array (    0 => 'idGm',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGm',    ),    2 =>     array (      0 => 'text',      1 => '/groupemembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupemembre_delete' => array (  0 =>   array (    0 => 'idGm',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeMembreController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGm',    ),    1 =>     array (      0 => 'text',      1 => '/groupemembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_homepagefront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\DefaultFrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupesfront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::showGroupesInvitationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontmembregroupes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupesajouterfront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::newgroupeInvitationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontmembregroupesajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupesaccepterinvitationfront' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::accepterinvitationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/frontmembregroupesaccepterinvitation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupesrefuserinvitationfront' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::refuserinvitationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/frontmembregroupesrefuserinvitation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupesmodifierfront' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::modifiergroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/frontmembregroupesmodifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupessupprimerfront' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::supprimergroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/frontmembregroupessupprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membregroupeafficherfront' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::affichergroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/frontmembregroupeafficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membreinviterfront' => array (  0 =>   array (    0 => 'id',    1 => 'idmembre',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::invitermembreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/frontmembreinviter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_membreretirerfront' => array (  0 =>   array (    0 => 'id',    1 => 'idmembre',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::retirermembreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/frontmembreretirer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupe/acceuil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupe/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundl	e:Groupe:show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'groupe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_homepageback' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\DefaultBackController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_admingroupesback' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::showGroupesadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backadmingroupes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_admingroupeafficherback' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::affichergroupeadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/backadmingroupe/afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_admingroupesupprimerback' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::supprimergroupeadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/backadmingroupe/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_admingroupemodifierback' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::modifiergroupeadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/backadmingroupe/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_adminbloquermembreback' => array (  0 =>   array (    0 => 'id',    1 => 'idmembre',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::bloquermembreadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/frontbloquermembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nozelites_admindebloquermembreback' => array (  0 =>   array (    0 => 'id',    1 => 'idmembre',  ),  1 =>   array (    '_controller' => 'NozelitesBundle\\Controller\\GroupeController::debloquermembreadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/frontdebloquermembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
