<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SSSMaintenance extends Model
{

    protected $table = 'sss_maintenance';

    protected $fillable = [
        'employee_id', 'employer', 'ranges', 'ec'
    ];


}
