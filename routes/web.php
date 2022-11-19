<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\HomeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [HomeController::class, 'home']);
    //Alumnos
    Route::get('/alumnos', [AlumnoController::class, 'consultar']);
    Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
    Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);
    Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);
    Route::get('/alumno/editar/{id}', [AlumnoController::class, 'editar']);
    Route::post('/alumno/actualizar/{id}', [AlumnoController::class, 'actualizar']);
    //Especialidades
    Route::get('/especialidades', [EspecialidadController::class, 'consultar']);
    Route::get('/especialidad/registrar', [EspecialidadController::class, 'registrar']);
    Route::post('/especialidad/guardar', [EspecialidadController::class, 'guardar']);
    Route::get('/especialidad/eliminar/{id}', [EspecialidadController::class, 'eliminar']);
    Route::get('/especialidad/editar/{id}', [EspecialidadController::class, 'editar']);
    Route::post('/especialidad/actualizar/{id}', [EspecialidadController::class, 'actualizar']);
});

require __DIR__.'/auth.php';
