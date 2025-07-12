<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('Welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tareas', [App\Http\Controllers\TareaController::class, 'index'])->name('tareas.index');

Route::get('/tareas/create', [App\Http\Controllers\TareaController::class, 'create'])->name('tareas.create');

Route::post('/tareas', [App\Http\Controllers\TareaController::class, 'store'])->name('tareas.store');

Route::get('/tareas/{tarea}/edit', [App\Http\Controllers\TareaController::class, 'edit'])->name('tareas.edit');

Route::put('/tareas/{tarea}', [App\Http\Controllers\TareaController::class, 'update'])->name('tareas.update');

Route::delete('/tareas/{tarea}', [App\Http\Controllers\TareaController::class, 'destroy'])->name('tareas.destroy');