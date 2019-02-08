<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

use App\StatutoryDeductionSchedule;


class StatutoryDeductionScheduleController extends Controller
{


    public function index()
    {
        $data = StatutoryDeductionSchedule::
        leftJoin('frequency', 'frequency.id', 'statutory_deduction_schedules.frequency_id')
            ->select('*', 'statutory_deduction_schedules.id as id')
            ->get();
        return view('maintenance.statutory_deduction_schedule.statutory_deduction_schedule_home',
            compact('data'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'frequency' => 'required',
            'code' => 'required|unique:statutory_deduction_schedules|max:35',
            'deduction_name' => 'required|unique:statutory_deduction_schedules|max:50',
            'deduction_count' => 'required|numeric',
            'days_of_deduction' => 'required|numeric',
        ]);
        if ($validator->passes())
        {
            StatutoryDeductionSchedule::create([
                'frequency_id' => $request->frequency,
                'code' => $request->code,
                'deduction_name' => $request->deduction_name,
                'deduction_count' => $request->deduction_count,
                'days_of_deduction' => $request->days_of_deduction
            ]);

            return response()->json(['success' => 'Statutory Deduction Schedule Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }



    public function edit($id)
    {
        $data = StatutoryDeductionSchedule::findOrFail($id);
        return response()->json($data);
    }




    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'frequency' => 'required',
            'code' => [
                'required',
                'max:35',
                Rule::unique('statutory_deduction_schedules')->ignore($id),
            ],
            'deduction_name' => [
                'required',
                'max:50',
                Rule::unique('statutory_deduction_schedules')->ignore($id),
            ],
            'deduction_count' => 'required|numeric',
            'days_of_deduction' => 'required|numeric',
        ]);

        if ($validator->passes())
        {
            $data = StatutoryDeductionSchedule::find($id);
            $data->frequency_id = $request->frequency;
            $data->code = $request->code;
            $data->deduction_name = $request->deduction_name;
            $data->deduction_count = $request->deduction_count;
            $data->days_of_deduction = $request->days_of_deduction;
            $data->save();

            return response()->json(['success' => 'Statutory Deduction Schedule Successfully Saved.']);
        }else{
            return response(['errors' => $validator->errors()->all()]);
        }
    }



    public function delete($id)
    {

        StatutoryDeductionSchedule::find($id)->delete();
        return;
    }




}
