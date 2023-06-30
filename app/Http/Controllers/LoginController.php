<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repository\Eloquent\LoginRepository;

class LoginController extends Controller
{
    public function __construct(private LoginRepository $loginRepository)
    {}

    public function login(LoginRequest $request)
    {
        if(! $this->loginRepository->login($request->validated()) ) {
            return redirect()->route('login')
                ->withErrors("Login Credentials are invalid");
        }
    }
}
