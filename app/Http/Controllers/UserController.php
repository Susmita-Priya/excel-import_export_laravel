<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function importExcel()
    {
        return view('import-export');
    }

    public function importExcelPost(Request $request)
    {
        Excel::import(new UserImport, $request->file('file'));

        return redirect()->back();
    }

    public function exportExcel()
    {
        return Excel::download(new UserExport, 'users.csv');
    }
}
