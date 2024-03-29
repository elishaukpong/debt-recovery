<?php
namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;
use App\Notifications\ResetPasswordNotification;
use App\Notifications\ResetPasswordLinkNotification;
use Illuminate\Support\Facades\URL;

class ResetPasswordRepository extends BaseRepository
{
    public function __construct(private User $user)
    {}

    public function sendLink($data): bool
    {
        $user = $this->user->where('email', $data['email'])->first();

        $user->notify(new ResetPasswordLinkNotification([
            "title" => "Forgotten Your Password?",
            "body" =>"No worries, click the button below to reset your password",
            'url' => URL::signedRoute('password.reset',  ['email' => $user->email], now()->addMinutes(2)),
        ]));


        return true;
    }

    public function resetPassword($data): bool
    {
        $user = $this->user->where('email', $data['email'])->first();

        $user->update([
            "password" => bcrypt($data["password"])
        ]);

        $user->notify(new ResetPasswordNotification([
            "title" => "Reset Password",
            "body" => "Password Reset was Successful"
        ]));

        return true;
    }
}
