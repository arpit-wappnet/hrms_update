<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function register(){

        return view('register');
    }

    public function Register_user(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);


        user::create($request->all());
        return redirect("/")->withSuccess('Great! You have Successfully Register Your data');
    }
}
