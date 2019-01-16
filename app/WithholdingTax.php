<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithholdingTax extends Model
{

    protected $table = 'withholding_tax';

    protected $fillable = [
        'frequency_id', 'ranges', 'percentage', 'amount'
    ];


}
