<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function signin() {
        return view('signin');
    }

    public function checkSignIn(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $repass = $request->input('repass');
        $mssv = $request->input('mssv');
        $lop = $request->input('lopmonhoc');
        $gioitinh = $request->input('gioitinh');

        if ($username == 'linhthuy' && $password == '123abc' && $repass == $password && $mssv == '1500267' && $lop == '67PM1' && $gioitinh == 'Nu') {
            return "Dang ky thanh cong";
            // return redirect()->route('login');
        } else {
            return "Dang ky that bai";
        }
    }

    public function login() {
        return view('login');
    }

    public function checkLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username === 'linh' && $password === '1500267') {
            // return redirect()->route('dashboard');
            // return "Dang nhap thanh cong";
            return redirect()->route('index');
        } else {
            // return redirect()->route('login')->with('error', 'Invalid credentials');
            return "Dang nhap that bai";
        }
    }
    public function ageForm() {
        return view('age');
    }
    public function saveAge(Request $request) {
        session(['age' => $request->input('age')]);
        return "Đã lưu tuổi của bạn vào session.";
    }
}
