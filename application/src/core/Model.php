<?php

namespace application\core;

use PDO;

class Model
{

    public $db;


    public function __construct()
    {
        $config = require 'application/config/db.php';
        try {
            $this->db = new PDO(
                'mysql:host=' . $config['host'] . ';
                dbname=' . $config['name'] . '',
                $config['user'],
                $config['password']
            );
        } catch (PDOException $e) {
            die('Подключение не удалось: ' . $e->getMessage());
        }
    }


}