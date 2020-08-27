<?php

namespace App\Http\Controllers;
use App\Jurusan;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $user_list = User::all();
        $user_list = User::orderBy('id', 'asc')
                                  -> Paginate(5);
        return view('admin.index', compact('user_list'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('user');
    }

    public function show($id)
    {
        return redirect('user');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        if ($request->has('password')) {
            // Hash password.
            $data['password'] = bcrypt($data['password']);
        } else {
            // Hapus password (password tidak diupdate).
            $data = array_except($data, ['password']);
        }

        $user->update($data);
        return redirect('user');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('user');
    }
}
