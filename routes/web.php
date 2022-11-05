<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/alumnos', [AlumnoController::class, 'consultar']);
Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);
Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);