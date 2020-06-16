<?php


namespace application\core;

class Response
{
    public $path;

    public function run()
    {
        $this->path = sprintf(
            "application\\controllers\\%sController",
            ucfirst(Router::$route['controller'])
        );

        if (class_exists($this->path)) {
            $model = new $this->path();
            $action = Router::$route['action'];
            if (method_exists($model, $action)) {
                $model->$action();
            } else {
                View::render("404");
            }
        } else {
            View::render("404");
        }
    }
}