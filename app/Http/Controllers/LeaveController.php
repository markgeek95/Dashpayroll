<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use App\LeaveTable;

class LeaveController extends Controller
{


    public function index()
    {
        $data = LeaveTable::all();
        return view('maintenance.leave_table.leave_homepage', compact('data'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:leave_table|max:35',
            'name' => 'required|unique:leave_table|max:35',
            'allocated' => 'required|max:35',
            'months' => 'required|max:35',
            'cash_convertible' => 'nullable',
            'carry_over' => 'nullable',
            'max_hours_to_convert' => 'required|numeric',
            'convertible_non_taxable_hours' => 'required|numeric',
        ]);

        if ($validator->passes()) {

            $cash_convertible = ($request->cash_convertible)? 'Y' : 'N';
            $carry_over = ($request->carry_over)? 'Y' : 'N';

            LeaveTable::create([
                'code' => $request->code,
                'name' => $request->name,
                'allocated' => $request->allocated,
                'months' => $request->months,
                'cash_convertible' => $cash_convertible,
                'carry_over' => $carry_over,
                'max_hours_to_convert' => $request->max_hours_to_convert,
                'convertible_non_taxable_hours' => $request->convertible_non_taxable_hours,
            ]);
            return response()->json(['success' => 'Leave Successfully Saved.']);

        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }


    public function edit($id)
    {
        $data = LeaveTable::find($id);
        return response()->json($data);
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'code' => [
                'required',
                'max:35',
                Rule::unique('leave_table')->ignore($id),
            ],
            'name' => [
                'required',
                'max:35',
                Rule::unique('leave_table')->ignore($id),
            ],
            'allocated' => 'required|max:35',
            'months' => 'required|max:35',
            'cash_convertible' => 'nullable',
            'carry_over' => 'nullable',
            'max_hours_to_convert' => 'required|numeric',
            'convertible_non_taxable_hours' => 'required|numeric',
        ]);

        if ($validator->passes()) {

            $cash_convertible = ($request->cash_convertible)? 'Y' : 'N';
            $carry_over = ($request->carry_over)? 'Y' : 'N';

            $data = LeaveTable::find($id);
            $data->code = $request->code;
            $data->name = $request->name;
            $data->allocated = $request->allocated;
            $data->months = $request->months;
            $data->cash_convertible = $cash_convertible;
            $data->carry_over = $carry_over;
            $data->max_hours_to_convert = $request->max_hours_to_convert;
            $data->convertible_non_taxable_hours = $request->convertible_non_taxable_hours;
            $data->save();

            return response()->json(['success' => 'Leave Successfully Updated.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }


    public function delete($id)
    {
        LeaveTable::find($id)->delete();
        return;
    }


}
