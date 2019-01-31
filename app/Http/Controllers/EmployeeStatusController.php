<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class EmployeeStatusController extends Controller
{


    public function index()
    {
        $employee_status = EmployeeStatus::all();
        $employees = Employee::leftJoin('employee_names', 'employee_names.employee_id', 'employees.id')->get();
        return view('maintenance.other_setup.employee_status.employee_status_home',
            compact('employee_status', 'employees'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|unique:employee_status|max:35',
            'status' => 'required',
        ]);
        if ($validator->passes())
        {
            EmployeeStatus::create([
                'description' => $request->description,
                'status' => $request->status
            ]);

            return response()->json(['success' => 'Employee Status Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }

}