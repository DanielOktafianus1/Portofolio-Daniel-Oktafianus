<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index');
    }

    public function dashboard()
    {
        $datas = User::get();
        return view('admin.dashboard.index', compact('datas'));
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors('gagal. Mohon periksa kembali email dan password anda!');
    }

    public function logout()
    {
        Auth::logout();
        return view('login.index');
    }
}
