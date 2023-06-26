<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Repository\Eloquent\ResetPasswordRepository;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{

    protected $resetPasswordRepository;

    public function __construct(ResetPasswordRepository $resetPasswordRepository)
    {
        $this->resetPasswordRepository = $resetPasswordRepository;
    }

    public function sendLink(ResetPasswordRequest $request){

        $this->resetPasswordRepository->sendLink($request->validated());

        return redirect()->back();
    }

    public function resetPassword(ChangePasswordRequest $request){

        $this->resetPasswordRepository->resetPassword($request->validated());

        return redirect('/login');
    }
}
