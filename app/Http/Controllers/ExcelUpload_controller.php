<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CodesExport;
use App\Imports\CodesImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUpload_controller extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new CodesExport, 'codes.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new CodesImport,request()->file('file'));

        return back();
    }
}