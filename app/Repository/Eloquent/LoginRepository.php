<?php
namespace App\Repository\Eloquent;

use App\Repository\BaseRepository;
use App\Models\User;

class LoginRepository extends BaseRepository
{
    public function login(array $data): bool
    {
        return auth()->attempt($data);
    }
}
