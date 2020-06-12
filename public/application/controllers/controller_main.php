<?php

class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->generate('navigation.php', 'layout.php');
	}
}