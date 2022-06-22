<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use Excel;
class EmployeeController extends Controller
{
    public function importForm()
    {
        return view('import_view');
    }

    public function import_excell(Request $request)
    {
        Excel::import(new EmployeeImport, $request->file);
        return redirect('/get_all_employee');
    }

    public function show_all_employee()
    {
        return "ok";
    }
}
