<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signInPage(){
        return view('Authentication.signin');
    }

    public function signUpPage(){
        return view("Authentication.signup");
    }
}
