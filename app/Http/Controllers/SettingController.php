<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('pages.setting', compact('setting'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'tahun_ajaran' => 'required|string',
            'is_pengumuman' => 'required|boolean',
            'tgl_pengumuman' => 'required|date',
        ]);

        // Update setting (misalkan hanya satu record yang diupdate)
        $setting = Setting::first();
        $setting->tahun_ajaran = $request->input('tahun_ajaran');
        $setting->is_pengumuman = $request->input('is_pengumuman');
        $setting->tgl_pengumuman = $request->input('tgl_pengumuman');
        $setting->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui!');
    }


}
