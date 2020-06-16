<?php

namespace application\core;

class View
{

    public static function render($content_view, $data = [])
    {
        extract($data);
        require_once "application/views/layout.php";
    }

}