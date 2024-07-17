<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
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
                    return '<span class="badge badge-sm bg-gradient-danger text-center">Kelengkapan Data: ' . $completionPercentage . '%</span>';
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

    if ($formulir) {
        $formulir->update(['status' => 'Diterima']);
        return redirect()->back()->with('success', 'Peserta telah diterima.');
    } else {
        return redirect()->back()->with('error', 'Formulir tidak ditemukan.');
    }
}

public function tolak($user_id)
{
    $formulir = Formulir::where('user_id', $user_id)->first();

    if ($formulir) {
        $formulir->update(['status' => 'Ditolak']);
        return redirect()->back()->with('success', 'Peserta telah ditolak.');
    } else {
        return redirect()->back()->with('error', 'Formulir tidak ditemukan.');
    }
}


}
