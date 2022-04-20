<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;
use Socialite;
use App\Models\User;

class AuthController extends Controller
{
    protected function userCheck($user)
    {
        if(!isset($user->name)){
            $user->name = $user->nickname;
        }
    }

    protected function authRouting($user){
        Auth::login($user);
        return redirect('user/profile');
    }
}