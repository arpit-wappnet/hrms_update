<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class logincontroller extends Controller
{
   public function index(){

    return view('index');

   }
   public function checkLogin(Request $request){

    //validation
    $request->validate(
        [
            'email'=>'required',
            'password'=> 'required'
        ]
        );
        //login here
        $data=$request->only('email', 'password');
        if (Auth::attempt($data)) {

            return redirect()->route('dashbord');
        } else {
            return back()->with('errors','invalid data');
        }
   }
    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
