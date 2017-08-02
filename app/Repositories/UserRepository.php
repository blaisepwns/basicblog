<?php
namespace App\Repositories;

use App\User;

use Illuminate\Http\Request;

class UserRepository
{

    public function all()
    {
        return User::all();
    }

    public function persist (User $user) 
    {
    	return $user->save();
    }

    public function delete (User $user) 
    {
    	return $user->delete();
    }

    
}
