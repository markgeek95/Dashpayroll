<?php

namespace App\Http\Controllers;

use App\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Suffix;
use App\Shift;
use App\Position;
use App\Department;
use App\Employee;
use App\EmployeeName;
use Carbon;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::leftJoin('employee_names', 
            'employee_names.employee_id', 'employees.id')
            ->leftJoin('suffixes', 'suffixes.id', 'employee_names.suffix')
            ->leftJoin('shifts', 'shifts.id', 'employees.shift_id')
            ->leftJoin('positions', 'positions.id', 'employees.position_id')
            ->leftJoin('departments', 'departments.id', 'employees.department_id')
            ->select('*', 'suffixes.name as suffix', 'shifts.name as shift', 'positions.name as position',
            'departments.name as department')
            ->paginate(10);

        return view('dashboard.employee.master_file', compact('employees'));
    }

    public function create()
    {
        $suffixes = Suffix::all();
        $shifts = Shift::all();
        $positions = Position::all();
        $departments = Department::all();
        return view('dashboard.employee.add', 
            compact('suffixes', 'shifts', 'positions', 'departments'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'last_name' => 'required|max:35',
            'first_name' => 'required|max:35',
            'middle_name' => 'nullable|max:35',
            'suffix' => 'nullable|max:35',
            'birthdate' => 'required|date|before_or_equal:'.Carbon::now()->toDateString().'',
            'shift' => 'required',
            'position' => 'required',
            'department' => 'required',
            'address' => 'required',
            'zip_code' => 'required|max:10',
            'contact_no' => 'required|max:35',
            'gender' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->passes()) {
            

            $employee = Employee::create([
                    'id_number' => $request->id,
                    'shift_id' => $request->shift,
                    'position_id' => $request->position,
                    'department_id' => $request->department,
                    'birthdate' => $request->birthdate,
                    'address' => $request->address,
                    'zip_code' => $request->zip_code,
                    'contact_no' => $request->contact_no
                ]);

            EmployeeName::create([
                'employee_id' => $employee->id,
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'suffix' => $request->suffix,
            ]);


            Session::flash('toastr', array('success', 'Employee Details Successfully Saved.'));
            return redirect()
                ->back();

        }else{
            Session::flash('toastr', array('error', 'Employee Details Not Saved.'));
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

    }


    public function get_all_employees(Request $request)
    {
        $data = EmployeeName::leftJoin('suffixes', 'suffixes.id', 'employee_names.suffix')
                ->orderBy('last_name')->get();
        echo json_encode($data);
        return;
    }


}









