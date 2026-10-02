@extends('layouts.app')
@section('title', 'Edit Student')
@section('content')
    <h1 class="h3 mb-3">Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @method('PUT')
        @include('students._form')
    </form>
@endsection