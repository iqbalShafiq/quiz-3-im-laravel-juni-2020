<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    public static function get_users()
    {
        $users = DB::table('users')->get();
        return $users;
    }

    public static function get_user($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->first();

        return $user;
    }

    public static function create_user($data)
    {
        $user = DB::table('users')->insert($data);
        return $user;
    }
}
