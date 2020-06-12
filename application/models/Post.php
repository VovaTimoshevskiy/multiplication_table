<?php

namespace application\models;

use application\core\Model;

class Post extends Model
{
    public static function get()
    {
        return $posts=[
            1 => [
                "title" => "Hello",
                "body"=>"lkdbmbmbpb;pb[pdmbpd"
            ],
        
            2 => [
                "title" => "Hello2",
                "body" => "lkdbmbmbpb;pb[pdmbpd"
            ],
        
            3 => [
                "title" => "Hello2",
                "body" => "lkdbmbmbpb;pb[pdmbpd"
            ],
        ]; ;
    }
}