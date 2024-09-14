@extends('layout')

@section('content')
    <h1>Create To-do</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Save</button>
    </form>
@endsection
