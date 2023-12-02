<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(){
        $login = 'Login';

        return view('login', ['login' => $login]);
    }

    function register(){
        $register = 'register';

        return view('register', ['register' => $register]);
    }
}
