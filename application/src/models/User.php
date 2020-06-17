<?php


namespace application\models;

use application\core\Model;
use PDO;

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $img;


    public function checkUser()
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql
            = "SELECT * FROM Users WHERE email = :email AND password = :password";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();


        $res = $stmt->fetch(PDO::FETCH_ASSOC);


        if (!empty($res)) {
            $_SESSION['name'] = $res['name'];
            header("Location: /profile");
        } else {
             var_dump($_POST['email']);
            return false;
        }
    }

    public function registerNewUser(
        $regName,
        $regEmail,
        $regPassword
    ) {
        $sql = "INSERT INTO Users(name, email, password)
				VALUES (:name, :email, :password)
		";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $regName, PDO::PARAM_STR);
        $stmt->bindValue(":email", $regEmail, PDO::PARAM_STR);
        $stmt->bindValue(":password", $regPassword, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function addImg()
    {
    }

}