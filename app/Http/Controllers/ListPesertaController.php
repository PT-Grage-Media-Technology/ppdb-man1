<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class ListPesertaController extends Controller
{
    public function index()
    {
        $peserta = Formulir::get();
        return view('pages.list-peserta', compact('peserta'));
    }
}
