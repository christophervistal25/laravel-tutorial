<?php
namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    public function model(array $data)
    {
        return new Employee([
            'employee_id' => $data[0],
            'firstname' => $data[1],
            'middlename' => $data[2],
            'lastname' => $data[3],
        ]);
    }
}