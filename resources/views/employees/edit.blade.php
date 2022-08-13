@extends('layouts.app')
@section('content')

@if($errors->any())
<div class="alert alert-danger p-4">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif
<form method="POST" action="{{ route('employee.update', $employee->employee_id) }}">
    @csrf
    @method("PUT")
    <div class="form-group mt-3">
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-control" value="{{ old('firstname') ?? $employee->firstname }}">
    </div>

    <div class="form-group mt-3">
        <label>Middlename</label>
        <input type="text" name="middlename" class="form-control" value="{{ old('middlename') ??$employee->middlename }}">
    </div>

    <div class="form-group mt-3">
        <label>Lastname</label>
        <input type="text" name="lastname" class="form-control" value="{{ old('lastname') ??$employee->lastname }}">
    </div>

    <div class="form-group mt-3">
        <label>Suffix</label>
        <select class='form-control' name="suffix">
            <option value="">-</option>
            @foreach($suffix as $s)
            @if(old('suffix'))
                <option {{ old('suffix') == $s ? 'selected' : '' }} value="{{ $s }}">{{ $s }}</option>
            @else
                <option {{ $employee->suffix == $s ? 'selected' : '' }} value="{{ $s }}">{{ $s }}</option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="float-end mt-3">
        <button class='btn btn-success shadow' type="submit">Update new employee</button>
    </div>
</form>
@endsection
