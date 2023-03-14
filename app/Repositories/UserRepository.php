<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(array $data, $id)
    {
        $user = User::find($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $post = user::find($id);
        if ($post) {
            return $post->delete();
        }
    }

    public function addUser($request){
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);
    }
}

