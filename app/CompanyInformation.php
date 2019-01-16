<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{

    protected $table = 'company_information';

    protected $fillable = [
        'header', 'address', 'pagibig_no', 'phic_no', 'sss_no', 'tin_no', 'tel_no', 'zip_code', 'image'
    ];


}
