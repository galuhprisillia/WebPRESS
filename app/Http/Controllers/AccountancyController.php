<?php

namespace App\Http\Controllers;

use Session;

use App\Exports\AccountancyExport;
use App\Imports\AccountancyImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AccountancyRequest;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Accountancy;
use App\Jurusan;

class AccountancyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function result()
    {
        $result_list = Accountancy::orderBy('id', 'desc')
                                  -> Paginate(10);
        $result_summary = Accountancy::count();
        $title_vocational = "Accountancy";
        $link_vocational = "accountancy";
        return view('layouts.result.index', compact('result_list', 'result_summary', 'title_vocational', 'link_vocational'));
    }

    public function create()
    {
        $title_vocational = "Accountancy";
        return view('layouts.accountancy.create', compact('title_vocational'));
    }

    public function store(AccountancyRequest $request)
    {
        Accountancy::create($request->all());

        $process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_accountancy.py 2>&1");
        return redirect('prediction-system/accountancy/result');
    }

    public function show($id)
    {
        //
    }

    public function edit(Accountancy $accountancy)
    {
        return view('layouts.accountancy.edit', compact('accountancy'));
    }

    public function update(Accountancy $accountancy, Request $request)
    {
        $input = $request->all();
        $accountancy->update($input);
        $process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_accountancy.py 2>&1");
        return redirect('/history');
    }

    public function destroy(Accountancy $accountancy)
    {
        $accountancy->delete();
        return redirect('/history');
    }

    public function deleteAll(Request $request)
    {
        DB::table('accountancy')->delete();
        return redirect('/history');
    }

    public function export()
    {
        return Excel::download(new AccountancyExport, 'Accountancy.xlsx'); 
    }

    public function import(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_accountancy',$nama_file);
 
		// import data
		Excel::import(new AccountancyImport, public_path('/file_accountancy/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Accountancy Berhasil Diimport!');

		$process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_accountancy.py 2>&1");
 
		// alihkan halaman kembali
		return redirect('/prediction-system/accountancy/result');
    }
}
