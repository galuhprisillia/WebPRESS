<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accountancy;
use App\OfficeAdministration;
use App\Marketing;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $accountancy_list = Accountancy::orderBy('id', 'desc')
                                  -> Paginate(10);
        $accountancy_summary = Accountancy::count();
        $title_accountancy = "Accountancy";

        $officeadministration_list = OfficeAdministration::orderBy('id', 'desc')
                                  -> Paginate(10); 
        $officeadministration_summary = OfficeAdministration::count(); 
        $title_officeadministration = "Office Administration";

        $marketing_list = Marketing::orderBy('id', 'desc')
                                  -> Paginate(10);
        $marketing_summary = Marketing::count();
        $title_marketing = "Marketing";

        return view('layouts.history.index', compact(
            'accountancy_list', 
            'marketing_list', 
            'officeadministration_list', 
            'accountancy_summary',
            'officeadministration_summary',
            'marketing_summary',
            'title_accountancy',
            'title_officeadministration',
            'title_marketing'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
