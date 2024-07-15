<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFormulirRequest;

class FormulirController extends Controller
{
    public function index()
    {
        return view('pages.formulir');
    }
    public function store(Request $request)
    {
        Formulir::create($request->all());
        // dd($request);
        return redirect()->route('formulirs.index')->with('success', 'Formulir berhasil ditambahkan');
    }
}
