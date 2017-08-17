<?php
namespace App\Factories;

use App\Post;

class PostFactory
{

    public function newPost()
    {
        $post = new Post();
        return $post;
    }
}