<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
/**
 * Summary of UserController
 */
class UserController extends Controller
{
    /**
     * Summary of admin_user_data_show
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
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

         return view('userdata');

    }

    public function add_user_show(): \Illuminate\Contracts\View\View
    {
        return view('adduser');
    }

    public function add_user(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);


        User::create($request->all());
        return redirect("admin/admin/userdata")->withSuccess('Great! You have Successfully Register Your data');
    }

    public function edit($id): \Illuminate\Contracts\View\View
        {
            $user=User::find($id);
            return view('userupdate',compact('user'));

        }
        public function user_edit(Request $request)
        {

            $request->validate([
                'id' => 'required|numeric', // Ensure the ID is a numeric value
                'name' => 'required|string|max:255',
                'email' => 'required|email|string|max:255|unique:users,email,'.$request->id // Add unique validation rule
            ]);

            $user = User::findOrFail($request->id); // Use findOrFail to throw an exception if user is not found

            $user->update($request->only('name','email'));

            return redirect()->route('admin.index')->with('success', 'User updated successfully.');
        }


        public function destroy($id): \Illuminate\Http\RedirectResponse
        {
            $user = User::find($id); // Find the user by ID
            if(!$user) {
                return redirect()->route('admin.index')->with('success', 'User not found.');
            }
            $user->delete(); // Delete the user
            return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
        }

        public function User_show(Request $request)
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

             return view('user.userdata');

        }

}
