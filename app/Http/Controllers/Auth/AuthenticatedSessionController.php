<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function postlogin(Request $request): RedirectResponse
    {
        $email = User::where('email', $request->email)->first();
        if ($email->status_login ?? '-' != '0') {
            return back()->with('gagal ', 'Akun sudah login di device lain');
        }

        if (!$email) {
            return back()->with('gagal', 'Email belum terdaftar!');
        } else {
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user();
                $user->status_login = '1';
                $user->update();

                return redirect($user->role . '/dashboard');
            } else {
                return back()->with('gagal', 'Email atau Password salah!');
            }
        }
    }

    public function logout()
    {
        $user = Auth::user();
        $user->status_login = '0';
        $user->update();
        Auth::logout();

        return redirect('/login')->with('sukses', 'Berhasil logout.');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
