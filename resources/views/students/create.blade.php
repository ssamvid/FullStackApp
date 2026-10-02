@extends('layouts.app')
@section('title', 'Add Student')
@section('content')
    <h1 class="h3 mb-3">Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @include('students._form')
    </form>
@endsection