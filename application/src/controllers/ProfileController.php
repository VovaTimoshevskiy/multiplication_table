<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\User;

class ProfileController extends Controller
{

    public function index()
    {
        $this->model = new User();
        $data = $this->model->getInfo();
        View::render("profile", $data);
    }

}