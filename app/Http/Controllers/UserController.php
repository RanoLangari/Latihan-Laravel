<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAllUsers() {
        $users = DB::table('tbl_user')->get();
        return json_decode($users, true);
    }
}
