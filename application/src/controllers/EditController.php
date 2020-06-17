<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\User;

class EditController extends Controller
{
    public function index()
    {
        $user = new User();
        $data = $user->getInfo();
        View::render("edit", $data);
    }

    public function edit()
    {
        $user = new User();
        $id = $_SESSION["id"];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $user->updateInfo($id, $name, $email, $password);
        header("Location:/edit");
    }

    public function uploadImg()
    {
        $id = $_SESSION["id"];
        $file_path = "application/views/img/" . $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        if ($_FILES["img"]["size"] < 500000) {
            move_uploaded_file($file_tmp, $file_path);

            $user = new User();
            $user->addImg($id, $file_path);
            header("Location:/edit");
        } else {
            echo "Too Large";
        }
    }

}