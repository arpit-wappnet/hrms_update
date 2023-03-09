<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashbordcontroller extends Controller
{
    public function admin_dashbord() : \Illuminate\View\View
    {
        if(Auth::check()){
            return view('dashbord');
        }else{
            return view('index');
        }

    }

    public function user_dashbord() : \Illuminate\View\View
    {
        if(Auth::check()){
            return view('user.dashbord');
        }else{
            return view('index');
        }

    }
}
