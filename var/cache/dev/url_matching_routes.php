<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/doctrine' => [[['_route' => 'doctrine_inicio', '_controller' => 'App\\Controller\\DoctrineController::index'], null, null, null, false, false, null]],
        '/doctrine/categorias' => [[['_route' => 'doctrine_categorias', '_controller' => 'App\\Controller\\DoctrineController::categorias'], null, null, null, false, false, null]],
        '/doctrine/categorias/add' => [[['_route' => 'doctrine_categorias_add', '_controller' => 'App\\Controller\\DoctrineController::categorias_add'], null, null, null, false, false, null]],
        '/doctrine/productos' => [[['_route' => 'doctrine_productos', '_controller' => 'App\\Controller\\DoctrineController::productos'], null, null, null, false, false, null]],
        '/doctrine/productos/paginacion' => [[['_route' => 'doctrine_productos_paginacion', '_controller' => 'App\\Controller\\DoctrineController::productos_paginacion'], null, null, null, false, false, null]],
        '/doctrine/productos/buscador' => [[['_route' => 'doctrine_productos_buscador', '_controller' => 'App\\Controller\\DoctrineController::productos_buscador'], null, null, null, false, false, null]],
        '/doctrine/productos/where-in' => [[['_route' => 'doctrine_productos_where_in', '_controller' => 'App\\Controller\\DoctrineController::productos_where_in'], null, null, null, false, false, null]],
        '/formularios' => [[['_route' => 'formularios_inicio', '_controller' => 'App\\Controller\\FormulariosController::index'], null, null, null, false, false, null]],
        '/formularios/simple' => [[['_route' => 'formularios_simple', '_controller' => 'App\\Controller\\FormulariosController::simple'], null, null, null, false, false, null]],
        '/formularios/entity' => [[['_route' => 'formularios_entity', '_controller' => 'App\\Controller\\FormulariosController::entity'], null, null, null, false, false, null]],
        '/formularios/type-form' => [[['_route' => 'formularios_type_form', '_controller' => 'App\\Controller\\FormulariosController::type_form'], null, null, null, false, false, null]],
        '/formularios/validacion' => [[['_route' => 'formularios_validacion', '_controller' => 'App\\Controller\\FormulariosController::validacion'], null, null, null, false, false, null]],
        '/formularios/upload' => [[['_route' => 'formularios_upload', '_controller' => 'App\\Controller\\FormulariosController::upload'], null, null, null, false, false, null]],
        '/helper' => [[['_route' => 'helper_inicio', '_controller' => 'App\\Controller\\HelperController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home_inicio', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home/saludo' => [[['_route' => 'home_saludo', '_controller' => 'App\\Controller\\HomeController::saludo'], null, null, null, false, false, null]],
        '/home/despedida' => [[['_route' => 'home_despedida', '_controller' => 'App\\Controller\\HomeController::despedida'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template_inicio', '_controller' => 'App\\Controller\\TemplateController::index'], null, null, null, false, false, null]],
        '/template/excepcion' => [[['_route' => 'template_exception', '_controller' => 'App\\Controller\\TemplateController::excepcion'], null, null, null, false, false, null]],
        '/template/trabajo' => [[['_route' => 'template_trabajo', '_controller' => 'App\\Controller\\TemplateController::trabajo'], null, null, null, false, false, null]],
        '/template/layout' => [[['_route' => 'template_layout', '_controller' => 'App\\Controller\\TemplateController::layout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/doctrine/(?'
                    .'|categorias/e(?'
                        .'|ditar/([^/]++)(*:211)'
                        .'|liminar/([^/]++)(*:235)'
                    .')'
                    .'|productos/categoria/([^/]++)(*:272)'
                .')'
                .'|/template/parametros/([^/]++)(?:/([^/]++))?(*:324)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        211 => [[['_route' => 'doctrine_categorias_editar', '_controller' => 'App\\Controller\\DoctrineController::categorias_editar'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'doctrine_categorias_eliminar', '_controller' => 'App\\Controller\\DoctrineController::categorias_eliminar'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'doctrine_productos_categoria', '_controller' => 'App\\Controller\\DoctrineController::productos_categoria'], ['categoria_id'], null, null, false, true, null]],
        324 => [
            [['_route' => 'template_parametros', 'slug' => 'algo', '_controller' => 'App\\Controller\\TemplateController::parametros'], ['id', 'slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
