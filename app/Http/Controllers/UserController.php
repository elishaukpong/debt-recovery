<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
}
