<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ChangePassword;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function sendChangePassword($email)
    {

        $message = [
            "title" => "Reset Password Confirmation" ,
            "body" => "A request to reset your password from this application was sent. Please click the button below to complete password reset process.",
            "action_text" => "Confirm",
            "url" => url("/changePassword"),
        ];

        Notification::route('mail', $email)->notify(new ChangePassword($message));

        return view("User.settings", ["message" => "Email Sent, Please check your email"]);

    }
}
