<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = DB::table('tbl_user')->get();
        return json_decode($users, true);
    }

    public function addUser(Request $request) {
        $user = DB::table('tbl_user')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        if ($user) {
            return response()->json([
                'status' => 'success',
                'message' => 'User added successfully'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to add user'
            ]);
        }
    }
}
