<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function holiday_show(): \Illuminate\Contracts\View\View
    {

        $holiday = Holiday::all();
        return view('holiday',compact('holiday'));
    }

    public function add_holiday_form(): \Illuminate\Contracts\View\View
    {
        return view('holidayadd');
    }

    public function add_holiday(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
        ]);
    
        $holiday = new Holiday;
        $holiday->name_holiday = $request->input('title');
        $holiday->date_holiday = $request->input('date');
        $holiday->optional = $request->has('checkbox1');
        $holiday->save();
    
        return redirect("admin/admin/holiday")->withSuccess('Great! You have Successfully holiday');
    }
    
}
