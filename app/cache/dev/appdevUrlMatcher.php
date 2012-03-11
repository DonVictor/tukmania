<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_5670646
        if ($pathinfo === '/js/5670646.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 5670646,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5670646',);
        }

        // _assetic_5670646_0
        if ($pathinfo === '/js/5670646_part_1_register_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 5670646,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5670646_0',);
        }

        // _assetic_3aa1f14
        if ($pathinfo === '/js/3aa1f14.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3aa1f14',);
        }

        // _assetic_3aa1f14_0
        if ($pathinfo === '/js/3aa1f14_part_1_001-jquery-1.7.1.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_0',);
        }

        // _assetic_3aa1f14_1
        if ($pathinfo === '/js/3aa1f14_part_1_002-jquery-ui-1.8.18.custom.min_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_1',);
        }

        // _assetic_3aa1f14_2
        if ($pathinfo === '/js/3aa1f14_part_1_003-jquery.color_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_2',);
        }

        // _assetic_3aa1f14_3
        if ($pathinfo === '/js/3aa1f14_part_1_004-jquery.Jcrop.min_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_3',);
        }

        // _assetic_3aa1f14_4
        if ($pathinfo === '/js/3aa1f14_part_1_005-jquery.qtip-1.0.0-rc3.min_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_4',);
        }

        // _assetic_3aa1f14_5
        if ($pathinfo === '/js/3aa1f14_part_1_006-jquery.tipTip.min_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_5',);
        }

        // _assetic_3aa1f14_6
        if ($pathinfo === '/js/3aa1f14_part_1_007-jquery.validate.min_7.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_6',);
        }

        // _assetic_3aa1f14_7
        if ($pathinfo === '/js/3aa1f14_part_1_008-additional-methods.min_8.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_7',);
        }

        // _assetic_3aa1f14_8
        if ($pathinfo === '/js/3aa1f14_part_1_009-jquery.form_9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_8',);
        }

        // _assetic_3aa1f14_9
        if ($pathinfo === '/js/3aa1f14_part_1_010-jquery.metadata_10.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_9',);
        }

        // _assetic_3aa1f14_10
        if ($pathinfo === '/js/3aa1f14_part_1_011-jquery.mockjax_11.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_10',);
        }

        // _assetic_3aa1f14_11
        if ($pathinfo === '/js/3aa1f14_part_1_012-jquery.Rut.min_12.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_11',);
        }

        // _assetic_3aa1f14_12
        if ($pathinfo === '/js/3aa1f14_part_1_013-sticky.min_13.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_12',);
        }

        // _assetic_3aa1f14_13
        if ($pathinfo === '/js/3aa1f14_part_1_014-jquery.pnotify.min_14.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_13',);
        }

        // _assetic_3aa1f14_14
        if ($pathinfo === '/js/3aa1f14_part_1_015-jquery.noty_15.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_14',);
        }

        // _assetic_3aa1f14_15
        if ($pathinfo === '/js/3aa1f14_part_1_100-jquery.layout_16.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_15',);
        }

        // _assetic_3aa1f14_16
        if ($pathinfo === '/js/3aa1f14_part_1_localization_17.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3aa1f14',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_3aa1f14_16',);
        }

        // _assetic_48d2f08
        if ($pathinfo === '/css/48d2f08.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_48d2f08',);
        }

        // _assetic_48d2f08_0
        if ($pathinfo === '/css/48d2f08_part_1_Jcrop_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_48d2f08_0',);
        }

        // _assetic_48d2f08_1
        if ($pathinfo === '/css/48d2f08_part_1_close_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_48d2f08_1',);
        }

        // _assetic_48d2f08_2
        if ($pathinfo === '/css/48d2f08_part_1_jquery-ui-1.8.18.custom_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_48d2f08_2',);
        }

        // _assetic_48d2f08_3
        if ($pathinfo === '/css/48d2f08_part_1_jquery.Jcrop_4.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_48d2f08_3',);
        }

        // _assetic_48d2f08_4
        if ($pathinfo === '/css/48d2f08_part_1_jquery.noty_5.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_48d2f08_4',);
        }

        // _assetic_48d2f08_5
        if ($pathinfo === '/css/48d2f08_part_1_sticky.min_6.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_48d2f08_5',);
        }

        // _assetic_48d2f08_6
        if ($pathinfo === '/css/48d2f08_part_1_tipTip_7.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '48d2f08',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_48d2f08_6',);
        }

        // _assetic_9d3a545
        if ($pathinfo === '/css/9d3a545.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '9d3a545',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9d3a545',);
        }

        // _assetic_9d3a545_0
        if ($pathinfo === '/css/9d3a545_part_1_app_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '9d3a545',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9d3a545_0',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // user
        if (rtrim($pathinfo, '/') === '/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user');
            }
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user',);
        }

        // user_show
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::showAction',)), array('_route' => 'user_show'));
        }

        // user_new
        if ($pathinfo === '/user/new') {
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::newAction',  '_route' => 'user_new',);
        }

        // user_create
        if ($pathinfo === '/user/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_create;
            }
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::createAction',  '_route' => 'user_create',);
        }
        not_user_create:

        // user_edit
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::editAction',)), array('_route' => 'user_edit'));
        }

        // user_update
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::updateAction',)), array('_route' => 'user_update'));
        }
        not_user_update:

        // user_delete
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::deleteAction',)), array('_route' => 'user_delete'));
        }
        not_user_delete:

        // register
        if ($pathinfo === '/user/register') {
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
        }

        // create_user
        if ($pathinfo === '/user/create_user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_create_user;
            }
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::createUserAction',  '_route' => 'create_user',);
        }
        not_create_user:

        // tuk_model_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tuk\\ModelBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'tuk_model_default_index'));
        }

        // tuk_main_default_index
        if (rtrim($pathinfo, '/') === '/hello') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tuk_main_default_index');
            }
            return array (  '_controller' => 'Tuk\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tuk_main_default_index',);
        }

        // tuk_main_default_translate
        if (rtrim($pathinfo, '/') === '/translate') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tuk_main_default_translate');
            }
            return array (  '_controller' => 'Tuk\\MainBundle\\Controller\\DefaultController::translateAction',  '_route' => 'tuk_main_default_translate',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Tuk\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        // _register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::registerAction',  '_route' => '_register',);
        }

        // check
        if ($pathinfo === '/check') {
            return array (  '_controller' => 'Tuk\\UserBundle\\Controller\\DefaultController::checkAction',  '_route' => 'check',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
