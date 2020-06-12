<?php

namespace application\core;

use application\core\View;

class Router {

    public $route = [];
    public $path;

    public function __construct()
    {
        require 'application/config/routes.php';

        $param = trim($_SERVER['REQUEST_URI'],'/');
        if (array_key_exists($param, $routes)) {
            $this->route = $routes[$param];
            $this->path = 'application\controllers\\'.ucfirst($this->route['controller']).'Controller';
        }
        else
        {
          View::render("404");
        }
        
    }

    public  function run(){

         if(class_exists($this->path))
         {
            $model = new $this->path();
            $action = $this->route['action'];
            if(method_exists($model, $action))
            {
              $model->$action();
            }
            else
            {
                View::render("404");
            }
         }
         else
         {
            View::render("404");
         }
    }

}