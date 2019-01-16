<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPayrollUser extends Model
{

    protected $table = "user_levels";

    protected $fillable = [
        'id', 'name'
    ];

    public $timestamps = false;


}
