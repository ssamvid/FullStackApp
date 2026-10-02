@extends('layouts.app')
@section('title', $student->name)
@section('content')
    <h1 class="h3 mb-3">{{ $student->name }}</h1>
    <dl class="row">
        <dt class="col-sm-3">Email</dt>         <dd class="col-sm-9">{{ $student->email }}</dd>
        <dt class="col-sm-3">Phone</dt>         <dd class="col-sm-9">{{ $student->phone }}</dd>
        <dt class="col-sm-3">Address</dt>       <dd class="col-sm-9">{{ $student->address }}</dd>
        <dt class="col-sm-3">Date of birth</dt> <dd class="col-sm-9">{{ $student->date_of_birth->format('d M Y') }}</dd>
        <dt class="col-sm-3">Created</dt>       <dd class="col-sm-9">{{ $student->created_at }}</dd>
        <dt class="col-sm-3">Updated</dt>       <dd class="col-sm-9">{{ $student->updated_at }}</dd>
    </dl>
    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection