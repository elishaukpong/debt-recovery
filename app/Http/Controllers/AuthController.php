<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view ("register");
    }

    public function login()
    {
        return view("login");
    }

    public function dashboard()
    {
        return view("index");
    }

    public function forgetPassword()
    {
        return view("forget-password");
    }

    public function resetPassword()
    {
        return view("reset-password");
    }

    public function logout(Request $request)
    {
        auth()->logout();

        return redirect("/login");
    }
}
