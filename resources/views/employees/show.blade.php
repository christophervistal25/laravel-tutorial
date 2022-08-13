@extends('layouts.app')
@section('content')

<div class="form-group mt-3">
    <label>Firstname</label>
    <input type="text" name="firstname" class="form-control" readonly value="{{  $employee->firstname }}">
</div>

<div class="form-group mt-3">
    <label>Middlename</label>
    <input type="text" name="middlename" class="form-control" readonly value="{{ $employee->middlename }}">
</div>

<div class="form-group mt-3">
    <label>Lastname</label>
    <input type="text" name="lastname" class="form-control" readonly value="{{ $employee->lastname }}">
</div>

<div class="form-group mt-3">
    <label>Suffix</label>
    <input type="text" name="suffix" class="form-control" readonly value="{{ $employee->suffix }}">
</div>


@endsection
