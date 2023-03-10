<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Interfaces\AuthRepositoryInterface;


/**
 * Summary of AuthController
 */
class AuthController extends Controller
{

    protected $userRepository;

    public function __construct(AuthRepositoryInterface  $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index() : View
    {
        return view('index');
    }

    /**
     * Summary of login
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');


        $user = $this->userRepository->getAllUser($credentials['email']);

        if ($user && Auth::attempt($credentials)) {
            // admin role == 1
            // user  role == 0
            if(Auth::user()->role == '1'){

                Toastr::success('Logout successfully :)','Success');

                return redirect()->route('dashbord')->with('success', 'You are successfully logged in');

            } elseif(Auth::user()->role == '0') {

                return redirect()->route('user.dashbord')->with('success', 'You are successfully logged in');
            }

        }
        return redirect()->back()->with('error', 'Invalid email or password');

    }
    public function logout()  : RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
    public function sendResetLink(Request$request) : RedirectResponse
    {
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

    public function ShowResetform(Request $request , $token = null) : \Illuminate\View\View
    {
        return view('passwordReset')->with(['token'=>$token, 'email'=>$request->email]);
    }

    public function resetpassword(Request $request) : RedirectResponse
    {

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
