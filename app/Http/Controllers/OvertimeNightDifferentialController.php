<?php

namespace App\Http\Controllers;

use App\OvertimeNightDifferential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class OvertimeNightDifferentialController extends Controller
{


    public function index()
    {
        $data = OvertimeNightDifferential::all();
        return view('maintenance.other_setup.overtime_nightdifferential.overtime_nightdifferential',
            compact('data'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:overtime_nightdifferentials|max:35',
            'description' => 'required|max:50',
            'ot' => 'required|numeric',
            'nd' => 'required|numeric',
        ]);
        if ($validator->passes())
        {
            OvertimeNightDifferential::create([
                'code' => $request->code,
                'description' => $request->description,
                'ot' => $request->ot,
                'nd' => $request->nd
            ]);

            return response()->json(['success' => 'Overtime Night Differential Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }



    public function edit($id)
    {
        $data = OvertimeNightDifferential::findOrFail($id);
        return response()->json($data);
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => [
                'required',
                'max:35',
                Rule::unique('overtime_nightdifferentials')->ignore($id),
            ],
            'description' => 'required|max:50',
            'ot' => 'required|numeric',
            'nd' => 'required|numeric',
        ]);
        if ($validator->passes())
        {
            $data = OvertimeNightDifferential::find($id);
            $data->code = $request->code;
            $data->description = $request->description;
            $data->ot = $request->ot;
            $data->nd = $request->nd;
            $data->save();

            return response()->json(['success' => 'Overtime Night Differential Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }

}