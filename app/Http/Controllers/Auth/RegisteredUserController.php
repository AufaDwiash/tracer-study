<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the input
        // $request->validate([
        //     'nama_depan' => 'required|string|max:50',
        //     'nama_belakang' => 'nullable|string|max:50',
        //     'jenis_kelamin' => 'required|in:Male,Female',
        //     'tempat_lahir' => 'required|string|max:50',
        //     'tgl_lahir' => 'required|date',
        //     'alamat' => 'required|string|max:50',
        //     'no_hp' => 'required|string|max:15',
        //     'email' => 'required|string|email|max:50',
        //     'password' => 'required|string|confirmed',
        // ]);

        $role = $this->cekEmail($request->email);

        // Create new alumni record
        $user = new User;
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $role;
        $user->save();

        // Trigger Registered event
        event(new Registered($user));

        // Automatically log in the new user
        Auth::login($user);

        // Redirect to the login page with success message
        return redirect('/login')->with('sukses', 'Registrasi berhasil! Silakan login.');
    }

    private function cekEmail($email)
    {
        if(strpos($email, '@admin.com') !== false)
        {
            return 'admin';
        }
        else{
            return 'alumni';
 }
}
}
