<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Repository\Eloquent\UserRepository;

class UserController extends Controller
{

    protected $user;
    protected $userRepository;

    public function __construct(User $user, UserRepository $userRepository)
    {
        $this->user = $user;
        $this->userRepository = $userRepository;
    }

    // public function getUserById($userId)
    // {
    //     $user = ;
    // }

    public function dashboard(){
        return view("User.dashboard");
    }

    public function viewPendingEmails(){
        return view("User.pendingEmails");
    }

    public function viewPendingCalls(){
        return view("User.pendingCalls");
    }

    public function viewPendingSMSs(){
        return view("User.pendingSMS");
    }

    public function debtPortal(){
        return view("Debt.debtPortal");
    }

    public function debtForm(){
        return view("Debt.debtForm");
    }

    public function debtHistory(){
        return view("Debt.debtHIstory");
    }

    public function Settings(){
        return view ("User.settings");
    }

    public function update(UpdateProfileRequest $request)
    {   
        $reponse = $this->userRepository->updateProfile($request->validated());

        return view("User.settings", ["profile_message" => $reponse["profile_message"]]);
    }
}
