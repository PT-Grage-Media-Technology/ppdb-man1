<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function index()
    {
        return view('pages.formulir');
    }
    public function formulir(Request $request)
    {

    }
}
