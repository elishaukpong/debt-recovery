<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function dashboard()
    {
        return view("index");
    }


    public function logout(Request $request)
    {
        auth()->logout();

        return redirect("/login");
    }
}
