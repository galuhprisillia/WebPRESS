<?php

namespace App\Http\Controllers;

use Session;

use App\Exports\MarketingExport;
use App\Imports\MarketingImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MarketingRequest;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use App\Marketing;
use App\Jurusan;

class MarketingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function result()
    {
        $result_list = Marketing::orderBy('id', 'desc')
                                  -> Paginate(10);
        $result_summary = Marketing::count();
        $title_vocational = "Marketing";
        $link_vocational = "marketing";
        return view('layouts.result.index', compact('result_list', 'result_summary', 'title_vocational', 'link_vocational'));
    }

    public function create()
    {
        $title_vocational = "Marketing";
        return view('layouts.marketing.create', compact('title_vocational'));
    }

    public function store(MarketingRequest $request)
    {
        Marketing::create($request->all());

        $process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_marketing.py 2>&1");
        return redirect('prediction-system/marketing/result');
    }

    public function show($id)
    {
        //
    }

    public function edit(Marketing $marketing)
    {
        return view('layouts.marketing.edit', compact('marketing'));
    }

    public function update(Marketing $marketing, Request $request)
    {
        $input = $request->all();
        $marketing->update($input);
        $process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_marketing.py 2>&1");
        return redirect('/history');
    }

    public function destroy(Marketing $marketing)
    {
        $marketing->delete();
        return redirect('/history');
    }

    public function deleteAll(Request $request)
    {
        DB::table('marketing')->delete();
        return redirect('/history');
    }

    public function export()
    {
        return Excel::download(new MarketingExport, 'Marketing.xlsx'); 
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
		$file->move('file_marketing',$nama_file);
 
		// import data
		Excel::import(new MarketingImport, public_path('/file_marketing/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Marketing Berhasil Diimport!');

		$process = shell_exec("C:/Anaconda3/envs/webpress/python C:/wamp/www/webpress/app/Http/Controllers/Pyhton/avgk_marketing.py 2>&1");
 
		// alihkan halaman kembali
		return redirect('/prediction-system/marketing/result');
    }
}
