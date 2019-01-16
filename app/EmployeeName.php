<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeName extends Model
{

    protected $table = "employee_names";

    protected $fillable = [
        'employee_id', 'last_name', 'first_name', 'middle_name', 'suffix'
    ];

    public $timestamps = false;

}
