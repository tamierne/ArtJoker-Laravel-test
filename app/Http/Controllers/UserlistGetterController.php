<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserlistGetterController extends Controller
{
    public function getUsersList(){

        $users = User::whereNotNull('auth_type')->select('name', 'email')->get();

        return $users->toJson();
    }
}