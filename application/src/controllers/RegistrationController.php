<?php


namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\User;

class RegistrationController extends Controller
{

    public function index()
    {
        View::render("registration");
    }

    public function registration()
    {
        $this->model = new User();

        if (!empty($_POST) && !empty($_POST['name'])
            && !empty($_POST['email'])
            && !empty($_POST['password'])
            && !empty($_POST['password_confirm'])
        ) {
            if ($_POST['password'] === $_POST['password_confirm']) {
                $regName = $_POST['name'];
                $regEmail = $_POST['email'];
                $regPassword = md5($_POST['password']);
                $this->model->registerNewUser(
                    $regName,
                    $regEmail,
                    $regPassword
                );
                $this->model->checkUser();
            } else {
                header("Location:/login");
            }
        } else {
            header("Location:/login");
        }
    }
}