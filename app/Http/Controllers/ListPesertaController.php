<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Facades\DataTables;
use PDF;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ListPesertaController extends Controller
{
    public function index(Request $request)
    {
        $peserta = Formulir::all(); // Ambil semua data Formulir

        if ($request->ajax()) {
            return DataTables::of($peserta)
                ->addIndexColumn()
                ->addColumn('kelengkapan_data', function ($peserta) {
                    $completionPercentage = $peserta->getCompletionPercentage();
                    return '<a href="' . route('formulir-pendaftaran-user', $peserta->user_id) . '" class="badge badge-sm bg-gradient-danger text-center">Kelengkapan Data: ' . $completionPercentage . '%</a>';
                })
                ->addColumn('action', function ($peserta) {
                    $actions = '<td class="text-end"><div class="actions">';

                    if ($peserta->status == 'Diterima') {
                        $actions .= '<span class="badge badge-sm bg-gradient-success text-center">Telah Diterima</span>';
                    } elseif ($peserta->status == 'Ditolak') {
                        $actions .= '<span class="badge badge-sm bg-gradient-warning text-center">Telah Ditolak</span>';
                    } else {
                        $actions .= '<a href="#" class="btn-action" data-action="Terima" data-url="' . route('terima', $peserta->user_id) . '" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        <span class="badge badge-sm bg-gradient-success text-center">Terima</span>
                                    </a>';
                        $actions .= '<a href="#" class="btn-action" data-action="Tolak" data-url="' . route('tolak', $peserta->user_id) . '" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        <span class="badge badge-sm bg-gradient-warning text-center">Tolak</span>
                                    </a>';
                    }

                    $actions .= '</div></td>';

                    return $actions;
                })
                ->rawColumns(['kelengkapan_data', 'action'])
                ->make(true);
        }

        return view('pages.list-peserta', compact('peserta'));
    }



    public function terima($user_id)
{
    $formulir = Formulir::where('user_id', $user_id)->first();
    $user = User::where('id', $user_id)->first();

    if ($formulir) {


        $pdf_diterima = $this->savePDF($user, $formulir);

        if($pdf_diterima){

            $formulir->status = 'Diterima';
            $formulir->pengumuman = 'Diterima';
            $formulir->pdf_diterima = $pdf_diterima;
            $formulir->save();

            return redirect()->back()->with('success', 'Formulir telah diterima.');
        } else {
            return redirect()->back()->with('error', 'pdf gagal disimpan');
        }

    }

    return redirect()->back()->with('error', 'Formulir tidak ditemukan.');
}

public function tolak($user_id)
{
    $formulir = Formulir::where('user_id', $user_id)->first();

    if ($formulir) {
        $formulir->status = 'Ditolak';
        $formulir->pengumuman = 'Ditolak';
        $formulir->save();

        return redirect()->back()->with('success', 'Formulir telah ditolak.');
    }

    return redirect()->back()->with('error', 'Formulir tidak ditemukan.');
}

public function savePDF($user, $formulir)
{
    $setting = Setting::first();
    $data = [
        'tahun_ajaran' => $setting->tahun_ajaran,
        'tgl_pengumuman' => Carbon::parse($setting->tgl_pengumuman)->translatedFormat('d F Y'),
        'nama_lengkap' => $formulir->nama_lengkap,
        'nama_sekolah_asal' => $formulir->nama_sekolah_asal,
        'kode_pendaftaran' => $formulir->kode_pendaftaran,
    ];

    $pdf = PDF::loadView('pages.pdfPenerimaan', $data);

    // Nama file dan path penyimpanan
    $fileName = $data['nama_lengkap'] . '_hasil_seleksi_ppdb.pdf';
    $directory = public_path('pdf');
    $path = $directory . '/' . $fileName;

    // Log untuk memastikan direktori dan path
    Log::info('Directory: ' . $directory);
    Log::info('File path: ' . $path);

    // Cek dan buat direktori jika belum ada
    if (!File::exists($directory)) {
        File::makeDirectory($directory, 0755, true);
        Log::info('Directory created: ' . $directory);
    }

    // Simpan file ke direktori
    try {
        $pdf->save($path);
        Log::info('PDF saved successfully at ' . $path);

        return $fileName;
    } catch (\Exception $e) {
        Log::error('Error saving PDF: ' . $e->getMessage());

        return false;
    }
}



}
