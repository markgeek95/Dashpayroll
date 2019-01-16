<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\PhilhealthMaintenance;
use Illuminate\Support\Facades\Response;

class PhilhealthController extends Controller
{

	public function index()
	{
		$datas = PhilhealthMaintenance::leftJoin('employee_names', 
					'employee_names.employee_id', 'philhealth_maintenance.employee_id')
					->leftJoin('suffixes', 'suffixes.id', 'employee_names.suffix')
					->select('*', 'philhealth_maintenance.id as phil_id')
					->orderBy('philhealth_maintenance.created_at', 'desc')
					->get();

		return view('maintenance.government_tables.philhealth', compact('datas'));
	}




	public function store(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'range' => 'required|numeric',
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
            'employee' => 'required',
            'employer' => 'required|max:50'
        ]);

        if ($validator->passes()) {

			PhilhealthMaintenance::create([
				'employee_id' => $request->employee,
				'ranges' => $request->range,
				'amount' => $request->amount,
				'rate' => $request->rate,
				'employer' => $request->employer
			]);
			return response()->json(['success' => 'Philhealth Maintenance Successfully Saved.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }

	}


	public function edit($id)
	{
		$data = PhilhealthMaintenance::find($id);
		return response()->json($data);
	}

	public function update(Request $request, $id)
	{
		
		$validator = Validator::make($request->all(), [
            'range' => 'required|numeric',
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
            'employee' => 'required',
            'employer' => 'required|max:50'
        ]);

        if ($validator->passes()) {

			$data = PhilhealthMaintenance::find($id);
			$data->employee_id = $request->employee;
			$data->ranges = $request->range;
			$data->amount = $request->amount;
			$data->rate = $request->rate;
			$data->employer = $request->employer;
			$data->save();

			return response()->json(['success' => 'Philhealth Maintenance Successfully Updated.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}


	public function delete($id)
	{
		PhilhealthMaintenance::find($id)->delete();
		return;
	}

}




