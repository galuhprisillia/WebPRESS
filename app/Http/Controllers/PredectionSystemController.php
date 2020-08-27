<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class PredectionSystemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $daftar_jurusan = Jurusan::all();
        return view('layouts.prediction-system.index', compact('daftar_jurusan'));
    }

}
