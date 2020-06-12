<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\core\View;

class HomeController extends Controller {

	public function index() {

        
		View::render("home");
		
	}

}