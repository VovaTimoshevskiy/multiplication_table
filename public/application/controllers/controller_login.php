<?php

class Controller_Login extends Controller
{
	function action_index()
	{	
		$this->view->generate('login.php', 'layout.php');
	}
}