<?php

namespace App\Repository\Eloquent;

use App\Repository\BaseRepository;

class UserRepository extends BaseRepository{
    
    public function updateProfile($data){

        return [
            "profile_message" => "Profile updated successfully",
            "data" => auth()->user()->update($data)
        ];
    }
}