<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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
}
