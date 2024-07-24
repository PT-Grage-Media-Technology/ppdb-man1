<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $acceptedCount = Formulir::where('status', 'Diterima')
            ->whereHas('user', function ($query) {
                $query->role('peserta');
            })->count();

        $rejectedCount = Formulir::where('status', 'Ditolak')
            ->whereHas('user', function ($query) {
                $query->role('peserta');
            })->count();

        $totalApplicants = Formulir::whereHas('user', function ($query) {
            $query->role('peserta');
        })->count();

        return view('pages.setting', compact('setting', 'acceptedCount', 'rejectedCount', 'totalApplicants'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();

        // UPDATE FOTO TTD KETUA PPDB BILA ADA
        if ($request->hasFile('logo_sekolah')) {
            // Hapus logo_sekolah lama jika ada
            if ($setting->logo_sekolah && file_exists(public_path('settings/' . $setting->logo_sekolah))) {
                unlink(public_path('settings/' . $setting->logo_sekolah));
            }

            // Upload logo_sekolah baru
            $file = $request->file('logo_sekolah');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('settings'), $filename);

            // Set nama file logo_sekolah baru ke dalam request
            $setting->logo_sekolah = $filename;
        }

        // Perbarui kolom logo_sekolah jika ada
        if ($request->hasFile('logo_sekolah')) {
            $setting->logo_sekolah = $filename;
        }

        // UPDATE FOTO TTD KETUA PPDB BILA ADA
        if ($request->hasFile('ttd_ketua_ppdb')) {
            // Hapus ttd_ketua_ppdb lama jika ada
            if ($setting->ttd_ketua_ppdb && file_exists(public_path('settings/' . $setting->ttd_ketua_ppdb))) {
                unlink(public_path('settings/' . $setting->ttd_ketua_ppdb));
            }

            // Upload ttd_ketua_ppdb baru
            $file = $request->file('ttd_ketua_ppdb');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('settings'), $filename);

            // Set nama file ttd_ketua_ppdb baru ke dalam request
            $setting->ttd_ketua_ppdb = $filename;
        }

        // Perbarui kolom ttd_ketua_ppdb jika ada
        if ($request->hasFile('ttd_ketua_ppdb')) {
            $setting->ttd_ketua_ppdb = $filename;
        }

        // Update setting (misalkan hanya satu record yang diupdate)
        $setting->tahun_ajaran = $request->input('tahun_ajaran');
        $setting->is_pengumuman = $request->input('is_pengumuman');
        $setting->tgl_pengumuman = $request->input('tgl_pengumuman');
        $setting->link_grup_wa = $request->input('link_grup_wa');
        $setting->tgl_pendaftaran_mulai = $request->input('tgl_pendaftaran_mulai');
        $setting->tgl_pendaftaran_selesai = $request->input('tgl_pendaftaran_selesai');
        $setting->tgl_jadwal_tes_mulai = $request->input('tgl_jadwal_tes_mulai');
        $setting->tgl_jadwal_tes_selesai = $request->input('tgl_jadwal_tes_selesai');
        $setting->tgl_daftar_ulang_mulai = $request->input('tgl_daftar_ulang_mulai');
        $setting->tgl_daftar_ulang_selesai = $request->input('tgl_daftar_ulang_selesai');
        $setting->nama_sekolah = $request->input('nama_sekolah');
        $setting->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui!');
    }


}
