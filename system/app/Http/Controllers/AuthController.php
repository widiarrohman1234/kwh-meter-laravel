<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginProcess(User $user)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            if (Auth::User()->level == 'admin') {
                return redirect('admin/home')->with('success', 'Selamat datang');
            } elseif (Auth::User()->level == 'user') {
                return redirect('user/home')->with('success', 'Selamat datang');
            }
        };
    }
}
