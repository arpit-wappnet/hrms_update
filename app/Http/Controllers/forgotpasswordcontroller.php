<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class forgotpasswordcontroller extends Controller
{
    public function sendResetLink(Request$request){
        $request->validate(
            [
                'email'=> 'required|email|exists:users,email'
            ]);

         $token = \Illuminate\Support\Str::random(64);
         $email = $request->email;

         // Delete any existing password reset records for this email address
          DB::table('password_resets')->where('email', $email)->delete();

         DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);


        $action_link = route('reset.password.form', ['token'=>$token,'email'=>$request->email]);
        $body = " We are receved a reqvest to reset the password for <b> account associted with ".$request->email." </b> . You can reset your password by clicking the link below";

        Mail::send('email-forgot',['action_link'=>$action_link, 'body'=>$body], function($message) use ($request){
            $message->from('arpit.wappnet@gmail.com' ,"hrms system" )
                    ->to($request->email, "Arpit")
                    ->subject('Reset passsword');
        } );

        return back()->with('sucess', 'we have e-mailed your password reset link');


    }
    public function ShowResetform(Request $request , $token = null){
    return view('passwordReset')->with(['token'=>$token, 'email'=>$request->email]);
    }
    public function resetpassword(Request $request){
        // dd('hjshjhshshsjdhsjhds');
        // $request->validate([
        //     'email'=>'required|email|exists:users',
        //     'password' => 'required|min:8',
        //     'confim_passsword' => 'required|same:password'
        // ]);

        $check_token = DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();
     
        if(!$check_token){

            return back()->withInput()->with('fail', 'Invalid token');

        }else{

            User::where('email', $request->email)->update([
                'password'=>Hash::make($request->password)
            ]);

            DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
        }
    }
}
