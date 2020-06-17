<?php

return $routes = [

    '' => [
        'controller' => 'home',
        'action'     => 'index',
    ],

    'registration' => [
        'controller' => 'registration',
        'action'     => 'index',
    ],

    'login' => [
        'controller' => 'login',
        'action'     => 'index',
    ],

    'navigation' => [
        'controller' => 'navigation',
        'action'     => 'index',
    ],

    'profile' => [
        'controller' => 'profile',
        'action'     => 'index',
    ],

    'posts' => [
        'controller' => 'posts',
        'action'     => 'index',
    ],

    'profile/registration' => [
        'controller' => 'registration',
        'action'     => 'registration',
    ],

    'profile/login' => [
        'controller' => 'login',
        'action'     => 'login',
    ],

    'profile/logout' => [
        'controller' => 'login',
        'action'     => 'logout',
    ],

    'edit' => [
        'controller' => 'edit',
        'action'     => 'index',
    ],

    'edit/profile' => [
        'controller' => 'edit',
        'action'     => 'edit',
    ],

    'edit/profile/img' => [
        'controller' => 'edit',
        'action'     => 'uploadImg',
    ],

];