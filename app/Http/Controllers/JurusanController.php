<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();

        return view('pages.jurusan', compact('jurusan'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);

        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = $request->input('nama_jurusan');
        $jurusan->save();

        return redirect()->back()->with('success', 'Jurusan baru telah ditambahkan.');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);

        $jurusan = Jurusan::find($id);
        if (!$jurusan) {
            return redirect()->back()->with('error', 'Jurusan tidak ditemukan.');
        }

        $jurusan->nama_jurusan = $request->input('nama_jurusan');
        $jurusan->save();

        return redirect()->back()->with('success', 'Jurusan telah diperbarui.');
    }

    public function hapus($id)
    {
        $jurusan = Jurusan::find($id);
        if (!$jurusan) {
            return redirect()->back()->with('error', 'Jurusan tidak ditemukan.');
        }

        $jurusan->delete();

        return redirect()->back()->with('success', 'Jurusan telah dihapus.');
    }

}
