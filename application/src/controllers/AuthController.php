<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class AuthController extends Controller
{

    public function login()
    {
        View::render("login");
    }


    public function registration()
    {
        View::render("registration");
    }

}