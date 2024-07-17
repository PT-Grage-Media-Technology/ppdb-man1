<?php


namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Formulir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'nisn' => 'required|max:10|min:10',
                'password' => 'required',
                'nama_peserta' => 'required',
                'no_hp' => 'required',
                'asal_sekolah' => 'required',
            ],
            [
                'nisn.required' => 'NISN harus diisi',
                'nisn.max' => 'NISN maksimal 10 karakter',
                'nisn.min' => 'NISN minimal 10 karakter',
                'password.required' => 'Password harus diisi',
                'no_hp.required' => 'Nomor Handphone harus diisi',
                'nama_peserta.required' => 'Nama harus diisi',
                'asal_sekolah.required' => 'Asal Sekolah harus diisi',
            ]
        );

        // Simpan kata sandi asli
        $originalPassword = $request->password;

        // Generate kode pendaftaran
        $kodePendaftaran = $this->generateKodePendaftaran();

        // Membuat pengguna baru
        $register = User::create([
            'nisn' => $request->nisn,
            'password' => bcrypt($originalPassword),
            'nama_peserta'=> $request->nama_peserta,
            'no_hp' => $request->no_hp,
            'asal_sekolah' => $request->asal_sekolah,
            'kode_pendaftaran' => $kodePendaftaran
        ]);

        // Membuat formulir baru
        Formulir::create([
            'kode_pendaftaran' => $kodePendaftaran,
            'nama_lengkap' => $request->nama_peserta,
            'no_hp' => $request->no_hp,
            'nama_sekolah_asal' => $request->asal_sekolah,
            'nisn' => $request->nisn,
            'user_id' => $register->id
        ]);

        // Login pengguna yang baru didaftarkan
        Auth::login($register);

        // Simpan kata sandi asli dalam sesi
        Session::put('original_password', $originalPassword);

        return redirect()->route('notif');
    }

    private function generateKodePendaftaran()
    {
        $year = date('Y');
        $randomNumber = rand(100, 999); // Tiga digit angka random
        return 'PPDB' . $year . $randomNumber;
    }


    // halaman notif ketika berhasil daftar akun
    public function notif()
    {
        return view('auth.notif');
    }
}
