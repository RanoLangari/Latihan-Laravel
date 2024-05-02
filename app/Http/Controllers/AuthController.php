<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        $view_data = [
            'title' => 'Login'
        ];
        return view('auth.login', $view_data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('posts');
        } else {
            return redirect('login')->with('error_message', "Wrong Email or Password");
        }
    }
}
