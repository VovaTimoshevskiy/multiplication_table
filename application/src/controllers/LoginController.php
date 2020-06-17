<?php


namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\User;

class LoginController extends Controller
{
    public function index()
    {
        View::render("login");
    }

    public function login()
    {
        $this->model = new User();
        $this->model->checkUser();
    }

    public function logout()
    {
        unset($_SESSION['name']);
        header("Location:/login");
    }
}