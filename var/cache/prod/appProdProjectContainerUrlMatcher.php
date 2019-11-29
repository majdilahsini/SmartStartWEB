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

        if (0 === strpos($pathinfo, '/formation')) {
            // formations_index
            if ('/formation' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::indexAction',  '_route' => 'formations_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_formations_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'formations_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_formations_index;
                }

                return $ret;
            }
            not_formations_index:

            // formations_index_all
            if ('/formation/all' === $pathinfo) {
                $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::indexallAction',  '_route' => 'formations_index_all',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_formations_index_all;
                }

                return $ret;
            }
            not_formations_index_all:

            // formations_show
            if (preg_match('#^/formation/(?P<ref>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_show']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_formations_show;
                }

                return $ret;
            }
            not_formations_show:

            // formations_new
            if ('/formation/new' === $pathinfo) {
                $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::newAction',  '_route' => 'formations_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_formations_new;
                }

                return $ret;
            }
            not_formations_new:

            // formations_edit
            if (preg_match('#^/formation/(?P<ref>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_edit']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_formations_edit;
                }

                return $ret;
            }
            not_formations_edit:

            // formations_delete
            if (preg_match('#^/formation/(?P<ref>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_delete']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_formations_delete;
                }

                return $ret;
            }
            not_formations_delete:

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        if (0 === strpos($pathinfo, '/re')) {
            // redirect_login
            if ('/redirect' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::redirectAction',  '_route' => 'redirect_login',);
            }

            if (0 === strpos($pathinfo, '/register')) {
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

        elseif (0 === strpos($pathinfo, '/offre')) {
            if (0 === strpos($pathinfo, '/offre/offres')) {
                // offres_index
                if ('/offre/offres' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'OffreBundle\\Controller\\OffresController::indexAction',  '_route' => 'offres_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_offres_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'offres_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_offres_index;
                    }

                    return $ret;
                }
                not_offres_index:

                // offres_show
                if (preg_match('#^/offre/offres/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'offres_show']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_offres_show;
                    }

                    return $ret;
                }
                not_offres_show:

                // offres_new
                if ('/offre/offres/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'OffreBundle\\Controller\\OffresController::newAction',  '_route' => 'offres_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_offres_new;
                    }

                    return $ret;
                }
                not_offres_new:

                // offres_edit
                if (preg_match('#^/offre/offres/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'offres_edit']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_offres_edit;
                    }

                    return $ret;
                }
                not_offres_edit:

                // offres_delete
                if (preg_match('#^/offre/offres/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'offres_delete']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_offres_delete;
                    }

                    return $ret;
                }
                not_offres_delete:

            }

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

            // ajouter_offre
            if ('/offre/ajouteroffre' === $pathinfo) {
                return array (  '_controller' => 'OffreBundle\\Controller\\OffresController::newAction',  '_route' => 'ajouter_offre',);
            }

            if (0 === strpos($pathinfo, '/offre/listoffre')) {
                // read_offre
                if ('/offre/listoffre' === $pathinfo) {
                    return array (  '_controller' => 'OffreBundle\\Controller\\OffresController::indexAction',  '_route' => 'read_offre',);
                }

                // read_offre_user
                if ('/offre/listoffre' === $pathinfo) {
                    return array (  '_controller' => 'OffreBundle\\Controller\\OffresController::indexAction',  '_route' => 'read_offre_user',);
                }

            }

            // mes_offre
            if ('/offre/mesoffres' === $pathinfo) {
                return array (  '_controller' => 'OffreBundle\\Controller\\OffresController::mesOffresAction',  '_route' => 'mes_offre',);
            }

            // modifier_offre
            if (0 === strpos($pathinfo, '/offre/modifieroffre') && preg_match('#^/offre/modifieroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_offre']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::editAction',));
            }

            // supprimer_offre
            if (0 === strpos($pathinfo, '/offre/supprimeroffre') && preg_match('#^/offre/supprimeroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_offre']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::deleteAction',));
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

        // index
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/login')) {
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

        if (0 === strpos($pathinfo, '/profile')) {
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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
