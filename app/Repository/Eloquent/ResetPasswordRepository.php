<?php
namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ResetPasswordNotification;
use App\Notifications\ResetPasswordLinkNotification;

class ResetPasswordRepository extends BaseRepository
{
    protected $user;
    protected $mail;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function sendLInk($data)
    {
        $user = $this->user->where('email', $data['email'])->first();

        $message = [
            "title" => "Forgotten Your Password?",
            "body" =>"No worries, click the button below to reset your password",
        ];

         Mail::to($user->notify(new ResetPasswordLinkNotification($message)));

        return true;

    }

    public function resetPassword($data)
    {
        $user = $this->user->where('email', $data['email'])->first();

        $user->update([
            "password" => bcrypt($data["password"])
        ]);


        if(!$user)
        {
            return true;
        }

        $message = [
            "title" => "Reset Password",
            "body" => "Password Reset was Successful"
        ];

         Mail::to($user->notify(new ResetPasswordNotification($message)));

        return true;


    }
}
