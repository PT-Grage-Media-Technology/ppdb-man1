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
                'nomor_induk' => 'required',
                'password' => 'required',
            ],
            [
                'nomor_induk.required' => 'Nomor Induk harus diisi',
                'password.required' => 'Password harus diisi',
            ]
        );

        $credentials = $request->only('nomor_induk', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            // $user = Auth::user();
            // if (strpos($user->own, 'guru') === 0 || strpos($user->own, 'admin') === 0) {
            //     return redirect()->route('dashboard-guru');
            // } elseif (strpos($user->own, 'siswa') === 0) {
            //     return redirect()->route('dashboard-siswa');
            // }
            $user = Auth::user();
            $user->assignRolesBasedOnAttributes();
            if ($user->hasRole('industri')) {
                return redirect()->route('paraf-index');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('error', 'Nomor Induk atau Password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Berhasil Logout');
    }
}
