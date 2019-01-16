<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Carbon;
use App\Frequency;

class FrequencyController extends Controller
{

	public function get_frequency()
	{
		$data = Frequency::all();
		return response()->json($data);
	}

}