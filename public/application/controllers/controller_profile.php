<?php

class Controller_Profile extends Controller
{
	function action_index()
	{	
		$this->view->generate('profile.php', 'layout.php');
	}
}