<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;


class AuthRepository implements AuthRepositoryInterface
{
    /**
     * Function : Register
     *
     * @param [type] $request
     * @return user
     */
    public function createPost($request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);
    }

}
