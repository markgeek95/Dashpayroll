<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class PositionController extends Controller
{


    public function index()
    {
        $positions = Position::all();
        $employees = Employee::leftJoin('employee_names', 'employee_names.employee_id', 'employees.id')->get();
        return view('maintenance.other_setup.positions.position_home',
            compact('positions', 'employees'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:positions|max:35',
        ]);
        if ($validator->passes())
        {
            Position::create([
                'name' => $request->name
            ]);

            return response()->json(['success' => 'Position Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }

}