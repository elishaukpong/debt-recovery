<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Repository\Eloquent\LoginRepository;

class LoginController extends Controller
{
    protected $loginRepository;

    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function login(LoginRequest $request)
    {
        $response = $this->loginRepository->login($request->validated());

        if($response === FALSE) {
            return view('login', ["message" => "Login failed"]);
        }

        return view("index");
    }
}
