<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $daftar_jurusan = Jurusan::all();
        return view('layouts.upload.index', compact('daftar_jurusan'));
    }
}
