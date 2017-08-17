<?php
namespace App\Repositories;

use App\Post;

use Illuminate\Http\Request;

class PostRepository
{

    public function all()
    {
        return Post::all();
    }

    public function persist (Post $post) 
    {
    	return $post->save();
    }

    public function delete (Post $post) 
    {
    	return $post->delete();
    }    
}
