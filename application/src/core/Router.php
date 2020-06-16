<?php

namespace application\core;

class Router
{
    public static $route = [];

    public static function run()
    {
        require 'application/config/routes.php';

        $param = trim($_SERVER['REQUEST_URI'], '/');
        if (array_key_exists($param, $routes)) {
            self::$route = $routes[$param];
        } else {
            View::render("404");
        }
    }


}