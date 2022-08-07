@extends('layouts.app')
@section('content')

@if($errors->any())
<div class="alert alert-danger p-4">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@elseif(Session::has('success'))
<div class="alert alert-success p-4">
    {{ Session::get('success') }}
</div>
@endif
<form method="POST" action="{{ route('employee.store') }}">
    @csrf
    <div class="form-group">
        <label>Employee ID</label>
        <input type="text" name="employee_id" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label>Middlename</label>
        <input type="text" name="middlename" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label>Lastname</label>
        <input type="text" name="lastname" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label>Suffix</label>
        <select class='form-control' name="suffix">
            <option value="Jr">Jr.</option>
            <option value="Sr">Sr.</option>
            <option value="II">II</option>
        </select>
    </div>

    <div class="float-end mt-3">
        <button class='btn btn-primary shadow' type="submit">Submit new employee</button>
    </div>
</form>
@endsection
