<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{

    protected $table = 'employee_status';

    protected $fillable = [
        'id', 'description', 'status'
    ];


}
