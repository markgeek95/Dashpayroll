<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{

    protected $table = 'class_lists';

    protected $fillable = [
        'id', 'name'
    ];


}
