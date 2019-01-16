<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhilhealthMaintenance extends Model
{
    protected $table = "philhealth_maintenance";

    protected $fillable = [
        'id', 'employee_id', 'ranges', 'amount', 'rate', 'employer'
    ];

    

}
