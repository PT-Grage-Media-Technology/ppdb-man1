<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function indexMobile()
    {
        return view('auth.loginMobile');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'nisn' => 'required',
                'password' => 'required',
            ],
            [
                'nisn.required' => 'Nisn harus diisi',
                'password.required' => 'Password harus diisi',
            ]
        );

        $credentials = $request->only('nisn', 'password');

        if (Auth::attempt(['nisn' => $credentials['nisn'], 'password' => $credentials['password']], $request->remember)) {
            // Jika login berhasil, periksa apakah pengguna adalah admin
            // if (Auth::user()->is_admin) {
            //     return redirect()->route('list-peserta');
            // } else {
            //     return redirect()->route('formulir-pendaftaran')->with('status', 'login_success');
            // }
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return redirect()->route('list-peserta');
            } else {
                return redirect()->route('formulir-pendaftaran')->with('status', 'login_success');
            }
        }

        return redirect()->back()->with('error', 'Nisn atau Password salah');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
