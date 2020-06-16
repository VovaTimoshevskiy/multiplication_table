<?php

namespace application\models;

use application\core\Model;


class Post extends Model
{

    public function fetchAll()
    {

        $result = $this->db->fetchAll('SELECT * FROM Posts');
        return $result;
    }
}