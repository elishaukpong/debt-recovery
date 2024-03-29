<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Repository\Eloquent\RegisterRepository;

class RegisterController extends Controller
{
    public function __construct(private RegisterRepository $registerRepository)
    {}
    

    public function register()
    {
        return view ("register");
    }

    public function registration(RegisterRequest $request)
    {
        if(! $this->registerRepository->register($request->validated())) {
            return redirect()->back()
                ->with('error', 'Could not register user!');
        }

        return redirect()->route('dashboard.index');
    }


}
