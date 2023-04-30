<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('pages.login');
    }

    function loginProcess(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            if (Auth::User()->status == 'aktif') {
                if (Auth::User()->level == 'admin') {
                    return redirect('admin/home')->with('success', 'Selamat datang');
                } elseif (Auth::User()->level == 'user') {
                    return redirect('user/home')->with('success', 'Selamat datang');
                } else {
                    return redirect('login');
                }
            } else {
                return back();
            }
        } else {
            $request->session()->flash('error', 'Email atau password anda salah');
            return back();
        };
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
