<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\AnnualTax;

class AnnualTaxController extends Controller
{

	public function index()
	{
		$data = AnnualTax::all();
		return view('maintenance.tax_tables.annual_tax', compact('data'));
	}


	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'range' => 'required|numeric',
            'fixed_rate' => 'required|numeric',
            'tax_rate' => 'required|numeric',
        ]);

        if ($validator->passes()) {

			AnnualTax::create([
				'ranges' => $request->range,
				'fixed_rate' => $request->fixed_rate,
				'tax_rate' => $request->tax_rate,
			]);
			return response()->json(['success' => 'Annual Tax Successfully Saved.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}


	public function edit($id)
	{
		$data = AnnualTax::find($id);
		return response()->json($data);
	}

	public function update(Request $request, $id)
	{
		
		$validator = Validator::make($request->all(), [
            'range' => 'required|numeric',
            'fixed_rate' => 'required|numeric',
            'tax_rate' => 'required|numeric',
        ]);

        if ($validator->passes()) {

			$data = AnnualTax::find($id);
			$data->ranges = $request->range;
			$data->fixed_rate = $request->fixed_rate;
			$data->tax_rate = $request->tax_rate;
			$data->save();

			return response()->json(['success' => 'Annual Tax Successfully Updated.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}


	public function delete($id)
	{
		AnnualTax::find($id)->delete();
		return;
	}


}