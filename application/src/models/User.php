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
            $_SESSION['id'] = $res['id'];
            $_SESSION['name'] = $res['name'];
            $_SESSION['email'] = $res['email'];
            header("Location: /profile");
        } else {
            header("Location: /login");
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

    public function getInfo()
    {
        $id = $_SESSION['id'];

        $sql
            = "SELECT * FROM Users WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_STR);
        $stmt->execute();


        return $res = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateInfo($id, $name, $email, $password)
    {
        $sql
            = "UPDATE Users SET name = '$name ', email ='$email' WHERE id = '$id'";

        if (!empty($password)) {
            $sql
                = "UPDATE Users SET  password ='$password' WHERE id = '$id'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function addImg($id, $file_path)
    {
        $sql
            = "UPDATE Users SET img = '$file_path' WHERE id = '$id'";


        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

}