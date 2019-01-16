<?php

namespace App\Http\Controllers;

use App\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\User;
use Carbon;
use Auth;

class LoginController extends Controller
{

	public function index()
	{
		return view('partials.login_username');
	}

	public function store(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'username' => 'required'
        ]);

        if ($validator->passes()){
        	$username = User::where('username', $request->username)->pluck('username')->first();
        	if ($username) {
        		return view('partials.login_password', compact('username'));
        	}else{
        		Session::flash('login_error', 'Username does not exist.');
        		return redirect()
        	    ->back()
        	    ->withInput();
        	}
        }else{
        	return redirect()
        	    ->back()
        	    ->withErrors($validator)
        	    ->withInput();
        }
	}

	public function login_now(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;

        if ($validator->passes()){
        	$userdata = array(
        	    'username' => 'mark',
        	    'password' => $request->password
        	);
        	if(Auth::attempt($userdata)){
        	    return redirect('company_information');
        	}else{
        	   Session::flash('login_error', 'These credentials do not match our records.');
        	   return view('partials.login_password', compact('username'));
        	}
        }else{
        	Session::flash('login_error', 'The password field is required');
        	return view('partials.login_password', compact('username'));
        }
        
	}



}



