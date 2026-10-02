@extends('layouts.app')
@section('title', $course->name)
@section('content')
    <h1 class="h3 mb-3">{{ $course->name }}</h1>
    <dl class="row">
        <dt class="col-sm-3">Description</dt> <dd class="col-sm-9">{{ $course->description }}</dd>
        <dt class="col-sm-3">Duration</dt>    <dd class="col-sm-9">{{ $course->duration }} weeks</dd>
        <dt class="col-sm-3">Fee</dt>         <dd class="col-sm-9">{{ number_format($course->fee, 2) }}</dd>
        <dt class="col-sm-3">Difficulty</dt>  <dd class="col-sm-9">{{ $course->difficulty }}</dd>
        <dt class="col-sm-3">Status</dt>      <dd class="col-sm-9">{{ $course->is_active ? 'Active' : 'Inactive' }}</dd>
        <dt class="col-sm-3">Created</dt>     <dd class="col-sm-9">{{ $course->created_at }}</dd>
        <dt class="col-sm-3">Updated</dt>     <dd class="col-sm-9">{{ $course->updated_at }}</dd>
    </dl>
    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
@endsection