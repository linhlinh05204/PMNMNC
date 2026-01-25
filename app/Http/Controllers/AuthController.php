<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function register() {
        return view('register');
    }

    public function checkRegister(Request $request) {
        $username = $request->input('username');
        $email = $request->input('email');
        $pass = $request->input('pass');
        $confirm_pass = $request->input('confirm_pass');
        if ($pass === $confirm_pass) {
            // return "Dang ky thanh cong";
            return redirect()->route('login');
        } else {
            return "Dang ky that bai";
        }
    }

    public function login() {
        return view('login');
    }

    public function checkLogin(Request $request) {
        $username = $request->input('username');
        $pass = $request->input('password');
        if ($username === 'linh' && $pass === '1500267') {
            // return redirect()->route('dashboard');
            // return "Dang nhap thanh cong";
            return redirect()->route('index');
        } else {
            // return redirect()->route('login')->with('error', 'Invalid credentials');
            return "Dang nhap that bai";
        }
    }
}
