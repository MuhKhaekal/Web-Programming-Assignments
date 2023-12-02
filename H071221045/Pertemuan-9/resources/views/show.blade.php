@extends('layouts.app')

@section('content')
    <h1>Task Details</h1>

    <div>
        <strong>Title:</strong> {{ $task->title }}
    </div>
    <div>
        <strong>Description:</strong> {{ $task->description }}
    </div>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Back to Task List</a>
@endsection