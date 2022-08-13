@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success p-4">
    {{ Session::get('success') }}
</div>
@endif
<div class="float-end mb-3">
    <a href="{{ route('employee.create') }}" class="btn btn-primary shadow">Add new employee</a>
</div>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Suffix</th>
            <th class='text-center'>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($employees as $employee)
        <tr>
            <td>{{ $employee->employee_id }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->middlename }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->suffix }}</td>
            <td class='text-center'>
                <a class='btn btn-success' href="{{ route('employee.edit', $employee->employee_id) }}">EDIT</a>
                <a class='btn btn-info' href="{{ route('employee.show', $employee->employee_id) }}">SHOW</a>
                <a class='btn btn-danger' href="">DELETE</a>
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="6">No employees found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection