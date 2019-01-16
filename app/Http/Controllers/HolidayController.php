<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\HolidayType;
use App\Holiday;

class HolidayController extends Controller
{

	public function index()
	{
		$data = Holiday::leftJoin('holiday_types', 'holiday_types.id', 'holidays.holiday_type_id')
				->get();
		return view('maintenance.other_setup.holiday.holiday', compact('data'));
	}

	public function holiday_type()
	{
		$data = HolidayType::all();
		return response()->json($data);
	}


	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'holiday_type_id' => 'required',
            'code' => 'required|unique:holidays|max:35',
            'description' => 'required|unique:holidays|max:50',
            'date' => 'required|date'
        ]);

        if ($validator->passes()) {

            Holiday::create([
                'holiday_type_id' => $request->holiday_type_id,
                'code' => $request->code,
                'description' => $request->description,
                'date' => $request->date
            ]);
            return response()->json(['success' => 'Holiday Successfully Saved.']);

        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
	}


}