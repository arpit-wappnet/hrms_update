<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;
use Yajra\DataTables\Facades\DataTables;
use App\Interfaces\HolidayRepositoryInterface;
use PhpParser\Node\Stmt\Return_;

class HolidayController extends Controller
{
    private $holidayRepository;

    public function __construct(HolidayRepositoryInterface  $holidayRepository)
    {
        $this->holidayRepository = $holidayRepository;
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = $this->holidayRepository->all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm" id ="editProduct">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('holiday');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addHoliday(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
        ]);

        $post = $this->holidayRepository->addHoliday($request);
            if ($post) {
                return response()->json(['success'=>'Product saved successfully.']);
            }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function editHoliday($id)
    {
        $product = Holiday::find($id);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Holiday::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }

    public function index_user(Request $request)
    {

        if ($request->ajax()) {

            $data = Holiday::latest()->get();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('user.holiday');
    }
}
