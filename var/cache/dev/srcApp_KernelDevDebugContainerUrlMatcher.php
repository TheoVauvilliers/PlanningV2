<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'), null, null, null, false, null)),
            '/planning' => array(array(array('_route' => 'planning', '_controller' => 'App\\Controller\\PlanningController::index'), null, null, null, false, null)),
            '/planning/lieu' => array(array(array('_route' => 'planningParLieu', '_controller' => 'App\\Controller\\PlanningParLieuController::index'), null, null, null, false, null)),
            '/planning/lieu/ajax' => array(array(array('_route' => 'planningParLieuAjax', '_controller' => 'App\\Controller\\PlanningParLieuController::reqAjax'), null, null, null, false, null)),
            '/planning/typeDeSalle' => array(array(array('_route' => 'PlanningParTypeDeSalle', '_controller' => 'App\\Controller\\PlanningParTypeDeSalleController::index'), null, null, null, false, null)),
            '/planning/typeDeSalle/ajax' => array(array(array('_route' => 'PlanningParTypeDeSalleAjax', '_controller' => 'App\\Controller\\PlanningParTypeDeSalleController::reqAjax'), null, null, null, false, null)),
            '/planning/reservation' => array(array(array('_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::reservation'), null, null, null, false, null)),
            '/login' => array(array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'logout'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/planning/(?'
                        .'|visualiser(?:/([^/]++))?(*:44)'
                        .'|modification(?:/([^/]++))?(*:77)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:116)'
                        .'|wdt/([^/]++)(*:136)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:182)'
                                .'|router(*:196)'
                                .'|exception(?'
                                    .'|(*:216)'
                                    .'|\\.css(*:229)'
                                .')'
                            .')'
                            .'|(*:239)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            44 => array(array(array('_route' => 'visualiser', 'id' => 0, '_controller' => 'App\\Controller\\ReservationController::visualiser'), array('id'), null, null, false, null)),
            77 => array(array(array('_route' => 'modification', 'id' => 0, '_controller' => 'App\\Controller\\ReservationController::modification'), array('id'), null, null, false, null)),
            116 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            136 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            182 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            196 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            216 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            229 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            239 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
