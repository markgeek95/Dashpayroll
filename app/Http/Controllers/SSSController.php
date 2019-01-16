<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\SSSMaintenance;

class SSSController extends Controller
{

	public function index()
	{
		$datas = SSSMaintenance::leftJoin('employee_names', 
					'employee_names.employee_id', 'sss_maintenance.employee_id')
					->leftJoin('suffixes', 'suffixes.id', 'employee_names.suffix')
					->select('*', 'sss_maintenance.id as sss_id')
					->orderBy('sss_maintenance.created_at', 'desc')
					->get();
		return view('maintenance.government_tables.sss', compact('datas'));
	}


	public function store(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'range' => 'required|numeric',
            'ec' => 'required|max:50',
            'employee' => 'required',
            'employer' => 'required|max:50'
        ]);

        if ($validator->passes()) {

			SSSMaintenance::create([
				'employee_id' => $request->employee,
				'employer' => $request->employer,
				'ranges' => $request->range,
				'ec' => $request->ec,
			]);
			return response()->json(['success' => 'SSS Maintenance Successfully Saved.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}


	public function edit($id)
	{
		$data = SSSMaintenance::find($id);
		return response()->json($data);
	}


	public function update(Request $request, $id)
	{
		
		$validator = Validator::make($request->all(), [
            'range' => 'required|max:50',
            'ec' => 'required|max:50',
            'employee' => 'required',
            'employer' => 'required|max:50'
        ]);

        if ($validator->passes()) {

			$data = SSSMaintenance::find($id);
			$data->employee_id = $request->employee;
			$data->ranges = $request->range;
			$data->ec = $request->ec;
			$data->employer = $request->employer;
			$data->save();

			return response()->json(['success' => 'SSS Maintenance Successfully Updated.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}

	public function delete($id)
	{
		SSSMaintenance::find($id)->delete();
		return;
	}


}