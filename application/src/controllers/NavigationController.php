<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class NavigationController extends Controller
{

    public function index()
    {
        View::render("navigation");
    }

}