<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    // public function postlogin(Request $request): RedirectResponse
    // {
    //     if(Auth::attempt($request->only('email', 'password'))){
    //         return redirect('/' . auth()->user()->role . '/dashboard');
    //     }
    //     else {
    //         return back()->with('status', 'Email atau Password salah!');
    //     }
    // }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
