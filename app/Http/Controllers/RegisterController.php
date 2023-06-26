<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Repository\Eloquent\RegisterRepository;

class RegisterController extends Controller
{
    protected $registerRepository;

    public function __construct(RegisterRepository $registerRepository)
    {
        $this->registerRepository = $registerRepository;
    }

    public function register(RegisterRequest $request)
    {
        $response = $this->registerRepository->register($request->validated());

        if($response === FALSE) {
            return view('register', ["message" => "Login failed"]);
        }

        return view("index", ["user" => auth()->user()]);
    }
}
