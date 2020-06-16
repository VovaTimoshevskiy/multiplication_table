<?php

namespace application\core;

use PDO;

class Db
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


    public function fetchAll($sql)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}