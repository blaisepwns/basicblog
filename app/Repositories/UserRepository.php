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

    
}
