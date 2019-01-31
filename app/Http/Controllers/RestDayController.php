<?php

namespace App\Http\Controllers;

use App\RestDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class RestDayController extends Controller
{


    public function index()
    {
        $rest_day = RestDay::leftJoin('shifts', 'shifts.id', 'rest_days.shift_id')->get();
        return view('maintenance.other_setup.holiday.rest_day',
            compact('rest_day'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shift_id' => 'required',
            'code' => 'required|unique:rest_days|max:35',
            'description' => 'required|unique:rest_days|max:50',
            'date' => 'required|date'
        ]);

        if ($validator->passes()) {

            RestDay::create([
                'shift_id' => $request->shift_id,
                'code' => $request->code,
                'description' => $request->description,
                'date' => $request->date
            ]);
            return response()->json(['success' => 'Rest Day Successfully Saved.']);

        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }

}