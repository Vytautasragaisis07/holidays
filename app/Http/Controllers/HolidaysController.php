<?php

namespace App\Http\Controllers;


use App\Holiday;
use File;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{

    public function AddHoliday()
    {
        $holidays = Holiday::all();
        return view('holiday.pages.add-holiday');
    }

    public function storeHoliday(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/', "", $path);

        $holiday = Holiday::create([
            'title' => request('title'), //name
            'description' => request('description'),
            'img' => $filename,
        ]);

        return redirect('/control-holiday');
    }

    public function ControlHoliday()
    {
        $holidays = Holiday::all();
        return view('holiday.pages.control-holiday', compact('holidays')); //psl
    }

    public function warningHoliday(Holiday $holiday)
    {
        return view('holiday.pages.warning-holiday', compact('holiday'));
    }

    public function deleteHoliday(Holiday $holiday)
    {

      $holiday->delete();
      return redirect('control-holiday');
    }

    public function editHoliday(Holiday $holiday){
        $holidays = Holiday::all();

        return view ('holiday.pages.edit-holiday', compact('holiday'));
    }

    public function edit_Holiday(Request $request, Holiday $holiday){

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        Holiday::where('id', $holiday->id)->update
        (['title' => request('title'),
            'description' => request('description'),
            'img' => request('img')
        ]);
        if ($request->hasFile('img'))
        {
            File::delete('storage/'.$holiday->img);
            $path=$request->file('img')->store('/public/');
            $filename=str_replace('public/',"",$path);
            Holiday::where('id',$holiday->id)->update([
                'img'=>$filename
            ]);
        }
        return redirect('/control-holiday');
    }



}
