<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/zone')) {
            // zone_homepage
            if (rtrim($pathinfo, '/') === '/zone') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zone_homepage');
                }

                return array (  '_controller' => 'ZoneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'zone_homepage',);
            }

            // zone_lister_region
            if ($pathinfo === '/zone/lister_region') {
                return array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::listerAction',  '_route' => 'zone_lister_region',);
            }

            // zone_ajouter_region
            if ($pathinfo === '/zone/ajouter_region') {
                return array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::ajouterAction',  '_route' => 'zone_ajouter_region',);
            }

            // zone_supprimer_region
            if (0 === strpos($pathinfo, '/zone/supprimer_region') && preg_match('#^/zone/supprimer_region/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_supprimer_region')), array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::supprimerAction',));
            }

            // zone_modifier_region
            if (0 === strpos($pathinfo, '/zone/modifier_region') && preg_match('#^/zone/modifier_region/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_modifier_region')), array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::modifierAction',));
            }

            // zone_lister_district
            if (0 === strpos($pathinfo, '/zone/lister_district') && preg_match('#^/zone/lister_district/(?P<region_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_lister_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::listerAction',));
            }

            // zone_ajouter_district
            if (0 === strpos($pathinfo, '/zone/ajouter_district') && preg_match('#^/zone/ajouter_district/(?P<region_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_ajouter_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::ajouterAction',));
            }

            // zone_supprimer_district
            if (0 === strpos($pathinfo, '/zone/supprimer_district') && preg_match('#^/zone/supprimer_district/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_supprimer_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::supprimerAction',));
            }

            // zone_modifier_district
            if (0 === strpos($pathinfo, '/zone/modifier_district') && preg_match('#^/zone/modifier_district/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_modifier_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::modifierAction',));
            }

            // zone_lister_commune
            if (0 === strpos($pathinfo, '/zone/lister_commune') && preg_match('#^/zone/lister_commune/(?P<district_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_lister_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::listerAction',));
            }

            // zone_ajouter_commune
            if (0 === strpos($pathinfo, '/zone/ajouter_commune') && preg_match('#^/zone/ajouter_commune/(?P<district_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_ajouter_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::ajouterAction',));
            }

            // zone_supprimer_commune
            if (0 === strpos($pathinfo, '/zone/supprimer_commune') && preg_match('#^/zone/supprimer_commune/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_supprimer_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::supprimerAction',));
            }

            // zone_modifier_commune
            if (0 === strpos($pathinfo, '/zone/modifier_commune') && preg_match('#^/zone/modifier_commune/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_modifier_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::modifierAction',));
            }

        }

        if (0 === strpos($pathinfo, '/indicateurs')) {
            if (0 === strpos($pathinfo, '/indicateurs/indicateur')) {
                // indicateur_liste
                if ($pathinfo === '/indicateurs/indicateur') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::listeAction',  '_route' => 'indicateur_liste',);
                }

                // indicateur_ajouter
                if ($pathinfo === '/indicateurs/indicateur/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::ajouterAction',  '_route' => 'indicateur_ajouter',);
                }

                // indicateur_listeAjax
                if ($pathinfo === '/indicateurs/indicateur/listeN1/ajax') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::listeAjaxAction',  '_route' => 'indicateur_listeAjax',);
                }

                // indicateur_modifier
                if (0 === strpos($pathinfo, '/indicateurs/indicateur/modifier') && preg_match('#^/indicateurs/indicateur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicateur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::modifierAction',));
                }

                // indicateur_supprimer
                if (rtrim($pathinfo, '/') === '/indicateurs/indicateur/supprimer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'indicateur_supprimer');
                    }

                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::supprAction',  '_route' => 'indicateur_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/activite')) {
                // activite_liste
                if ($pathinfo === '/indicateurs/activite') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::listeAction',  '_route' => 'activite_liste',);
                }

                // activite_ajouter
                if ($pathinfo === '/indicateurs/activite/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::ajouterAction',  '_route' => 'activite_ajouter',);
                }

                // activite_modifier
                if (0 === strpos($pathinfo, '/indicateurs/activite/modifier') && preg_match('#^/indicateurs/activite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::modifierAction',));
                }

                // activite_supprimer
                if ($pathinfo === '/indicateurs/activite/supprimer') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::supprAction',  '_route' => 'activite_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/modeCalcul')) {
                // modeCalcul_liste
                if ($pathinfo === '/indicateurs/modeCalcul') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::listeAction',  '_route' => 'modeCalcul_liste',);
                }

                // modeCalcul_ajouter
                if ($pathinfo === '/indicateurs/modeCalcul/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::ajouterAction',  '_route' => 'modeCalcul_ajouter',);
                }

                // modeCalcul_modifier
                if (0 === strpos($pathinfo, '/indicateurs/modeCalcul/modifier') && preg_match('#^/indicateurs/modeCalcul/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modeCalcul_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::modifierAction',));
                }

                // modeCalcul_supprimer
                if ($pathinfo === '/indicateurs/modeCalcul/supprimer') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::supprAction',  '_route' => 'modeCalcul_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/nature')) {
                // nature_liste
                if ($pathinfo === '/indicateurs/nature') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::listeAction',  '_route' => 'nature_liste',);
                }

                // nature_ajouter
                if ($pathinfo === '/indicateurs/nature/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::ajouterAction',  '_route' => 'nature_ajouter',);
                }

                // nature_modifier
                if (0 === strpos($pathinfo, '/indicateurs/nature/modifier') && preg_match('#^/indicateurs/nature/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nature_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::modifierAction',));
                }

                // nature_supprimer
                if ($pathinfo === '/indicateurs/nature/supprimer') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::supprAction',  '_route' => 'nature_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/periodicite')) {
                // periodicite_liste
                if ($pathinfo === '/indicateurs/periodicite') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::listeAction',  '_route' => 'periodicite_liste',);
                }

                // periodicite_ajouter
                if ($pathinfo === '/indicateurs/periodicite/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::ajouterAction',  '_route' => 'periodicite_ajouter',);
                }

                // periodicite_modifier
                if (0 === strpos($pathinfo, '/indicateurs/periodicite/modifier') && preg_match('#^/indicateurs/periodicite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodicite_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::modifierAction',));
                }

                // periodicite_supprimer
                if ($pathinfo === '/indicateurs/periodicite/supprimer') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::supprAction',  '_route' => 'periodicite_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/s')) {
                if (0 === strpos($pathinfo, '/indicateurs/sous_secteur')) {
                    // sous_secteur_liste
                    if ($pathinfo === '/indicateurs/sous_secteur') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::listeAction',  '_route' => 'sous_secteur_liste',);
                    }

                    // sous_secteur_ajouter
                    if ($pathinfo === '/indicateurs/sous_secteur/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::ajouterAction',  '_route' => 'sous_secteur_ajouter',);
                    }

                    // sous_secteur_modifier
                    if (0 === strpos($pathinfo, '/indicateurs/sous_secteur/modifier') && preg_match('#^/indicateurs/sous_secteur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_secteur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::modifierAction',));
                    }

                    // sous_secteur_supprimer
                    if ($pathinfo === '/indicateurs/sous_secteur/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::supprAction',  '_route' => 'sous_secteur_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/indicateurs/subdivision')) {
                    // subdivision_liste
                    if ($pathinfo === '/indicateurs/subdivision') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::listeAction',  '_route' => 'subdivision_liste',);
                    }

                    // subdivision_ajouter
                    if ($pathinfo === '/indicateurs/subdivision/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::ajouterAction',  '_route' => 'subdivision_ajouter',);
                    }

                    // subdivision_modifier
                    if (0 === strpos($pathinfo, '/indicateurs/subdivision/modifier') && preg_match('#^/indicateurs/subdivision/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'subdivision_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::modifierAction',));
                    }

                    // subdivision_supprimer
                    if ($pathinfo === '/indicateurs/subdivision/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::supprAction',  '_route' => 'subdivision_supprimer',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/type_indicateur')) {
                // type_indicateur_liste
                if ($pathinfo === '/indicateurs/type_indicateur') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::listeAction',  '_route' => 'type_indicateur_liste',);
                }

                // type_indicateur_ajouter
                if ($pathinfo === '/indicateurs/type_indicateur/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::ajouterAction',  '_route' => 'type_indicateur_ajouter',);
                }

                // type_indicateur_modifier
                if (0 === strpos($pathinfo, '/indicateurs/type_indicateur/modifier') && preg_match('#^/indicateurs/type_indicateur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_indicateur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::modifierAction',));
                }

                // type_indicateur_supprimer
                if ($pathinfo === '/indicateurs/type_indicateur/supprimer') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::supprAction',  '_route' => 'type_indicateur_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/unite_indicateur')) {
                // unite_indicateur_liste
                if ($pathinfo === '/indicateurs/unite_indicateur') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::listeAction',  '_route' => 'unite_indicateur_liste',);
                }

                // unite_indicateur_ajouter
                if ($pathinfo === '/indicateurs/unite_indicateur/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::ajouterAction',  '_route' => 'unite_indicateur_ajouter',);
                }

                // unite_indicateur_modifier
                if (0 === strpos($pathinfo, '/indicateurs/unite_indicateur/modifier') && preg_match('#^/indicateurs/unite_indicateur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'unite_indicateur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::modifierAction',));
                }

                // unite_indicateur_supprimer
                if ($pathinfo === '/indicateurs/unite_indicateur/supprimer') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::supprAction',  '_route' => 'unite_indicateur_supprimer',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/utilisateurs')) {
            // user_admin_homepage
            if (rtrim($pathinfo, '/') === '/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_admin_homepage');
                }

                return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/utilisateurs/users')) {
                // user_admin_userList
                if ($pathinfo === '/utilisateurs/users') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userListAction',  '_route' => 'user_admin_userList',);
                }

                // user_admin_userAdd
                if ($pathinfo === '/utilisateurs/users/ajouter') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_admin_userAdd;
                    }

                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userAddAction',  '_route' => 'user_admin_userAdd',);
                }
                not_user_admin_userAdd:

                // user_admin_userEdit
                if (0 === strpos($pathinfo, '/utilisateurs/users/modifier') && preg_match('#^/utilisateurs/users/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_admin_userEdit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_userEdit')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userEditAction',));
                }
                not_user_admin_userEdit:

                // user_admin_userDel
                if ($pathinfo === '/utilisateurs/users/supprimer/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_admin_userDel;
                    }

                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userDelAction',  '_route' => 'user_admin_userDel',);
                }
                not_user_admin_userDel:

            }

            if (0 === strpos($pathinfo, '/utilisateurs/groups')) {
                // groupe_user_liste
                if ($pathinfo === '/utilisateurs/groups') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::listeAction',  '_route' => 'groupe_user_liste',);
                }

                // groupe_user_ajouter
                if ($pathinfo === '/utilisateurs/groups/ajouter') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::ajouterAction',  '_route' => 'groupe_user_ajouter',);
                }

                // groupe_user_modifier
                if (0 === strpos($pathinfo, '/utilisateurs/groups/modifier') && preg_match('#^/utilisateurs/groups/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_user_modifier')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::modifierAction',));
                }

                // groupe_user_supprimer
                if ($pathinfo === '/utilisateurs/groups/supprimer') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::supprAction',  '_route' => 'groupe_user_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/utilisateurs/entites')) {
                // entite_liste
                if ($pathinfo === '/utilisateurs/entites') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::listeAction',  '_route' => 'entite_liste',);
                }

                // entite_ajouter
                if ($pathinfo === '/utilisateurs/entites/ajouter') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::ajouterAction',  '_route' => 'entite_ajouter',);
                }

                // entite_modifier
                if (0 === strpos($pathinfo, '/utilisateurs/entites/modifier') && preg_match('#^/utilisateurs/entites/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entite_modifier')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::modifierAction',));
                }

                // entite_supprimer
                if ($pathinfo === '/utilisateurs/entites/supprimer') {
                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::supprAction',  '_route' => 'entite_supprimer',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
