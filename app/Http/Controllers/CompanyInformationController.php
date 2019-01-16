<?php

namespace App\Http\Controllers;

use App\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CompanyInformationController extends Controller
{


    public function index()
    {
        return view('dashboard.company_information.add');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'header' => 'required',
            'address' => 'required',
            'pagibig_no' => 'required|max:50',
            'phic_no' => 'required|max:50',
            'sss_no' => 'required|max:50',
            'tin_no' => 'required|max:50',
            'tel_no' => 'required|max:50',
            'zip_code' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);


        if ($validator->passes()){

            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('company_image'), $image_name);
            $path = 'public/company_image/'.$image_name;

            CompanyInformation::create([
                'header' => $request->header,
                'address' => $request->address,
                'pagibig_no' => $request->pagibig_no,
                'phic_no' => $request->phic_no,
                'sss_no' => $request->sss_no,
                'tin_no' => $request->tin_no,
                'tel_no' => $request->tel_no,
                'zip_code' => $request->zip_code,
                'image' => $image_name,
            ]);

            Session::flash('toastr', array('success', 'Company Information Saved.'));
            return redirect()
                    ->back()
                    ->with('path', $path);

        }else{
            Session::flash('toastr', array('error', 'Company Information Not Saved.'));
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }



    }

}
