<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Repositories\UserRepository;

class UserController extends Controller
{
    public function index () 
    {
    	return view('users',
    		['users' => UserRepository::all()]
    	);
    }
}
