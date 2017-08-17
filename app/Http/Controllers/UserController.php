<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Repositories\UserRepository;
use Facades\App\Factories\UserFactory;
use App\User;

use App\Http\Requests\UserEditRequest;


class UserController extends Controller
{
    public function index () 
    {
    	return view('users',
    		['users' => UserRepository::all()]
    	);
    }

    public function store () 
    {
    	return $this->save(UserFactory::newUser());
    }

    public function show (User $user) 
    {
    	return view('show', [
    		'user' => $user
    	]);
    }

    public function update(UserEditRequest $request, User $user) 
    {
    	return $this->save($user);
    }

    public function destroy (User $user) 
    {
    	UserRepository::delete($user);
        return redirect()->route('users.index');
    }

    public function edit (User $user) 
    {
    	return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function save (User $user) 
    {
    	$user->fill(request()->all());
        UserRepository::persist($user);
        return redirect()->route('users.index');
    }
}
