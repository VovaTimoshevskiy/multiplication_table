<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\core\View;

class PostsController extends Controller {

	public function index() {


        $posts = Post::get();
        
		View::render("posts",$posts);
		
	}

}