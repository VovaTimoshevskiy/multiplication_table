<?php

return $routes = [

    '' => [
        'controller' => 'home',
        'action'     => 'index',
    ],

    'registration' => [
        'controller' => 'auth',
        'action'     => 'registration',
    ],

    'login' => [
        'controller' => 'auth',
        'action'     => 'login',
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

];