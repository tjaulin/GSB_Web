<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'connexion' => [[], ['_controller' => 'App\\Controller\\ConnexionController::connexion'], [], [['text', '/connexion']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\ConnexionController::inscription'], [], [['text', '/inscription']], [], []],
    'allFicheFrais' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::AllFicheFrais'], [], [['text', '/AllFicheFrais/3']], [], []],
    'uneFiche' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::uneFiche'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/uneFiche']], [], []],
    'uneFicheModif' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::uneFicheModif'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/uneFicheModif']], [], []],
    'getDNFF' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::getDNFF'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/getDNFF']], [], []],
    'getDFF' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::getDFF'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/getDFF']], [], []],
    'postFF' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::postFF'], [], [['text', '/postFF/']], [], []],
    'postHF' => [['idAvoir1'], ['_controller' => 'App\\Controller\\FicheFraisController::postHF'], [], [['variable', '/', '[^/]++', 'idAvoir1'], ['text', '/postHF']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
