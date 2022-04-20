<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;
use Socialite;
use App\Models\User;

class GitHubController extends AuthController
{

    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $searchUser = User::where('github_id', $user->id)->first();
      
            if(!$searchUser){
                parent::userCheck($user);
                
                $searchUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id'=> $user->id,
                    'auth_type'=> 'github',
                    'password' => encrypt('gitpwd059')
                ]);

            }

            return parent::authRouting($searchUser);
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}