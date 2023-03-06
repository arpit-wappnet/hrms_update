<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileupdatecontroller extends Controller
{
    public function profile_update_show(){

        return view('profileupdate');
    }

    public function profile_Update(Request $request)
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
}
