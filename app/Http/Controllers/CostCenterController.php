<?php

namespace App\Http\Controllers;

use App\Employee;
use App\CostCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class CostCenterController extends Controller
{


    public function index()
    {
        $cost_centers = CostCenter::all();
        $employees = Employee::leftJoin('employee_names', 'employee_names.employee_id', 'employees.id')->get();
        return view('maintenance.other_setup.cost_center.cost_center_home',
            compact('cost_centers', 'employees'));
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