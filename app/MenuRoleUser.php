<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuRoleUser extends Model
{
    protected $table = "menu_role_user";

    protected $fillable = [
        'id', 'user_id', 'menu_id', 'role_id'
    ];


    public static function menu_role_user($user_id, $menu_id)
    {
        $data = MenuRoleUser::where([
            ['user_id', $user_id],
            ['menu_id', $menu_id],
        ])->first();
        return $data;
    }

}
