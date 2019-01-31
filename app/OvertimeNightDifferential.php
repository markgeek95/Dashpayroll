<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OvertimeNightDifferential extends Model
{
    protected $table = "overtime_nightdifferentials";

    protected $fillable = [
        'id',
        'code',
        'description',
        'ot',
        'nd'
    ];

}
