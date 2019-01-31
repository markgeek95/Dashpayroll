<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestDay extends Model
{
    protected $table = "rest_days";

    protected $fillable = [
        'id', 'code', 'description', 'shift_id', 'date'
    ];

    public $timestamps = false;
}
