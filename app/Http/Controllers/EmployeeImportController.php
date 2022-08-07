<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeImportController extends Controller
{
    public function import()
    {
        return view('employees.import');
    }

    public function processImport(Request $request)
    {
        Excel::import(new EmployeeImport, $request->file('file'));
        // $request->file('file')->move(
        //     base_path() . '/public/uploads/',
        //     $request->file('file')->getClientOriginalName()
        // );

        // $contents = file_get_contents(base_path() . '/public/uploads/' . $request->file('file')->getClientOriginalName());

        // $contents = explode("\n", $contents);

        // $contents = array_filter($contents);

        // foreach($contents as $content) {
        //     $content = str_replace("\r", "", $content);

        //     list($employee_id, $firstname, $middlename, $lastname) = explode(",", $content);
            
        //     Employee::create([
        //         'employee_id' => str_pad($employee_id, 4, "0", STR_PAD_LEFT),
        //         'firstname' => $firstname,
        //         'middlename' => $middlename,
        //         'lastname' => $lastname,
        //     ]);

        // }

        // return 'Success!';
    }
}
