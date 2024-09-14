@extends('layout')

@section('content')
    <h1>To-do List</h1>
    <a href="{{ route('todos.create') }}">Create New To-do</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($todos as $todo)
            <li>
                <a href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
