<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\core\View;

class PostsController extends Controller
{

    public function index()
    {
        $posts = new Post();
        $data = $posts->fetchAll();

        View::render("posts", $data);
    }

}