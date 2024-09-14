<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        ToDo::create($request->all());

        return redirect()->route('todos.index')
                         ->with('success', 'ToDo created successfully.');
    }

    public function show(ToDo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(ToDo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, ToDo $todo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index')
                         ->with('success', 'ToDo updated successfully.');
    }

    public function destroy(ToDo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')
                         ->with('success', 'ToDo deleted successfully.');
    }
}
