<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashbordcontroller extends Controller
{
    public function dashbord(){
        if(Auth::check()){
            return view('dashbord');
        }else{
            return view('index');
        }

    }
}
