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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\ConnexionController::connexion'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\ConnexionController::inscription'], null, null, null, false, false, null]],
        '/AllFicheFrais/3' => [[['_route' => 'allFicheFrais', '_controller' => 'App\\Controller\\FicheFraisController::AllFicheFrais'], null, null, null, false, false, null]],
        '/postFF' => [[['_route' => 'postFF', '_controller' => 'App\\Controller\\FicheFraisController::postFF'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/uneFiche(?'
                    .'|/([^/]++)(*:190)'
                    .'|Modif/([^/]++)(*:212)'
                .')'
                .'|/getD(?'
                    .'|NFF/([^/]++)(*:241)'
                    .'|FF/([^/]++)(*:260)'
                .')'
                .'|/postHF/([^/]++)(*:285)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'uneFiche', '_controller' => 'App\\Controller\\FicheFraisController::uneFiche'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'uneFicheModif', '_controller' => 'App\\Controller\\FicheFraisController::uneFicheModif'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'getDNFF', '_controller' => 'App\\Controller\\FicheFraisController::getDNFF'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'getDFF', '_controller' => 'App\\Controller\\FicheFraisController::getDFF'], ['id'], null, null, false, true, null]],
        285 => [
            [['_route' => 'postHF', '_controller' => 'App\\Controller\\FicheFraisController::postHF'], ['idAvoir1'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
