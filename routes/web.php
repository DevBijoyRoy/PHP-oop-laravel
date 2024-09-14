<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
}
);



// define the routes for your CRUD operations


// use App\Http\Controllers\ToDoController;

// Route::resource('todos', ToDoController::class);
