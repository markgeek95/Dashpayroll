<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualTax extends Model
{

    protected $table = 'annual_tax';

    protected $fillable = [
        'ranges', 'fixed_rate', 'tax_rate'
    ];


}
