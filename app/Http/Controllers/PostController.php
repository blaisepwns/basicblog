<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests\PostCreateRequest;
use Facades\App\Factories\PostFactory;
use Facades\App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
	public function store(PostCreateRequest $request)
	{
		return $this->save(PostFactory::newPost());
	}
	    

	private function save(Post $post) {

		$post->fill(request()->all());
		$post->user_id = Auth::id();
		PostRepository::persist($post);
		return redirect()->route('home');
	}
}
