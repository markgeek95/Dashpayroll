<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{

    protected $table = 'holidays';

    protected $fillable = [
        'id', 'holiday_type_id', 'code', 'description', 'date'
    ];

}
