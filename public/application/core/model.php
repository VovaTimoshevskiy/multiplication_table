<?php

class Model
{
	public function __construct()
	{
		try {
            $this->db = new PDO('mysql:host=localhost;dbname=homestead', 'homestead', 'secret');
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
	}
}