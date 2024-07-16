<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
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
        return view('pages.formulir', compact('formulir', 'completionPercentage'));
    }

    public function store(Request $request)
    {


        // Ambil user_id dari request
        $user_id = $request->input('user_id');

        // Cari formulir yang terkait dengan pengguna yang sedang login
        $formulir = Formulir::where('user_id', $user_id)->first();

        if ($formulir) {
            // Perbarui data formulir
            $formulir->update($request->except('user_id'));

            return redirect()->back()->with('success', 'Data Berhasil Di Simpan');
        } else {
            return redirect()->back()->with('error', 'Formulir tidak ditemukan');
        }
    }

    public function printForm(Request $request)
    {
        // Dapatkan data yang diperlukan dari request atau dari database
        $formulir = Formulir::where('kode_pendaftaran', $request->kode_pendaftaran)->first();
        // Pastikan data formulir ada sebelum melanjutkan
        if (!$formulir) {
            abort(404);
        }
        return view('pages.printForm', compact('formulir'));
    }

}
