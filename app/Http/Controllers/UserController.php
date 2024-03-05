<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = DB::table('tbl_user')->get();
        return response ()->json($users);
    }

    public function addUser(Request $request)
    {
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

    public function updateUser(Request $request, $id)
    {
        $update = DB::table('tbl_user')->where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);
        if ($update) {
            return response()->json([
                'status' => 'success',
                'message' => 'User updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update user'
            ]);
        }
    }

    public function deleteUser($id)
    {
        $delete = DB::table('tbl_user')->where('id', $id)->delete();
        if ($delete) {
            return response()->json([
                'status' => 'success',
                'message' => 'Success Update User'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to Update User'
            ]);
        }
    }
}
