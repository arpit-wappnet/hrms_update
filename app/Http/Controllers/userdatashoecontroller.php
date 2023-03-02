<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;


class userdatashoecontroller extends Controller
{
    public function index(Request $request)
{
        if ($request->ajax()) {

        $data = User::all();
        return Datatables::of($data)->addIndexColumn()
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

}
