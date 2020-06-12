<?php

class Model_Posts extends Model
{

  public $id;
  public $title;
  public $body;

  public function findAll()
  {
   $data = $this->db->query('SELECT * FROM Posts')->fetchAll(PDO::FETCH_UNIQUE);
   return  $data;
  }

  public function update()
  {
      # code...
  }

  public function delete()
  {
      # code...
  }

  public function create()
  {
      # code...
  }
}
