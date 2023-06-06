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

        auth()->login($this->user->where("email", $data['email'])->first());

    }

    public function signOut($data){
        return auth()->logout($data);
    }

    public function changePassword($data){
        // $data['password'] = bycrypt($data['password']);

        $result = $this->user->where("id", auth()->user()->id)->update([
            "password" => bcrypt($data["password"])
        ]);

        dd($result);

        if(!$result){
            return [
                "status" => self::FALSE,
                "message" => "Failed to change password",
            ];
        }

        return [
            "status" => self::TRUE,
            "message" => "Your password was changed successfully",
        ];


        #Update the new Password
        // User::whereId(auth()->user()->id)->update([
        //     'password' => Hash::make($request->new_password)
        // ]);

        // return back()->with("status", "Password changed successfully!");
    }
}
