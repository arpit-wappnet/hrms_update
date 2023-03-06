<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index() : View
    {
        return view('index');
    }

    public function login(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashbord');
        } else {
            return back()->with('errors', 'Invalid data');
        }
    }

    public function logout()  : RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}
