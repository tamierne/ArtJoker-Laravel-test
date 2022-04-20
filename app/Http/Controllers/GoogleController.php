<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;
use Socialite;
use App\Models\User;

class GoogleController extends AuthController
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $searchUser = User::where('google_id', $user->id)->first();

            if(!$searchUser){
                parent::userCheck($user);
                
                $searchUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'auth_type'=> 'google',
                    'password' => encrypt('123456dummy')
                ]);

            }

            return parent::authRouting($searchUser);

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}