<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFormulirRequest;

class FormulirController extends Controller
{
    public function index()
    {
    // Ambil pengguna yang sedang login
    $user = Auth::user();

    // Ambil data formulir terkait dengan pengguna
    $formulir = Formulir::where('user_id', $user->id)->first();

    // Hitung persentase kelengkapan data
    $completionPercentage = $formulir ? $formulir->getCompletionPercentage() : 0;

    // settung modal
    $setting = Setting::first();
        return view('pages.formulir', compact('formulir', 'completionPercentage', 'setting'));
    }

    public function store(Request $request)
    {

        // Ambil user_id dari request
        $user_id = $request->input('user_id');

        // Cari formulir yang terkait dengan pengguna yang sedang login
        $formulir = Formulir::where('user_id', $user_id)->first();

        if ($formulir) {
            // Jika ada file foto dalam request
            if ($request->hasFile('foto')) {
                // Hapus foto lama jika ada
                if ($formulir->foto && file_exists(public_path('foto_siswa/' . $formulir->foto))) {
                    unlink(public_path('foto_siswa/' . $formulir->foto));
                }

                // Upload foto baru
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('foto_siswa'), $filename);

                // Set nama file foto baru ke dalam request
                $formulir->foto = $filename;
            }

            // Perbarui data formulir kecuali user_id
            $formulir->update($request->except('user_id', 'foto'));

            // Perbarui kolom foto jika ada
            if ($request->hasFile('foto')) {
                $formulir->foto = $filename;
                $formulir->save();
            }

            return redirect()->back()->with('success', 'Data Berhasil Di Simpan');
        } else {
            return redirect()->back()->with('error', 'Formulir tidak ditemukan');
        }
    }

    public function printForm(Request $request)
    {
        // Dapatkan data yang diperlukan dari request atau dari database
        $formulir = Formulir::where('kode_pendaftaran', $request->kode_pendaftaran)->first();
        $setting = Setting::first();
        // Pastikan data formulir ada sebelum melanjutkan
        if (!$formulir) {
            abort(404);
        }
        return view('pages.printForm', compact('formulir', 'setting'));
    }

}
