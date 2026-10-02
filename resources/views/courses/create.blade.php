@extends('layouts.app')
@section('title', 'Add Course')
@section('content')
    <h1 class="h3 mb-3">Add Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @include('courses._form')
    </form>
@endsection