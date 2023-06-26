<?php
namespace App\Repository\Eloquent;

use App\Repository\BaseRepository;
use App\Models\User;

class RegisterRepository extends BaseRepository
{
    protected $user;
    protected const FALSE = false;
    protected const TRUE = true;

    public function __construct( User $user)
    {
        $this->user = $user;
    }

    public function register($data)
    {
        $data['password'] = bcrypt($data['password']);

        if(!$this->user->create($data))
        {
            return self::FALSE;
        }

        auth()->login($this->user->where("email", $data['email'])->first());


        return self::TRUE;
    }
}
