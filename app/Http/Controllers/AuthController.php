<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Repository\Eloquent\AuthRepository;

class AuthController extends Controller
{
    protected $authRepository;
    protected const FALSE = false;
    protected const TRUE = true;

    public function __construct( AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function signInPage(){
        return view('Authentication.signin');
    }

    public function signUpPage(){
        return view("Authentication.signup");
    }

    public function signUp(SignUpRequest $request){
        $signUpResponse = $this->authRepository->signUp($request->validated());


        if($signUpResponse === self::FALSE) {
            return view('register', ["message" => $signUpResponse['message']]);
        }

        return view("User.dashboard");

    }

    public function signIn(SignInRequest $request){
        $signInResponse = $this->authRepository->signIn($request->validated());

        if($signInResponse === self::FALSE) {
            return view('Authentication.signup', ["message" => $signInResponse['message']]);
        }

        return view("User.dashboard");
    }
}
