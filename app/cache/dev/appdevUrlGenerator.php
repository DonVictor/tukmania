<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_5670646' => true,
       '_assetic_5670646_0' => true,
       '_assetic_3aa1f14' => true,
       '_assetic_3aa1f14_0' => true,
       '_assetic_3aa1f14_1' => true,
       '_assetic_3aa1f14_2' => true,
       '_assetic_3aa1f14_3' => true,
       '_assetic_3aa1f14_4' => true,
       '_assetic_3aa1f14_5' => true,
       '_assetic_3aa1f14_6' => true,
       '_assetic_3aa1f14_7' => true,
       '_assetic_3aa1f14_8' => true,
       '_assetic_3aa1f14_9' => true,
       '_assetic_3aa1f14_10' => true,
       '_assetic_3aa1f14_11' => true,
       '_assetic_3aa1f14_12' => true,
       '_assetic_3aa1f14_13' => true,
       '_assetic_3aa1f14_14' => true,
       '_assetic_3aa1f14_15' => true,
       '_assetic_3aa1f14_16' => true,
       '_assetic_48d2f08' => true,
       '_assetic_48d2f08_0' => true,
       '_assetic_48d2f08_1' => true,
       '_assetic_48d2f08_2' => true,
       '_assetic_48d2f08_3' => true,
       '_assetic_48d2f08_4' => true,
       '_assetic_48d2f08_5' => true,
       '_assetic_48d2f08_6' => true,
       '_assetic_9d3a545' => true,
       '_assetic_9d3a545_0' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'user' => true,
       'user_show' => true,
       'user_new' => true,
       'user_create' => true,
       'user_edit' => true,
       'user_update' => true,
       'user_delete' => true,
       'register' => true,
       'create_user' => true,
       'tuk_model_default_index' => true,
       'tuk_main_default_index' => true,
       'tuk_main_default_translate' => true,
       '_welcome' => true,
       '_register' => true,
       'check' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_5670646RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 5670646,  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/5670646.js',  ),));
    }

    private function get_assetic_5670646_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 5670646,  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/5670646_part_1_register_1.js',  ),));
    }

    private function get_assetic_3aa1f14RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14.js',  ),));
    }

    private function get_assetic_3aa1f14_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_001-jquery-1.7.1.min_1.js',  ),));
    }

    private function get_assetic_3aa1f14_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_002-jquery-ui-1.8.18.custom.min_2.js',  ),));
    }

    private function get_assetic_3aa1f14_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_003-jquery.color_3.js',  ),));
    }

    private function get_assetic_3aa1f14_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 3,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_004-jquery.Jcrop.min_4.js',  ),));
    }

    private function get_assetic_3aa1f14_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 4,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_005-jquery.qtip-1.0.0-rc3.min_5.js',  ),));
    }

    private function get_assetic_3aa1f14_5RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 5,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_006-jquery.tipTip.min_6.js',  ),));
    }

    private function get_assetic_3aa1f14_6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 6,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_007-jquery.validate.min_7.js',  ),));
    }

    private function get_assetic_3aa1f14_7RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 7,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_008-additional-methods.min_8.js',  ),));
    }

    private function get_assetic_3aa1f14_8RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 8,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_009-jquery.form_9.js',  ),));
    }

    private function get_assetic_3aa1f14_9RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 9,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_010-jquery.metadata_10.js',  ),));
    }

    private function get_assetic_3aa1f14_10RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 10,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_011-jquery.mockjax_11.js',  ),));
    }

    private function get_assetic_3aa1f14_11RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 11,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_012-jquery.Rut.min_12.js',  ),));
    }

    private function get_assetic_3aa1f14_12RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 12,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_013-sticky.min_13.js',  ),));
    }

    private function get_assetic_3aa1f14_13RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 13,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_014-jquery.pnotify.min_14.js',  ),));
    }

    private function get_assetic_3aa1f14_14RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 14,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_015-jquery.noty_15.js',  ),));
    }

    private function get_assetic_3aa1f14_15RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 15,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_100-jquery.layout_16.js',  ),));
    }

    private function get_assetic_3aa1f14_16RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 16,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/3aa1f14_part_1_localization_17.js',  ),));
    }

    private function get_assetic_48d2f08RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08.css',  ),));
    }

    private function get_assetic_48d2f08_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_Jcrop_1.css',  ),));
    }

    private function get_assetic_48d2f08_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_close_2.css',  ),));
    }

    private function get_assetic_48d2f08_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_jquery-ui-1.8.18.custom_3.css',  ),));
    }

    private function get_assetic_48d2f08_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 3,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_jquery.Jcrop_4.css',  ),));
    }

    private function get_assetic_48d2f08_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 4,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_jquery.noty_5.css',  ),));
    }

    private function get_assetic_48d2f08_5RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 5,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_sticky.min_6.css',  ),));
    }

    private function get_assetic_48d2f08_6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 6,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48d2f08_part_1_tipTip_7.css',  ),));
    }

    private function get_assetic_9d3a545RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '9d3a545',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/9d3a545.css',  ),));
    }

    private function get_assetic_9d3a545_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '9d3a545',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/9d3a545_part_1_app_1.css',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getuserRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/',  ),));
    }

    private function getuser_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/new',  ),));
    }

    private function getuser_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/user/create',  ),));
    }

    private function getuser_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getregisterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/register',  ),));
    }

    private function getcreate_userRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::createUserAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/user/create_user',  ),));
    }

    private function gettuk_model_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Tuk\\ModelBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function gettuk_main_default_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\MainBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/hello/',  ),));
    }

    private function gettuk_main_default_translateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\MainBundle\\Controller\\DefaultController::translateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/translate/',  ),));
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\MainBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register',  ),));
    }

    private function getcheckRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/check',  ),));
    }
}
