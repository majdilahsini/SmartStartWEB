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

        // interviews_homepage
        if ('' === $trimmedPathinfo) {
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
        if ('' === $trimmedPathinfo) {
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
        if (preg_match('#^/(?P<refEnt>[^/]++)/show$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'interview_show']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::showAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_interview_show;
            }

            return $ret;
        }
        not_interview_show:

        // interview_new
        if ('/new' === $pathinfo) {
            $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::newAction',  '_route' => 'interview_new',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_interview_new;
            }

            return $ret;
        }
        not_interview_new:

        // interview_edit
        if (preg_match('#^/(?P<refEnt>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'interview_edit']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::editAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_interview_edit;
            }

            return $ret;
        }
        not_interview_edit:

        // interview_delete
        if (preg_match('#^/(?P<refEnt>[^/]++)/delete$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'interview_delete']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::deleteAction',));
            if (!in_array($requestMethod, ['DELETE'])) {
                $allow = array_merge($allow, ['DELETE']);
                goto not_interview_delete;
            }

            return $ret;
        }
        not_interview_delete:

        // affiches_offres
        if ('/affichoffres_ent' === $pathinfo) {
            $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::affichoffres_entAction',  '_route' => 'affiches_offres',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_affiches_offres;
            }

            return $ret;
        }
        not_affiches_offres:

        // ajouter_interview
        if (preg_match('#^/(?P<offre_id>[^/]++)/ajout$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ajouter_interview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::ajouter_interviewAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_ajouter_interview;
            }

            return $ret;
        }
        not_ajouter_interview:

        // afficherInterview
        if ('/afficherInterview' === $pathinfo) {
            $ret = array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::afficherInterviewAction',  '_route' => 'afficherInterview',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_afficherInterview;
            }

            return $ret;
        }
        not_afficherInterview:

        // modifier_interview
        if (preg_match('#^/(?P<refEnt>[^/]++)/editinterview$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_interview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::modifierInterviewAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_modifier_interview;
            }

            return $ret;
        }
        not_modifier_interview:

        // delete_interview
        if (0 === strpos($pathinfo, '/deleteInteview') && preg_match('#^/deleteInteview/(?P<refEnt>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_interview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::deleteInterviewAction',));
        }

        // delete_eval
        if (0 === strpos($pathinfo, '/delete_eval') && preg_match('#^/delete_eval/(?P<refEntretien>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_eval']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::delete_evalAction',));
        }

        // add_eval
        if (0 === strpos($pathinfo, '/add_eval') && preg_match('#^/add_eval/(?P<refEnt>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_eval']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::add_evalAction',));
        }

        if (0 === strpos($pathinfo, '/show_eval')) {
            // show_evalUnique
            if (0 === strpos($pathinfo, '/show_evalUnique') && preg_match('#^/show_evalUnique/(?P<refEnt>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_evalUnique']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::show_evalUniqueAction',));
            }

            // show_eval
            if ('/show_eval' === $pathinfo) {
                return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::show_evalAction',  '_route' => 'show_eval',);
            }

        }

        elseif (0 === strpos($pathinfo, '/search')) {
            // ajax_search
            if ('/search' === $pathinfo) {
                return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::searchAction',  '_route' => 'ajax_search',);
            }

            // ajax_search_eval
            if ('/searcheval' === $pathinfo) {
                return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::search_evalAction',  '_route' => 'ajax_search_eval',);
            }

            // ajax_search_c
            if ('/searchC' === $pathinfo) {
                return array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::searchCAction',  '_route' => 'ajax_search_c',);
            }

        }

        // edit_eval
        if (0 === strpos($pathinfo, '/edit_eval') && preg_match('#^/edit_eval/(?P<refEntretien>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_eval']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::edit_evalAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // refuserDemandeinterview
            if (0 === strpos($pathinfo, '/refuserDemandeinterview') && preg_match('#^/refuserDemandeinterview/(?P<offre_id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'refuserDemandeinterview']), array (  '_controller' => 'InterviewsBundle\\Controller\\InterviewController::refuserDemandeinterviewAction',));
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
