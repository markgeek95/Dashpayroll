<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Secret extends Model
{
    protected $table = "secrets";

    protected $fillable = [
        'user_id', 'name'
    ];

    public $timestamps = false;

    public static function decrypt_pass($uid)
    {
        $user = DB::table('secrets')
            ->where('user_id', $uid)->first();
        $decrypted = Crypt::decryptString($user->secret);
        return $decrypted;
    }


}
