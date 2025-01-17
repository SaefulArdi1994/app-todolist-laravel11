<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
