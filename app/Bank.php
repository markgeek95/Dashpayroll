<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    protected $table = 'banks';

    protected $fillable = [
        'bank_name', 'address', 'servicing_branch_code', 'payroll_branch_code',
        'bank_code', 'company_code', 'account', 'rdo', 'batch_no', 'presenting_office',
        'ceiling_amount'
    ];


}
