@extends('layouts.app')
@section('title', 'Courses')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Add Course</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th><th>Name</th><th>Duration</th><th>Fee</th><th>Difficulty</th><th>Status</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->duration }} wks</td>
                    <td>{{ number_format($course->fee, 2) }}</td>
                    <td>{{ $course->difficulty }}</td>
                    <td>
                        <span class="badge {{ $course->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $course->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this course?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center text-muted">No courses yet.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    {{ $courses->links() }}
@endsection