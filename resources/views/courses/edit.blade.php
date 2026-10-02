@extends('layouts.app')
@section('title', 'Edit Course')
@section('content')
    <h1 class="h3 mb-3">Edit Course</h1>
    <form action="{{ route('courses.update', $course) }}" method="POST">
        @method('PUT')
        @include('courses._form')
    </form>
@endsection