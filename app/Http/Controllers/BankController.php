<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class BankController extends Controller
{



    public function index()
    {
        $data = Bank::all();
        return view('maintenance.other_setup.banks.banks_home', compact('data'));
    }

    public function create()
    {
        return view('maintenance.other_setup.banks.banks_add');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bank_name' => 'required|max:35',
            'address' => 'required|max:255',
            'servicing_branch_code' => 'required|max:35',
            'payroll_branch_code' => 'required|max:35',
            'bank_code' => 'required|max:35',
            'company_code' => 'required|max:35',
            'account' => 'required|max:50',
            'rdo' => 'required|max:50',
            'batch_no' => 'required|max:35',
            'presenting_office' => 'required|max:35',
            'ceiling_amount' => 'required|numeric',
        ]);


        if ($validator->passes())
        {

            Bank::create([
                'bank_name' => $request->bank_name,
                'address' => $request->address,
                'servicing_branch_code' => $request->servicing_branch_code,
                'payroll_branch_code' => $request->payroll_branch_code,
                'bank_code' => $request->bank_code,
                'company_code' => $request->company_code,
                'account' => $request->account,
                'rdo' => $request->rdo,
                'batch_no' => $request->batch_no,
                'presenting_office' => $request->presenting_office,
                'ceiling_amount' => $request->ceiling_amount,
            ]);

            Session::flash('toastr', array('success', 'Bank succesfully saved.'));
            return redirect()->back();

        }else{
            Session::flash('toastr', array('error', 'Bank Information Not Saved.'));
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

    }



    public function edit($id)
    {
        $data = Bank::find($id);
        return response()->json($data);
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'bank_name' => 'required|max:35',
            'address' => 'required|max:255',
            'servicing_branch_code' => 'required|max:35',
            'payroll_branch_code' => 'required|max:35',
            'bank_code' => [
                'required',
                'max:35',
                Rule::unique('banks')->ignore($id),
            ],
            'company_code' => [
                'required',
                'max:35',
                Rule::unique('banks')->ignore($id),
            ],
            'account' => 'required|max:50',
            'rdo' => 'required|max:50',
            'batch_no' => 'required|max:35',
            'presenting_office' => 'required|max:35',
            'ceiling_amount' => 'required|numeric',
        ]);


        if ($validator->passes())
        {

            $bank = Bank::find($id);
            $bank->bank_name = $request->bank_name;
            $bank->address = $request->address;
            $bank->servicing_branch_code = $request->servicing_branch_code;
            $bank->payroll_branch_code = $request->payroll_branch_code;
            $bank->bank_code = $request->bank_code;
            $bank->company_code = $request->company_code;
            $bank->account = $request->account;
            $bank->rdo = $request->rdo;
            $bank->batch_no = $request->batch_no;
            $bank->presenting_office = $request->presenting_office;
            $bank->ceiling_amount = $request->ceiling_amount;
            $bank->save();

            return response()->json(['success' => 'Leave Successfully Updated.']);

        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }


    public function delete($id)
    {

        Bank::find($id)->delete();
        return;
    }


}