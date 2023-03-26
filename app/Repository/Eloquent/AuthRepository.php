<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;

class AuthRepository extends BaseRepository{

    protected $user;
    protected const TRUE = true;
    protected const FALSE = false;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function signUp($data){
        $data['password'] = bcrypt($data['password']);

        $this->user->create($data);

        auth()->login($this->user->where("email", $data['email'])->first());

        return [
            "status" => self::TRUE,
            "data" => $data,
        ];
    }

    public function signIn($data){

        if(!auth()->attempt($data)) {
            return self::FALSE;
        }

        return auth()->login($this->user->where("email", $data['email'])->first());
    }
}
