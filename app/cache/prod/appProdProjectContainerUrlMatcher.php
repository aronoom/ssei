<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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

                // activite_listeAjax
                if ($pathinfo === '/indicateurs/activite/liste/ajax') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::listeAjaxAction',  '_route' => 'activite_listeAjax',);
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
                // mc_liste
                if ($pathinfo === '/indicateurs/modeCalcul') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::listeAction',  '_route' => 'mc_liste',);
                }

                // mc_ajouter
                if ($pathinfo === '/indicateurs/modeCalcul/ajouter') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::ajouterAction',  '_route' => 'mc_ajouter',);
                }

                // mc_listeAjax
                if ($pathinfo === '/indicateurs/modeCalcul/liste/ajax') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::listeAjaxAction',  '_route' => 'mc_listeAjax',);
                }

                // mc_modifier
                if (0 === strpos($pathinfo, '/indicateurs/modeCalcul/modifier') && preg_match('#^/indicateurs/modeCalcul/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mc_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::modifierAction',));
                }

                // mc_supprimer
                if (rtrim($pathinfo, '/') === '/indicateurs/modeCalcul/supprimer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mc_supprimer');
                    }

                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::supprAction',  '_route' => 'mc_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/indicateurs/nature')) {
                // nature_liste
                if ($pathinfo === '/indicateurs/nature') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::listeAction',  '_route' => 'nature_liste',);
                }

                // nature_listeAjax
                if ($pathinfo === '/indicateurs/nature/liste/ajax') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::listeAjaxAction',  '_route' => 'nature_listeAjax',);
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

                // periodicite_listeAjax
                if ($pathinfo === '/indicateurs/periodicite/liste/ajax') {
                    return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::listeAjaxAction',  '_route' => 'periodicite_listeAjax',);
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

                    // sous_secteur_listeAjax
                    if ($pathinfo === '/indicateurs/sous_secteur/liste/ajax') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::listeAjaxAction',  '_route' => 'sous_secteur_listeAjax',);
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

                    // subdivision_listeAjax
                    if ($pathinfo === '/indicateurs/subdivision/liste/ajax') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::listeAjaxAction',  '_route' => 'subdivision_listeAjax',);
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
