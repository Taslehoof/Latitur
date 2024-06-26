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
        '/pasarelas' => [[['_route' => 'pasarelas_inicio', '_controller' => 'App\\Controller\\PasarelasController::index'], null, null, null, false, false, null]],
        '/pasarelas/webpay' => [[['_route' => 'pasarelas_webpay', '_controller' => 'App\\Controller\\PasarelasController::webpay'], null, null, null, false, false, null]],
        '/pasarelas/webpay/respuesta' => [[['_route' => 'pasarelas_webpay_respuesta', '_controller' => 'App\\Controller\\PasarelasController::webpay_respuesta'], null, null, null, false, false, null]],
        '/pasarelas/paypal' => [[['_route' => 'pasarelas_paypal', '_controller' => 'App\\Controller\\PasarelasController::paypal'], null, null, null, false, false, null]],
        '/pasarelas/paypal/respuesta' => [[['_route' => 'pasarelas_respuesta', '_controller' => 'App\\Controller\\PasarelasController::paypal_respuesta'], null, null, null, false, false, null]],
        '/pasarelas/paypal/cancelado' => [[['_route' => 'pasarelas_cancelado', '_controller' => 'App\\Controller\\PasarelasController::paypal_cancelado'], null, null, null, false, false, null]],
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
        '/utilidades/excel/importar' => [[['_route' => 'utilidades_excel_importar', '_controller' => 'App\\Controller\\UtilidadesController::excel_importar'], null, null, null, false, false, null]],
        '/utilidades/qr' => [[['_route' => 'utilidades_qr', '_controller' => 'App\\Controller\\UtilidadesController::qr'], null, null, null, false, false, null]],
        '/utilidades/mapa' => [[['_route' => 'utilidades_mapa', '_controller' => 'App\\Controller\\UtilidadesController::mapa'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:137)'
                            .'|router(*:151)'
                            .'|exception(?'
                                .'|(*:171)'
                                .'|\\.css(*:184)'
                            .')'
                        .')'
                        .'|(*:194)'
                    .')'
                .')'
                .'|/doctrine/(?'
                    .'|categorias/e(?'
                        .'|ditar/([^/]++)(*:246)'
                        .'|liminar/([^/]++)(*:270)'
                    .')'
                    .'|productos/(?'
                        .'|categoria/([^/]++)(*:310)'
                        .'|e(?'
                            .'|ditar/([^/]++)(*:336)'
                            .'|liminar/([^/]++)(*:360)'
                        .')'
                        .'|fotos/(?'
                            .'|([^/]++)(*:386)'
                            .'|eliminar/([^/]++)(*:411)'
                        .')'
                    .')'
                .')'
                .'|/template/parametros/([^/]++)(?:/([^/]++))?(*:465)'
                .'|/utilidades/api\\-rest/(?'
                    .'|editar/([^/]++)(*:513)'
                    .'|delete/([^/]++)(*:536)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        137 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        151 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        171 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        246 => [[['_route' => 'doctrine_categorias_editar', '_controller' => 'App\\Controller\\DoctrineController::categorias_editar'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'doctrine_categorias_eliminar', '_controller' => 'App\\Controller\\DoctrineController::categorias_eliminar'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'doctrine_productos_categoria', '_controller' => 'App\\Controller\\DoctrineController::productos_categoria'], ['categoria_id'], null, null, false, true, null]],
        336 => [[['_route' => 'doctrine_productos_editar', '_controller' => 'App\\Controller\\DoctrineController::productos_editar'], ['id'], null, null, false, true, null]],
        360 => [[['_route' => 'doctrine_productos_eliminar', '_controller' => 'App\\Controller\\DoctrineController::productos_eliminar'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'doctrine_productos_fotos', '_controller' => 'App\\Controller\\DoctrineController::productos_fotos'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'doctrine_productos_fotos_eliminar', '_controller' => 'App\\Controller\\DoctrineController::productos_fotos_eliminar'], ['id'], null, null, false, true, null]],
        465 => [[['_route' => 'template_parametros', 'slug' => 'algo', '_controller' => 'App\\Controller\\TemplateController::parametros'], ['id', 'slug'], null, null, false, true, null]],
        513 => [[['_route' => 'utilidades_api_rest_editar', '_controller' => 'App\\Controller\\UtilidadesController::api_rest_editar'], ['id'], null, null, false, true, null]],
        536 => [
            [['_route' => 'utilidades_api_rest_delete', '_controller' => 'App\\Controller\\UtilidadesController::api_rest_delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
