<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\TareaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Hola Bienvenido');
});

Auth::routes();

Route::get('/', [TareaController::class, 'index']);
Route::post('/tareas', [TareaController::class, 'store']);
Route::get('/tareas/{id}/edit', [TareaController::class, 'edit']);
Route::put('/tareas/{id}', [TareaController::class, 'update']);
Route::delete('/tareas/{id}', [TareaController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/tareas', [App\Http\Controllers\TareaController::class, 'index'])
    ->name('tareas.index');

Route::get('/tareas/create', [App\Http\Controllers\TareaController::class, 'create'])
    ->name('tareas.create');

Route::post('/tareas', [App\Http\Controllers\TareaController::class, 'store'])
    ->name('tareas.store');

Route::get('/tareas/{tarea}/edit', [App\Http\Controllers\TareaController::class, 'edit'])
    ->name('tareas.edit');

Route::put('/tareas/{tarea}', [App\Http\Controllers\TareaController::class, 'update'])
    ->name('tareas.update');

Route::delete('/tareas/{tarea}', [App\Http\Controllers\TareaController::class, 'destroy'])
    ->name('tareas.destroy');