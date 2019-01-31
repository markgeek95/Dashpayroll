<?php

namespace App\Http\Controllers;

use App\ClassList;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ClassListController extends Controller
{


    public function index()
    {
        $class_list = ClassList::all();
        $employees = Employee::leftJoin('employee_names', 'employee_names.employee_id', 'employees.id')->get();
        return view('maintenance.other_setup.class_list.class_list_home',
            compact('class_list', 'employees'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:cost_centers|max:35',
        ]);
        if ($validator->passes())
        {
            CostCenter::create([
                'name' => $request->name
            ]);

            return response()->json(['success' => 'Cost Center Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }

}