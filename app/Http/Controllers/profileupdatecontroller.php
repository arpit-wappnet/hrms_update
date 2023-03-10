<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\FlareClient\View;

class profileupdatecontroller extends Controller
{
    public function profile_update_show(): \Illuminate\Contracts\View\View
    {

        return view('profileupdate');
    }

    public function profile_Update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);

        $user = Auth::user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        return back()->with('message', 'Profile Updated');
    }

    public function password_upadte_show(): \Illuminate\View\View
    {
        return view('passwordchange');
    }

    public function passwordUpdate(Request $request): \Illuminate\Http\RedirectResponse
    {

        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }
        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }



}
