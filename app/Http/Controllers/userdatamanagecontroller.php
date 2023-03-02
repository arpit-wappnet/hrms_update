<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userdatamanagecontroller extends Controller
{
    public function destroy($id)
        {
            $post = user::find($id); // Find the post by ID

            if(!$post) {
                return response()->json(['error' => 'Post not found'], 404); // Return a JSON response if the post is not found
            }

            $post->delete(); // Delete the post

            return response()->json(['success'=>'Post deleted successfully.']); // Return a JSON response indicating success
        }
        public function edit($id)
        {
            $user=User::find($id);
            return view('userupdate',compact('user'));

        }

        public function usetredit(Request $request){

            $request->validate([
                'id'=>'required',
                'name' => 'required|min:4|string|max:255',
                'email' => 'required|email|string|max:255'
            ]);
            $user=User::find($request->id);
            $user->update($request->only('name','email'));
        // dd($user);
                return redirect()->route('users.index')->withSuccess('sucess','User updated successfully.');
        }
}
