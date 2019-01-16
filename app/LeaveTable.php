<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveTable extends Model
{

    protected $table = 'leave_table';

    protected $fillable = ['code', 'name', 'allocated', 'months', 'cash_convertible',
        'carry_over', 'max_hours_to_convert', 'convertible_non_taxable_hours'];

}
