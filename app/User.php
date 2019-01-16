<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

	use Notifiable;

    protected $table = "users";

    protected $fillable = [
        'code_id', 'user_level_id', 'username', 'password', 'avatar', 'status'
    ];

    protected $hidden = [
        'password',
    ];

}
