<?php
namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct(private User $user)
    {
        $this->user = $user;
    }

    public function getUser(){

        return $this->user->where("id", auth()->id())->first();

    }

    public function edit($data)
    {
        $user =  $this->user->where("id", auth()->id())->update($data);
        dd($user);
        return $this->user->where("id", auth()->user())->update($data);
    }

}
