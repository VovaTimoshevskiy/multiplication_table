<?php

class Controller_Posts extends Controller
{
	function __construct()
	{
		$this->model = new Model_Posts();
		$this->view = new View();
	}

	function action_index()
	{	
		$data = $this->model->findAll();
		$this->view->generate('posts.php', 'layout.php',$data);
	}
}