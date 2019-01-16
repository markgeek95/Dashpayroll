<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    protected $table = "frequency";

    protected $fillable = [
        'id', 'name'
    ];

    public $timestamps = false; 


}
