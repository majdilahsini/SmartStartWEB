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

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reclamation')) {
                // reclamation_index
                if ('/reclamation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::indexAction',  '_route' => 'reclamation_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_reclamation_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_index'));
                    }

                    return $ret;
                }
                not_reclamation_index:

                // reclamation_smsfromadmin
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/sendsms$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_smsfromadmin']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::sendsmsAction',));
                }

                // reclamation_indexuser
                if ('/reclamation/indexuser' === $pathinfo) {
                    return array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::indexuserAction',  '_route' => 'reclamation_indexuser',);
                }

                // reclamation_all
                if ('/reclamation/recall' === $pathinfo) {
                    return array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::rdvallAction',  '_route' => 'reclamation_all',);
                }

                // reclamation_subject1
                if (0 === strpos($pathinfo, '/reclamation/recsubject') && preg_match('#^/reclamation/recsubject/(?P<dd>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_subject1']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::reclaaAction',));
                }

                // reclamation_subject
                if (0 === strpos($pathinfo, '/reclamation/subjectjax') && preg_match('#^/reclamation/subjectjax/(?P<nom>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_subject']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::subjectjaxAction',));
                }

                // reclamation_new
                if ('/reclamation/new' === $pathinfo) {
                    return array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::newAction',  '_route' => 'reclamation_new',);
                }

                // reclamation_show
                if (preg_match('#^/reclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_show']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::showAction',));
                }

                // reclamation_edit
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_edit']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::editAction',));
                }

                // reclamation_delete
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_delete']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::deleteAction',));
                }

                // reclamation_delete_id
                if (0 === strpos($pathinfo, '/reclamation/indexuser') && preg_match('#^/reclamation/indexuser/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_delete_id']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::deletebyidAction',));
                }

                // reclamation_delete_idadmin
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/deletee$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_delete_idadmin']), array (  '_controller' => 'Reclamation1Bundle\\Controller\\ReclamationController::deletebyyidAction',));
                }

            }

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

        if (0 === strpos($pathinfo, '/monprofil')) {
            // mon_profil
            if ('/monprofil' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::monprofilAction',  '_route' => 'mon_profil',);
            }

            // modifier_profil
            if (preg_match('#^/monprofil/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_profil']), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::modifierprofilAction',));
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

            // accepter_candidature
            if (0 === strpos($pathinfo, '/offre/acceptercandidature') && preg_match('#^/offre/acceptercandidature/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'accepter_candidature']), array (  '_controller' => 'OffreBundle\\Controller\\ApplicationsController::accepterAction',));
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

            elseif (0 === strpos($pathinfo, '/offre/m')) {
                // mes_offre
                if ('/offre/mesoffres' === $pathinfo) {
                    return array (  '_controller' => 'OffreBundle\\Controller\\OffresController::mesOffresAction',  '_route' => 'mes_offre',);
                }

                // mes_condidatures
                if ('/offre/mescandidatures' === $pathinfo) {
                    return array (  '_controller' => 'OffreBundle\\Controller\\OffresController::mescandidaturesAction',  '_route' => 'mes_condidatures',);
                }

                // modifier_offre
                if (0 === strpos($pathinfo, '/offre/modifieroffre') && preg_match('#^/offre/modifieroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_offre']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::editAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/offre/supprimer')) {
                // supprimer_offre
                if (0 === strpos($pathinfo, '/offre/supprimeroffre') && preg_match('#^/offre/supprimeroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_offre']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::deleteAction',));
                }

                // supprimer_application
                if (preg_match('#^/offre/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_application']), array (  '_controller' => 'OffreBundle\\Controller\\ApplicationsController::deleteAction',));
                }

            }

            // consulter_offre
            if (0 === strpos($pathinfo, '/offre/consulteroffre') && preg_match('#^/offre/consulteroffre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'consulter_offre']), array (  '_controller' => 'OffreBundle\\Controller\\OffresController::consulterOffreAction',));
            }

            // candidatures_offre
            if (0 === strpos($pathinfo, '/offre/candidatures') && preg_match('#^/offre/candidatures/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'candidatures_offre']), array (  '_controller' => 'OffreBundle\\Controller\\ApplicationsController::affichercandidaturesAction',));
            }

            // postuler_offre
            if (0 === strpos($pathinfo, '/offre/postuleroffre') && preg_match('#^/offre/postuleroffre/(?P<id>[^/]++)/(?P<match>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'postuler_offre']), array (  '_controller' => 'OffreBundle\\Controller\\ApplicationsController::postulerAction',));
            }

            // refuser_candidature
            if (0 === strpos($pathinfo, '/offre/refusercandidature') && preg_match('#^/offre/refusercandidature/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'refuser_candidature']), array (  '_controller' => 'OffreBundle\\Controller\\ApplicationsController::refuserAction',));
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

        if (0 === strpos($pathinfo, '/interviews')) {
            // interviews_homepage
            if ('/interviews' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'interviews_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_interviews_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'interviews_homepage'));
                }

                return $ret;
            }
            not_interviews_homepage:

            // interview_index
            if ('/interviews' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::indexAction',  '_route' => 'interview_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_interview_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'interview_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_interview_index;
                }

                return $ret;
            }
            not_interview_index:

            // interview_show
            if (preg_match('#^/interviews/(?P<refEnt>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'interview_show']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_interview_show;
                }

                return $ret;
            }
            not_interview_show:

            // interview_new
            if ('/interviews/new' === $pathinfo) {
                $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::newAction',  '_route' => 'interview_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_interview_new;
                }

                return $ret;
            }
            not_interview_new:

            // interview_edit
            if (preg_match('#^/interviews/(?P<refEnt>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'interview_edit']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_interview_edit;
                }

                return $ret;
            }
            not_interview_edit:

            // interview_delete
            if (preg_match('#^/interviews/(?P<refEnt>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'interview_delete']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_interview_delete;
                }

                return $ret;
            }
            not_interview_delete:

            // affiches_offres
            if ('/interviews/affichoffres_ent' === $pathinfo) {
                $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::affichoffres_entAction',  '_route' => 'affiches_offres',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_affiches_offres;
                }

                return $ret;
            }
            not_affiches_offres:

            // ajouter_interview
            if (preg_match('#^/interviews/(?P<offre_id>[^/]++)/ajout$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ajouter_interview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::ajouter_interviewAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_ajouter_interview;
                }

                return $ret;
            }
            not_ajouter_interview:

            // afficherInterview
            if ('/interviews/afficherInterview' === $pathinfo) {
                $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::afficherInterviewAction',  '_route' => 'afficherInterview',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_afficherInterview;
                }

                return $ret;
            }
            not_afficherInterview:

            // modifier_interview
            if (preg_match('#^/interviews/(?P<refEnt>[^/]++)/editinterview$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_interview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::modifierInterviewAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_modifier_interview;
                }

                return $ret;
            }
            not_modifier_interview:

            // delete_interview
            if (0 === strpos($pathinfo, '/interviews/deleteInteview') && preg_match('#^/interviews/deleteInteview/(?P<refEnt>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_interview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::deleteInterviewAction',));
            }

            // delete_eval
            if (0 === strpos($pathinfo, '/interviews/delete_eval') && preg_match('#^/interviews/delete_eval/(?P<refEntretien>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_eval']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::delete_evalAction',));
            }

            // add_eval
            if (0 === strpos($pathinfo, '/interviews/add_eval') && preg_match('#^/interviews/add_eval/(?P<refEnt>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_eval']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::add_evalAction',));
            }

            if (0 === strpos($pathinfo, '/interviews/show_eval')) {
                // show_evalUnique
                if (0 === strpos($pathinfo, '/interviews/show_evalUnique') && preg_match('#^/interviews/show_evalUnique/(?P<refEnt>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_evalUnique']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::show_evalUniqueAction',));
                }

                // show_eval
                if ('/interviews/show_eval' === $pathinfo) {
                    return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::show_evalAction',  '_route' => 'show_eval',);
                }

            }

            elseif (0 === strpos($pathinfo, '/interviews/search')) {
                // ajax_search
                if ('/interviews/search' === $pathinfo) {
                    return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::searchAction',  '_route' => 'ajax_search',);
                }

                // ajax_search_eval
                if ('/interviews/searcheval' === $pathinfo) {
                    return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::search_evalAction',  '_route' => 'ajax_search_eval',);
                }

                // ajax_search_c
                if ('/interviews/searchC' === $pathinfo) {
                    return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::searchCAction',  '_route' => 'ajax_search_c',);
                }

            }

            // edit_eval
            if (0 === strpos($pathinfo, '/interviews/edit_eval') && preg_match('#^/interviews/edit_eval/(?P<refEntretien>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_eval']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::edit_evalAction',));
            }

            // refuserDemandeinterview
            if (0 === strpos($pathinfo, '/interviews/refuserDemandeinterview') && preg_match('#^/interviews/refuserDemandeinterview/(?P<offre_id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'refuserDemandeinterview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::refuserDemandeinterviewAction',));
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

        if (0 === strpos($pathinfo, '/pro')) {
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

            elseif (0 === strpos($pathinfo, '/project/projet')) {
                // projet_index
                if ('/project/projet' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_projet_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'projet_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_projet_index;
                    }

                    return $ret;
                }
                not_projet_index:

                // projet_show
                if (preg_match('#^/project/projet/(?P<idProjet>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_show']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::showAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_show;
                    }

                    return $ret;
                }
                not_projet_show:

                // projet_new
                if ('/project/projet/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_new;
                    }

                    return $ret;
                }
                not_projet_new:

                // projet_domaine
                if (preg_match('#^/project/projet/(?P<domaine>[^/]++)/domaine$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_domaine']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::domaineAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_domaine;
                    }

                    return $ret;
                }
                not_projet_domaine:

                // projet_edit
                if (preg_match('#^/project/projet/(?P<idProjet>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_edit']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_edit;
                    }

                    return $ret;
                }
                not_projet_edit:

                // projet_delete
                if (preg_match('#^/project/projet/(?P<idProjet>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_delete']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_projet_delete;
                    }

                    return $ret;
                }
                not_projet_delete:

                // projet_indexall
                if ('/project/projet/indexall' === $pathinfo) {
                    $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::indexallAction',  '_route' => 'projet_indexall',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_projet_indexall;
                    }

                    return $ret;
                }
                not_projet_indexall:

                // projet_show_visiteur_projet
                if (preg_match('#^/project/projet/(?P<idProjet>[^/]++)/showvisiteur$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_show_visiteur_projet']), array (  '_controller' => 'ProjectBundle\\Controller\\InvesstirController::showvisiteurAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_show_visiteur_projet;
                    }

                    return $ret;
                }
                not_projet_show_visiteur_projet:

                if (0 === strpos($pathinfo, '/project/projet/invest')) {
                    // projet_show_invest
                    if ('/project/projet/invest' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\InvesstirController::affichInvestissementAction',  '_route' => 'projet_show_invest',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_projet_show_invest;
                        }

                        return $ret;
                    }
                    not_projet_show_invest:

                    // projet_show_mesprojet_invest
                    if ('/project/projet/investmesprojet' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\InvesstirController::affichInvestissementMesProjetAction',  '_route' => 'projet_show_mesprojet_invest',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_projet_show_mesprojet_invest;
                        }

                        return $ret;
                    }
                    not_projet_show_mesprojet_invest:

                    // filtre_ajax
                    if ('/project/projet/investajax' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::filtreProAction',  '_route' => 'filtre_ajax',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_filtre_ajax;
                        }

                        return $ret;
                    }
                    not_filtre_ajax:

                }

                elseif (0 === strpos($pathinfo, '/project/projet/recherch')) {
                    // recherch_ajax
                    if ('/project/projet/recherch' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::searchAction',  '_route' => 'recherch_ajax',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_recherch_ajax;
                        }

                        return $ret;
                    }
                    not_recherch_ajax:

                    // recherch_ajaxm
                    if ('/project/projet/recherchm' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::searchMAction',  '_route' => 'recherch_ajaxm',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_recherch_ajaxm;
                        }

                        return $ret;
                    }
                    not_recherch_ajaxm:

                }

                // projet_index_domaine
                if (preg_match('#^/project/projet/(?P<idEtat>[^/]++)/domainfiltre$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_index_domaine']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetController::filtredomAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_index_domaine;
                    }

                    return $ret;
                }
                not_projet_index_domaine:

                // projet_call
                if (preg_match('#^/project/projet/(?P<idProjet>[^/]++)/message$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_call']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::messageadmineAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_projet_call;
                    }

                    return $ret;
                }
                not_projet_call:

                if (0 === strpos($pathinfo, '/project/projetuser')) {
                    // projet_index_user
                    if ('/project/projetuser' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::indexAction',  '_route' => 'projet_index_user',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_projet_index_user;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'projet_index_user'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_projet_index_user;
                        }

                        return $ret;
                    }
                    not_projet_index_user:

                    // projet_show_user
                    if (preg_match('#^/project/projetuser/(?P<idProjet>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_show_user']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::showAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_show_user;
                        }

                        return $ret;
                    }
                    not_projet_show_user:

                    // projet_new_user
                    if ('/project/projetuser/newuser' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::newAction',  '_route' => 'projet_new_user',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_new_user;
                        }

                        return $ret;
                    }
                    not_projet_new_user:

                    // projet_domaine_user
                    if (preg_match('#^/project/projetuser/(?P<domaine>[^/]++)/domaine$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_domaine_user']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::domaineAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_domaine_user;
                        }

                        return $ret;
                    }
                    not_projet_domaine_user:

                    // projet_edit_user
                    if (preg_match('#^/project/projetuser/(?P<idProjet>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_edit_user']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_edit_user;
                        }

                        return $ret;
                    }
                    not_projet_edit_user:

                    // projet_delete_user
                    if (preg_match('#^/project/projetuser/(?P<idProjet>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_delete_user']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_projet_delete_user;
                        }

                        return $ret;
                    }
                    not_projet_delete_user:

                    // projet_indexall_user
                    if ('/project/projetuser/indexall' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::indexallAction',  '_route' => 'projet_indexall_user',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_projet_indexall_user;
                        }

                        return $ret;
                    }
                    not_projet_indexall_user:

                    // projet_show_visiteur_projet_user
                    if (preg_match('#^/project/projetuser/(?P<idProjet>[^/]++)/showvisiteur$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_show_visiteur_projet_user']), array (  '_controller' => 'ProjectBundle\\Controller\\InvesstirUserController::showvisiteurAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_show_visiteur_projet_user;
                        }

                        return $ret;
                    }
                    not_projet_show_visiteur_projet_user:

                    if (0 === strpos($pathinfo, '/project/projetuser/invest')) {
                        // projet_show_invest_user
                        if ('/project/projetuser/invest' === $pathinfo) {
                            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\InvesstirUserController::affichInvestissementAction',  '_route' => 'projet_show_invest_user',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_projet_show_invest_user;
                            }

                            return $ret;
                        }
                        not_projet_show_invest_user:

                        // projet_show_mesprojet_invest_user
                        if ('/project/projetuser/investmesprojet' === $pathinfo) {
                            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\InvesstirUserController::affichInvestissementMesProjetAction',  '_route' => 'projet_show_mesprojet_invest_user',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_projet_show_mesprojet_invest_user;
                            }

                            return $ret;
                        }
                        not_projet_show_mesprojet_invest_user:

                        // filtre_ajax_user
                        if ('/project/projetuser/investajax' === $pathinfo) {
                            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::filtreProAction',  '_route' => 'filtre_ajax_user',);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_filtre_ajax_user;
                            }

                            return $ret;
                        }
                        not_filtre_ajax_user:

                    }

                    elseif (0 === strpos($pathinfo, '/project/projetuser/recherch')) {
                        // recherch_ajax_user
                        if ('/project/projetuser/recherch' === $pathinfo) {
                            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::searchAction',  '_route' => 'recherch_ajax_user',);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_recherch_ajax_user;
                            }

                            return $ret;
                        }
                        not_recherch_ajax_user:

                        // recherch_ajax_userm
                        if ('/project/projetuser/recherchm' === $pathinfo) {
                            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::searchMAction',  '_route' => 'recherch_ajax_userm',);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_recherch_ajax_userm;
                            }

                            return $ret;
                        }
                        not_recherch_ajax_userm:

                    }

                    // projet_index_domaine_user
                    if (preg_match('#^/project/projetuser/(?P<idEtat>[^/]++)/domainfiltre$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_index_domaine_user']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::filtredomAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_index_domaine_user;
                        }

                        return $ret;
                    }
                    not_projet_index_domaine_user:

                    // projet_call_user
                    if (preg_match('#^/project/projetuser/(?P<idProjet>[^/]++)/message$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'projet_call_user']), array (  '_controller' => 'ProjectBundle\\Controller\\ProjetuserController::messageadmineAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_projet_call_user;
                        }

                        return $ret;
                    }
                    not_projet_call_user:

                }

            }

            // project_homepage
            if ('/project' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::indexAction',  '_route' => 'project_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_project_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'project_homepage'));
                }

                return $ret;
            }
            not_project_homepage:

        }

        elseif (0 === strpos($pathinfo, '/formation')) {
            if (0 === strpos($pathinfo, '/formation/formations')) {
                // formations_index
                if ('/formation/formations' === $trimmedPathinfo) {
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
                if ('/formation/formations/all' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::indexallAction',  '_route' => 'formations_index_all',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_formations_index_all;
                    }

                    return $ret;
                }
                not_formations_index_all:

                // formations_show
                if (preg_match('#^/formation/formations/(?P<ref>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_show']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_formations_show;
                    }

                    return $ret;
                }
                not_formations_show:

                // formations_new
                if ('/formation/formations/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::newAction',  '_route' => 'formations_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_formations_new;
                    }

                    return $ret;
                }
                not_formations_new:

                // formations_edit
                if (preg_match('#^/formation/formations/(?P<ref>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_edit']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_formations_edit;
                    }

                    return $ret;
                }
                not_formations_edit:

                // formations_delete
                if (preg_match('#^/formation/formations/(?P<ref>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_delete']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_formations_delete;
                    }

                    return $ret;
                }
                not_formations_delete:

                // formations_show_alll
                if (preg_match('#^/formation/formations/(?P<ref>[^/]++)/showall$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_show_alll']), array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::showallAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_formations_show_alll;
                    }

                    return $ret;
                }
                not_formations_show_alll:

                // formations_nombres
                if ('/formation/formations/nombres' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::listinscritsAction',  '_route' => 'formations_nombres',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_formations_nombres;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'formations_nombres'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_formations_nombres;
                    }

                    return $ret;
                }
                not_formations_nombres:

            }

            elseif (0 === strpos($pathinfo, '/formation/inscriptions')) {
                // formations_affich_all
                if ('/formation/inscriptions/allformations' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::affichallFormationsAction',  '_route' => 'formations_affich_all',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_formations_affich_all;
                    }

                    return $ret;
                }
                not_formations_affich_all:

                // formations_show_all
                if (preg_match('#^/formation/inscriptions/(?P<ref>[^/]++)/showformation$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formations_show_all']), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::showallFormationsAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_formations_show_all;
                    }

                    return $ret;
                }
                not_formations_show_all:

                // ajout_filtre
                if (preg_match('#^/formation/inscriptions/(?P<domaine>[^/]++)/filtre$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_filtre']), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::domaineAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_ajout_filtre;
                    }

                    return $ret;
                }
                not_ajout_filtre:

                // inscrip_affich_all
                if ('/formation/inscriptions/allinscriptions' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::affichInscriAction',  '_route' => 'inscrip_affich_all',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_inscrip_affich_all;
                    }

                    return $ret;
                }
                not_inscrip_affich_all:

                // etat_accepte
                if (preg_match('#^/formation/inscriptions/(?P<id>[^/]++)/accepte$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'etat_accepte']), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::etataccepteAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_etat_accepte;
                    }

                    return $ret;
                }
                not_etat_accepte:

                // etat_refuse
                if (preg_match('#^/formation/inscriptions/(?P<id>[^/]++)/refusee$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'etat_refuse']), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::etatrefuseAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_etat_refuse;
                    }

                    return $ret;
                }
                not_etat_refuse:

                // formation_smsfromadmin
                if ('/formation/inscriptions/smssend' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::sendsmsAction',  '_route' => 'formation_smsfromadmin',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_formation_smsfromadmin;
                    }

                    return $ret;
                }
                not_formation_smsfromadmin:

            }

            elseif (0 === strpos($pathinfo, '/formation/search')) {
                // ajax_search-entreprise
                if ('/formation/searchentreprise' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::searchAction',  '_route' => 'ajax_search-entreprise',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_ajax_searchentreprise;
                    }

                    return $ret;
                }
                not_ajax_searchentreprise:

                // ajax_search_all
                if ('/formation/searchall' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\FormationsController::searchallAction',  '_route' => 'ajax_search_all',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_ajax_search_all;
                    }

                    return $ret;
                }
                not_ajax_search_all:

                // ajax_search_user
                if ('/formation/searchformation' === $pathinfo) {
                    $ret = array (  '_controller' => 'FormationBundle\\Controller\\InscriptionsController::searchuserAction',  '_route' => 'ajax_search_user',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_ajax_search_user;
                    }

                    return $ret;
                }
                not_ajax_search_user:

            }

        }

        elseif (0 === strpos($pathinfo, '/commentaire')) {
            // forum_homepage
            if ('/commentaire/forum' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\ForumsujetController::indexAction',  '_route' => 'forum_homepage',);
            }

            if (0 === strpos($pathinfo, '/commentaire/forumsujet')) {
                // forumsujet_index
                if ('/commentaire/forumsujet' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ForumBundle\\Controller\\ForumsujetController::indexAction',  '_route' => 'forumsujet_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_forumsujet_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forumsujet_index'));
                    }

                    return $ret;
                }
                not_forumsujet_index:

                // forumsujet_new
                if ('/commentaire/forumsujet/new' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\ForumsujetController::newAction',  '_route' => 'forumsujet_new',);
                }

                // forumsujet_show
                if (preg_match('#^/commentaire/forumsujet/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'forumsujet_show']), array (  '_controller' => 'ForumBundle\\Controller\\ForumsujetController::showAction',));
                }

                // forumsujet_edit
                if (preg_match('#^/commentaire/forumsujet/(?P<idSujet>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'forumsujet_edit']), array (  '_controller' => 'ForumBundle\\Controller\\ForumsujetController::editAction',));
                }

                // forumsujet_delete
                if (preg_match('#^/commentaire/forumsujet/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'forumsujet_delete']), array (  '_controller' => 'ForumBundle\\Controller\\ForumsujetController::deleteAction',));
                }

            }

            // commentaire_index_com
            if (0 === strpos($pathinfo, '/commentaire/c') && preg_match('#^/commentaire/c/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_index_com']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::indexComAction',));
            }

            // commentaire_index
            if ('/commentaire' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_commentaire_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commentaire_index'));
                }

                return $ret;
            }
            not_commentaire_index:

            // commentaire_indexuser
            if ('/commentaire/indexuser' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::indexuserAction',  '_route' => 'commentaire_indexuser',);
            }

            // commantaire_all
            if ('/commentaire/commantaireall' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::commantaireAction',  '_route' => 'commantaire_all',);
            }

            // commantaires_nom
            if (0 === strpos($pathinfo, '/commentaire/commantaireajax') && preg_match('#^/commentaire/commantaireajax/(?P<nom>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commantaires_nom']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::commantairejaxAction',));
            }

            // commentaire_new
            if ('/commentaire/new' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_new',);
            }

            // commentaire_show
            if (preg_match('#^/commentaire/(?P<idCommentaire>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_show']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::showAction',));
            }

            // commentaire_edit
            if (preg_match('#^/commentaire/(?P<idCommentaire>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_edit']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::editAction',));
            }

            // commentaire_delete
            if (preg_match('#^/commentaire/(?P<idCommentaire>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_delete']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::deleteAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
