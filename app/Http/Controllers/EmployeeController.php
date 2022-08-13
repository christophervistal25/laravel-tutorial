<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();
        return view('employees.index', [
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suffix = Employee::SUFFIX;
        return view('employees.create', [
            'suffix' => $suffix,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suffix = Employee::SUFFIX;

        $this->validate($request, [
            'firstname' => ['required', 'max:50'],
            'middlename' => ['nullable', 'min:2', 'max:50'],
            'lastname' => ['required', 'max:50'],
            'suffix' => ['nullable', 'min:2', 'in:' . implode(',', $suffix)],
        ]);

        Employee::create([
            'firstname'   => $request->firstname,
            'middlename'  => $request->middlename,
            'lastname'    => $request->lastname,
            'suffix'      => $request->suffix,
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($employeeID)
    {
        $employee = Employee::find($employeeID);
        return view('employees.show', [
            'employee' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($employeeID)
    {
        $employee = Employee::find($employeeID);
        $suffix = Employee::SUFFIX;
        return view('employees.edit', [
            'employee' => $employee,
            'suffix' => $suffix,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employeeID)
    {
        $suffix = Employee::SUFFIX;
        $this->validate($request, [
            'firstname' => ['required', 'max:50'],
            'middlename' => ['nullable', 'min:2', 'max:50'],
            'lastname' => ['required', 'max:50'],
            'suffix' => ['nullable', 'min:2', 'in:' . implode(',', $suffix)],
        ]);

        $employee = Employee::find($employeeID);
        $employee->firstname = $request->firstname;
        $employee->middlename = $request->middlename;
        $employee->lastname = $request->lastname;
        $employee->suffix = $request->suffix;
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
