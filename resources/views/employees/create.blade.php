@extends('layouts.app')
@section('content')

@if($errors->any())
<div class="alert alert-danger p-4">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif
<form method="POST" action="{{ route('employee.store') }}">
    @csrf

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
            <option value="">-</option>
            @foreach($suffix as $s)
            <option value="{{ $s }}">{{ $s }}</option>
            @endforeach
        </select>
    </div>

    <div class="float-end mt-3">
        <button class='btn btn-primary shadow' type="submit">Submit new employee</button>
    </div>
</form>
@endsection
