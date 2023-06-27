<?php
namespace App\Repository\Eloquent;

use App\Repository\BaseRepository;
use App\Models\User;

class RegisterRepository extends BaseRepository
{
    protected $user;

    public function __construct( User $user)
    {
        $this->user = $user;
    }

    public function register(array $data): bool
    {
        $data['password'] = bcrypt($data['password']);

        if( !$this->user->create($data) ) {
            return false;
        }

        auth()->login($this->user->where("email", $data['email'])->first());

        return true;
    }
}
