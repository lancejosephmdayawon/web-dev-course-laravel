<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $result = DB::table('user')->get();

        return $result;
    }

    public function getUserByID($id)
    {
        // $result = DB::table('user')->find($id);
        $result = DB::table('user')
            ->where('role_id', '2')
            ->get();
        // return $result;
        // return view('users.user', compact('result'));
        return $result;
    }
}
