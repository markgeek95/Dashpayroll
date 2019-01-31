<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Department;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{


    public function index()
    {
        $departments = Department::all();
        $employees = Employee::leftJoin('employee_names', 'employee_names.employee_id', 'employees.id')->get();
        return view('maintenance.other_setup.departments.department_home',
            compact('departments', 'employees'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:departments|max:35',
        ]);
        if ($validator->passes())
        {
            Department::create([
                'name' => $request->name
            ]);

            return response()->json(['success' => 'Department Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }

}