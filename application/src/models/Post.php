<?php

namespace application\models;

use application\core\Model;


class Post extends Model
{
    public $id;
    public $title;
    public $body;

    public function fetchAll()
    {
        return $this->db->fetchAll('SELECT * FROM Posts');
    }

    public function save()
    {
    }
}