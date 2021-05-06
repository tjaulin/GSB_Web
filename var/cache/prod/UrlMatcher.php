<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\ConnexionController::connexion'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\ConnexionController::inscription'], null, null, null, false, false, null]],
        '/AllFicheFrais/3' => [[['_route' => 'allFicheFrais', '_controller' => 'App\\Controller\\FicheFraisController::AllFicheFrais'], null, null, null, false, false, null]],
        '/postFF' => [[['_route' => 'postFF', '_controller' => 'App\\Controller\\FicheFraisController::postFF'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/uneFiche(?'
                    .'|/([^/]++)(*:28)'
                    .'|Modif/([^/]++)(*:49)'
                .')'
                .'|/getD(?'
                    .'|NFF/([^/]++)(*:77)'
                    .'|FF/([^/]++)(*:95)'
                .')'
                .'|/postHF/([^/]++)(*:119)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'uneFiche', '_controller' => 'App\\Controller\\FicheFraisController::uneFiche'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'uneFicheModif', '_controller' => 'App\\Controller\\FicheFraisController::uneFicheModif'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'getDNFF', '_controller' => 'App\\Controller\\FicheFraisController::getDNFF'], ['id'], null, null, false, true, null]],
        95 => [[['_route' => 'getDFF', '_controller' => 'App\\Controller\\FicheFraisController::getDFF'], ['id'], null, null, false, true, null]],
        119 => [
            [['_route' => 'postHF', '_controller' => 'App\\Controller\\FicheFraisController::postHF'], ['idAvoir1'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
