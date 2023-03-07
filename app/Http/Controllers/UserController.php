<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class UserController extends Controller
{
    public function User_data_show(Request $request)
    {
            if ($request->ajax()) {

            $data = User::all();
            return DataTables($data)->addIndexColumn()
                ->addColumn("action",'<form action="{{route("users.delete",$id) }}" method="POST">

                @csrf
                @method("DELETE")
                    <a  href="{{route("users.edit","$id") }}" title="Edit"  >
                    <i class="fa fa-edit" style="font-size:20px;color:green "> </i>
                </a>
                <button type ="submit" title="Delete" style="font-size:24px;color:red;background-color:white;border:0px;">
                        <i class="fa fa-trash"  style="font-size:20px;color:red;background-color:white;"></i>
                    </button>

    </form>')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);


        }

         return view('layouts.userdata');

    }

    public function add_user_show(){
        return view('adduser');
    }

    public function add_user(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);


        User::create($request->all());
        return redirect("/userdata")->withSuccess('Great! You have Successfully Register Your data');
    }

    public function edit($id)
        {
            $user=User::find($id);
            return view('userupdate',compact('user'));

        }
        public function user_edit(Request $request){

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

        public function destroy($id)
        {
            $user = User::find($id); // Find the user by ID
            if(!$user) {
                return redirect()->route('users.index')->with('success', 'User not found.');
            }
            $user->delete(); // Delete the user
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }



}
