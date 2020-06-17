<?php

namespace application\models;

use application\core\Model;
use PDO;

class Post extends Model
{
    public $id;
    public $title;
    public $body;

    public function fetchAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM Posts');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save()
    {
    }
}