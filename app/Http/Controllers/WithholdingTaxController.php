<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\WithholdingTax;

class WithholdingTaxController extends Controller
{

	public function index()
	{
		$data = WithholdingTax::
				leftJOin('frequency', 'frequency.id', 'withholding_tax.frequency_id')
				->select('*', 'withholding_tax.id as tax_id')
				->get();
		return view('maintenance.tax_tables.withholding_tax', compact('data'));
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'frequency' => 'required',
            'range' => 'required|numeric',
            'percentage' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);

        if ($validator->passes()) {

			WithholdingTax::create([
				'frequency_id' => $request->frequency,
				'ranges' => $request->range,
				'percentage' => $request->percentage,
				'amount' => $request->amount
			]);
			return response()->json(['success' => 'Withholding Tax Successfully Saved.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}


	public function edit($id)
	{
		$data = WithholdingTax::find($id);
		return response()->json($data);
	}


	public function update(Request $request, $id)
	{
		
		$validator = Validator::make($request->all(), [
            'frequency' => 'required',
            'range' => 'required|numeric',
            'percentage' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);

        if ($validator->passes()) {

			$data = WithholdingTax::find($id);
			$data->frequency_id = $request->frequency;
			$data->ranges = $request->range;
			$data->percentage = $request->percentage;
			$data->amount = $request->amount;
			$data->save();

			return response()->json(['success' => 'Withholding Tax Successfully Updated.']);
        }else{
        	return response(['errors' => $validator->errors()->all()]);
        }
	}

	public function delete($id)
	{
		WithholdingTax::find($id)->delete();
		return response()->json(['info' => 'Withholding Tax Has Been Deleted.']);
	}


}












