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
        '/acceso/login' => [[['_route' => 'acceso_login', '_controller' => 'App\\Controller\\AccesoController::login'], null, null, null, false, false, null]],
        '/acceso/registro' => [[['_route' => 'acceso_registro', '_controller' => 'App\\Controller\\AccesoController::registro'], null, null, null, false, false, null]],
        '/acceso/logout' => [[['_route' => 'acceso_logout', '_controller' => 'App\\Controller\\AccesoController::logout'], null, null, null, false, false, null]],
        '/doctrine' => [[['_route' => 'doctrine_inicio', '_controller' => 'App\\Controller\\DoctrineController::index'], null, null, null, false, false, null]],
        '/doctrine/categorias' => [[['_route' => 'doctrine_categorias', '_controller' => 'App\\Controller\\DoctrineController::categorias'], null, null, null, false, false, null]],
        '/doctrine/categorias/add' => [[['_route' => 'doctrine_categorias_add', '_controller' => 'App\\Controller\\DoctrineController::categorias_add'], null, null, null, false, false, null]],
        '/doctrine/productos' => [[['_route' => 'doctrine_productos', '_controller' => 'App\\Controller\\DoctrineController::productos'], null, null, null, false, false, null]],
        '/doctrine/productos/paginacion' => [[['_route' => 'doctrine_productos_paginacion', '_controller' => 'App\\Controller\\DoctrineController::productos_paginacion'], null, null, null, false, false, null]],
        '/doctrine/productos/buscador' => [[['_route' => 'doctrine_productos_buscador', '_controller' => 'App\\Controller\\DoctrineController::productos_buscador'], null, null, null, false, false, null]],
        '/doctrine/productos/where_in' => [[['_route' => 'doctrine_productos_where_in', '_controller' => 'App\\Controller\\DoctrineController::productos_where_in'], null, null, null, false, false, null]],
        '/doctrine/productos/fecha' => [[['_route' => 'doctrine_productos_fecha', '_controller' => 'App\\Controller\\DoctrineController::productos_fecha'], null, null, null, false, false, null]],
        '/doctrine/productos/add' => [[['_route' => 'doctrine_productos_add', '_controller' => 'App\\Controller\\DoctrineController::productos_add'], null, null, null, false, false, null]],
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
        '/restringido' => [[['_route' => 'restringido_inicio', '_controller' => 'App\\Controller\\RestringidoController::index'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template_inicio', '_controller' => 'App\\Controller\\TemplateController::index'], null, null, null, false, false, null]],
        '/template/excepcion' => [[['_route' => 'template_exception', '_controller' => 'App\\Controller\\TemplateController::excepcion'], null, null, null, false, false, null]],
        '/template/trabajo' => [[['_route' => 'template_trabajo', '_controller' => 'App\\Controller\\TemplateController::trabajo'], null, null, null, false, false, null]],
        '/template/layout' => [[['_route' => 'template_layout', '_controller' => 'App\\Controller\\TemplateController::layout'], null, null, null, false, false, null]],
        '/utilidades' => [[['_route' => 'utilidades_inicio', '_controller' => 'App\\Controller\\UtilidadesController::index'], null, null, null, false, false, null]],
        '/utilidades/enviar-email' => [[['_route' => 'utilidades_email', '_controller' => 'App\\Controller\\UtilidadesController::enviar_email'], null, null, null, false, false, null]],
        '/utilidades/api-rest' => [[['_route' => 'utilidades_api_rest', '_controller' => 'App\\Controller\\UtilidadesController::api_rest'], null, null, null, false, false, null]],
        '/utilidades/api-rest/crear' => [[['_route' => 'utilidades_api_rest_crear', '_controller' => 'App\\Controller\\UtilidadesController::api_rest_crear'], null, null, null, false, false, null]],
        '/utilidades/filesystem' => [[['_route' => 'utilidades_filesystem', '_controller' => 'App\\Controller\\UtilidadesController::filesystem'], null, null, null, false, false, null]],
        '/utilidades/pdf' => [[['_route' => 'utilidades_pdf', '_controller' => 'App\\Controller\\UtilidadesController::pdf'], null, null, null, false, false, null]],
        '/utilidades/pdf/generar' => [[['_route' => 'utilidades_pdf_generar', '_controller' => 'App\\Controller\\UtilidadesController::pdf_generar'], null, null, null, false, false, null]],
        '/utilidades/excel' => [[['_route' => 'utilidades_excel', '_controller' => 'App\\Controller\\UtilidadesController::excel'], null, null, null, false, false, null]],
        '/utilidades/excel/generar' => [[['_route' => 'utilidades_excel_generar', '_controller' => 'App\\Controller\\UtilidadesController::excel_generar'], null, null, null, false, false, null]],
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
                    .'|productos/(?'
                        .'|categoria/([^/]++)(*:275)'
                        .'|e(?'
                            .'|ditar/([^/]++)(*:301)'
                            .'|liminar/([^/]++)(*:325)'
                        .')'
                        .'|fotos/(?'
                            .'|([^/]++)(*:351)'
                            .'|eliminar/([^/]++)(*:376)'
                        .')'
                    .')'
                .')'
                .'|/template/parametros/([^/]++)(?:/([^/]++))?(*:430)'
                .'|/utilidades/api\\-rest/(?'
                    .'|editar/([^/]++)(*:478)'
                    .'|delete/([^/]++)(*:501)'
                .')'
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
        275 => [[['_route' => 'doctrine_productos_categoria', '_controller' => 'App\\Controller\\DoctrineController::productos_categoria'], ['categoria_id'], null, null, false, true, null]],
        301 => [[['_route' => 'doctrine_productos_editar', '_controller' => 'App\\Controller\\DoctrineController::productos_editar'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'doctrine_productos_eliminar', '_controller' => 'App\\Controller\\DoctrineController::productos_eliminar'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'doctrine_productos_fotos', '_controller' => 'App\\Controller\\DoctrineController::productos_fotos'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'doctrine_productos_fotos_eliminar', '_controller' => 'App\\Controller\\DoctrineController::productos_fotos_eliminar'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'template_parametros', 'slug' => 'algo', '_controller' => 'App\\Controller\\TemplateController::parametros'], ['id', 'slug'], null, null, false, true, null]],
        478 => [[['_route' => 'utilidades_api_rest_editar', '_controller' => 'App\\Controller\\UtilidadesController::api_rest_editar'], ['id'], null, null, false, true, null]],
        501 => [
            [['_route' => 'utilidades_api_rest_delete', '_controller' => 'App\\Controller\\UtilidadesController::api_rest_delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
