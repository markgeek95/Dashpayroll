<?php

namespace App\Http\Controllers;

use App\RestDay;
use App\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ShiftController extends Controller
{


    public function index()
    {
        $shifts = Shift::all();
        return response()->json($shifts);
    }


}