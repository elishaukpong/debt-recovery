<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
// use Illuminate\Http\Request;
use App\Repository\Eloquent\UserRepository;

class UserController extends Controller
{
    public function __construct(private UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function profile(){

        return view('profile', ['user' => $this->userRepository->getUser()]);
    }

    public function editProfile(){
        return view('editProfile', ['user' => $this->userRepository->getUser()]);
    }

    public function edit(ProfileRequest $request){

        // dd($request);

        if(! $this->userRepository->edit($request->validated()) ){
            return redirect()->back()->withErrors("Profile was not updated");
        }

        return redirect()->route("profile")->with('message', "Profile Successfully Updated");
    }
}
