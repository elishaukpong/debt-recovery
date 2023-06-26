<?php
namespace App\Repository\Eloquent;

use App\Repository\BaseRepository;
use App\Models\User;

class LoginRepository extends BaseRepository{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login($data){

        if(!auth()->attempt($data))
        {
            return $this->fail();
        }

        return auth()->login($this->user->where("email", $data['email'])->first());
    }
}
