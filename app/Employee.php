<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";

    protected $fillable = [
        'id', 'id_number', 'shift_id', 'position_id', 'department_id', 
        'birthdate', 'address', 'zip_code', 'contact_no', 'email'
    ];


}
