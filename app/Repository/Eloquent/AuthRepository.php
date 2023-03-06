<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;

class AuthRepository extends BaseRepository{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function signUp($request){
        $request['password'] = bcrypt($request['password']);

        if(!$user = $this->user->create($request)){
            return [
                "status" => $this->isUnsuccessful(),
                "message" => "SignUp Failed"
            ];
        }

        return [
            "status" => $this->isSuccessful(),
            "user" => $user,
        ];
    }

    public function signIn($request){
        if(!auth()->attempt([
            'email' => $request['email'],
            'password' => $request['password']
            ])) {

            return [
                "status" => $this->isUnsuccessful(),
                "message" => "Invalid credientials"
            ];
        }

        auth()->login($this->user->where("email", $request['email'])->first());

        return [
            "status" => $this->isSuccessful(),
            "user" => auth()->user(),
        ];
    }
}
