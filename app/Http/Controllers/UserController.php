<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Interfaces\UserRepositoryInterface;

/**
 * Summary of UserController
 */
class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface  $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Summary of admin_user_data_show
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function userDataShow(Request $request)
    {
            if ($request->ajax()) {

            $data = $this->userRepository->all();
            return DataTables($data)->addIndexColumn()
            ->addColumn('action', function ($user) {
                $actionBtn = '<a href="/users/' . $user->id . '/edit" class="edit btn btn-primary btn-sm">Edit</a><br><br>';

                $actionBtn .= '<a href="' . route('users.destroy', $user->id) . '" class="delete btn btn-danger btn-sm ml-2" data-method="delete" data-confirm="Are you sure you want to delete this user?">Delete</a>';

                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
         return view('userdata');

    }

    public function edit($id): \Illuminate\Contracts\View\View
        {
            $user = $this->userRepository->find($id);
            return view('userupdate',compact('user'));
        }
        public function userEdit(Request $request, $id)
        {
            $data = $request->validate([
                'id' => 'required|numeric', // Ensure the ID is a numeric value
                'name' => 'required|string|max:255',
                'email' => 'required|email|string|max:255|unique:users,email,'.$request->id // Add unique validation rule
            ]);

            $user = $this->userRepository->update($data, $id);
            return redirect()->route('admin.index')->with('success', 'User updated successfully.');
        }


        /**
         * Summary of destroy
         * @param mixed $id
         * @return \Illuminate\Http\RedirectResponse
         */
        public function destroy($id)
        {
            $this->userRepository->delete($id);
            return redirect()->route('admin.index')->with('success', 'Success! post is deleted');
        }
        public function addUserShow(): \Illuminate\Contracts\View\View
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

        $post = $this->userRepository->addUser($request);
            if ($post) {
                return redirect("/admin/admin/userdata")->with('success', 'Success! Add User complate');
            } else {
                return back()->with('failed', 'Failed! Add User');
            }
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
