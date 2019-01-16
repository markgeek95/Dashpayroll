<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suffix extends Model
{
    protected $table = "suffixes";

    protected $fillable = [
        'id', 'name'
    ];

    public $timestamps = false;
}
