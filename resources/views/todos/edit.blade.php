@extends('layout')

@section('content')
    <h1>Edit To-do</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $todo->title }}" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $todo->description }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection
