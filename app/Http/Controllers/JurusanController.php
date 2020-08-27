<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JurusanRequest;
use App\Jurusan;
use App\User;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $daftar_jurusan = Jurusan::all();
        return view('layouts.jurusan.index', compact('daftar_jurusan'));
    }

    public function create()
    {
        $daftar_email = User::pluck('email');
        return view('layouts.jurusan.create', compact('daftar_email'));
    }

    public function store(Request $request)
    {
        Jurusan::create($request->all());
        return redirect('jurusan');
    }

    public function show($id)
    {
        //
    }

    public function edit(Jurusan $jurusan)
    {
        $daftar_email = User::pluck('email');
        return view('layouts.jurusan.edit', compact('daftar_email','jurusan'));
    }

    public function update(Jurusan $jurusan, JurusanRequest $request)
    {
        $input = $request->all();
        $jurusan->update($input);
        return redirect('jurusan');
    }

    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect('jurusan');
    }
}
