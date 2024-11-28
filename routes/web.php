<?php

use App\Http\Controllers\MyController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

// Definiciones de Rutas
Route::get('/', [MyController::class, 'index']);
Route::get('juanito', [MyController::class, 'juanito']);
Route::get('ruta-con-controlador', [MyController::class, 'conControlador']);
Route::get('listar-usuarios', [MyController::class, 'listarUsuarios']);

Route::post('juanito', [MyController::class, 'juanitoPost']);
