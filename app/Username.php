<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Username extends Model
{

    protected $table = "usernames";

    protected $fillable = [
        'user_id', 'last_name', 'first_name', 'middle_name', 'suffix'
    ];

    public $timestamps = false;

}
