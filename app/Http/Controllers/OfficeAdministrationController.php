<?php

namespace App\Http\Controllers;

use Session;

use App\Exports\OfficeAdministrationExport;
use App\Imports\OfficeAdministrationImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\OfficeAdministrationRequest;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\OfficeAdministration;
use App\Jurusan;

class OfficeAdministrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function result()
    {
        $result_list = OfficeAdministration::orderBy('id', 'desc')
                                  -> Paginate(10);
        $result_summary = OfficeAdministration::count();
        $title_vocational = "Office Administration";
        $link_vocational = "officeadministration";
        return view('layouts.result.index', compact('result_list', 'result_summary', 'title_vocational', 'link_vocational'));
    }

    public function create()
    {
        $title_vocational = "Office Administration";
        return view('layouts.office-administration.create', compact('title_vocational'));
    }

    public function store(OfficeAdministrationRequest $request)
    {
        OfficeAdministration::create($request->all());

        $process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_office-administration.py 2>&1");
        return redirect('prediction-system/officeadministration/result');
    }

    public function show($id)
    {
        //
    }

    public function edit(OfficeAdministration $officeadministration)
    {
        return view('layouts.office-administration.edit', compact('officeadministration'));
    }

    public function update(OfficeAdministration $officeadministration, Request $request)
    {
        $input = $request->all();
        $officeadministration->update($input);
        $process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_officeadministration.py 2>&1");
        return redirect('/history');
    }

    public function destroy(OfficeAdministration $officeadministration)
    {
        $officeadministration->delete();
        return redirect('/history');
    }

    public function deleteAll(Request $request)
    {
        DB::table('officeadministration')->delete();
        return redirect('/history');
    }

    public function export()
    {
        return Excel::download(new OfficeAdministrationExport, 'OfficeAdministration.xlsx'); 
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
		$file->move('file_officeadministration',$nama_file);
 
		// import data
		Excel::import(new OfficeAdministrationImport, public_path('/file_officeadministration/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Office Administration Berhasil Diimport!');

		$process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_office-administration.py 2>&1");
 
		// alihkan halaman kembali
		return redirect('/prediction-system/officeadministration/result');
    }
}
