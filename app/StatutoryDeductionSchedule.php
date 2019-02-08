<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatutoryDeductionSchedule extends Model
{
    protected $table = "statutory_deduction_schedules";

    protected $fillable = [
        'frequency_id', 'code', 'deduction_name', 'deduction_count', 'days_of_deduction'
    ];

}
