<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class ProfileController extends Controller
{

    public function index()
    {
        View::render("profile");
    }

}