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
        'entrada_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'entrada_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\DefaultController::editEntradaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'entrada_delet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\DefaultController::deletEntradaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\ApiController::showEntradasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/entradas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api-get' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\ApiController::showEntradaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/entrada',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api-save' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\ApiController::saveEntradaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/entrada',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api-update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\ApiController::editEntradaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/entrada',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api-delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EntradaBundle\\Controller\\ApiController::deletEntradaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/entrada',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\DefaultController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\DefaultController::profileHomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/home/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_user_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\DefaultController::ajaxListUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list/ajax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\DefaultController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LoginBundle\\Controller\\DefaultController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LoginBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/salir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recuperar_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LoginBundle\\Controller\\DefaultController::recuperarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recuperar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_oauth_server_token' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_oauth_server.controller.token:tokenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oauth/v2/token',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_oauth_server_authorize' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_oauth_server.controller.authorize:authorizeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oauth/v2/auth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
