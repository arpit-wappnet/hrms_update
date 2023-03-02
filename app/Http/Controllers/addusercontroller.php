<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class addusercontroller extends Controller
{
    public function index(){
        return view('adduser');
    }

    public function adduser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);


        User::create($request->all());
        return redirect("/userdata")->withSuccess('Great! You have Successfully Register Your data');
    }
}
