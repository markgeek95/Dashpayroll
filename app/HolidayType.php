<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HolidayType extends Model
{

    protected $table = 'holiday_types';

    protected $fillable = [
        'id', 'name'
    ];

    public $timestamps = false;


}
