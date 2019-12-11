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

        // entrada_homepage
        if ('/blog' === $pathinfo) {
            return array (  '_controller' => 'EntradaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entrada_homepage',);
        }

        // entrada_edit
        if ('/edit' === $pathinfo) {
            return array (  '_controller' => 'EntradaBundle\\Controller\\DefaultController::editEntradaAction',  '_route' => 'entrada_edit',);
        }

        // entrada_delet
        if ('/delet' === $pathinfo) {
            return array (  '_controller' => 'EntradaBundle\\Controller\\DefaultController::deletEntradaAction',  '_route' => 'entrada_delet',);
        }

        if (0 === strpos($pathinfo, '/api/entrada')) {
            // api
            if ('/api/entradas' === $pathinfo) {
                $ret = array (  '_controller' => 'EntradaBundle\\Controller\\ApiController::showEntradasAction',  '_route' => 'api',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_api;
                }

                return $ret;
            }
            not_api:

            // api-get
            if (preg_match('#^/api/entrada/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api-get']), array (  '_controller' => 'EntradaBundle\\Controller\\ApiController::showEntradaAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_apiget;
                }

                return $ret;
            }
            not_apiget:

            // api-save
            if ('/api/entrada' === $pathinfo) {
                $ret = array (  '_controller' => 'EntradaBundle\\Controller\\ApiController::saveEntradaAction',  '_route' => 'api-save',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_apisave;
                }

                return $ret;
            }
            not_apisave:

            // api-update
            if (preg_match('#^/api/entrada/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api-update']), array (  '_controller' => 'EntradaBundle\\Controller\\ApiController::editEntradaAction',));
                if (!in_array($requestMethod, ['PUT'])) {
                    $allow = array_merge($allow, ['PUT']);
                    goto not_apiupdate;
                }

                return $ret;
            }
            not_apiupdate:

            // api-delete
            if (preg_match('#^/api/entrada/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api-delete']), array (  '_controller' => 'EntradaBundle\\Controller\\ApiController::deletEntradaAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_apidelete;
                }

                return $ret;
            }
            not_apidelete:

        }

        // home_homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_homepage',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // profile
            if ('/profile' === $pathinfo) {
                return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::profileAction',  '_route' => 'profile',);
            }

            // home_profile
            if ('/profile/home' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::profileHomeAction',  '_route' => 'home_profile',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_home_profile;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home_profile'));
                }

                return $ret;
            }
            not_home_profile:

        }

        elseif (0 === strpos($pathinfo, '/list')) {
            // list_user_ajax
            if ('/list/ajax' === $pathinfo) {
                return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::ajaxListUserAction',  '_route' => 'list_user_ajax',);
            }

            // list_user
            if ('/list' === $pathinfo) {
                return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::listAction',  '_route' => 'list_user',);
            }

        }

        // log-in
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'LoginBundle\\Controller\\DefaultController::loginAction',  '_route' => 'log-in',);
        }

        // registro
        if ('/registro' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'LoginBundle\\Controller\\DefaultController::registroAction',  '_route' => 'registro',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_registro;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'registro'));
            }

            return $ret;
        }
        not_registro:

        // recuperar_password
        if ('/recuperar' === $pathinfo) {
            return array (  '_controller' => 'LoginBundle\\Controller\\DefaultController::recuperarAction',  '_route' => 'recuperar_password',);
        }

        // login
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'login'));
            }

            return $ret;
        }
        not_login:

        // logout
        if ('/salir' === $pathinfo) {
            return array (  '_controller' => 'LoginBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
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

        // fos_oauth_server_token
        if ('/oauth/v2/token' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_oauth_server_token;
            }

            return $ret;
        }
        not_fos_oauth_server_token:

        // fos_oauth_server_authorize
        if ('/oauth/v2/auth' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_oauth_server.controller.authorize:authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_oauth_server_authorize;
            }

            return $ret;
        }
        not_fos_oauth_server_authorize:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
