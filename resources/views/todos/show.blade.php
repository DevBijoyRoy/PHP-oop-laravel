@extends('layout')

@section('content')
    <h1>{{ $todo->title }}</h1>
    <p>{{ $todo->description }}</p>
    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('todos.index') }}">Back to List</a>
@endsection
