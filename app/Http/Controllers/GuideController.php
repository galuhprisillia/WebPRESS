<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GuideController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.guide.index');
    }

    public function AccountancyTemplate(){
        //PDF file is stored under project/public/download/info.pdf
        $file="C:/wamp/www/webpress/app/Http/Controllers/Template/Accountancy.xlsx";
        return Response::download($file);
    }

    public function OfficeAdministrationTemplate(){
        //PDF file is stored under project/public/download/info.pdf
        $file="C:/wamp/www/webpress/app/Http/Controllers/Template/OfficeAdministration.xlsx";
        return Response::download($file);
    }

    public function MarketingTemplate(){
        //PDF file is stored under project/public/download/info.pdf
        $file="C:/wamp/www/webpress/app/Http/Controllers/Template/Marketing.xlsx";
        return Response::download($file);
    }
}
