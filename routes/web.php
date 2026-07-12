<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class,'index'])
    ->name('dashboard');

Route::get('/libros', [LibroController::class, 'index'])
    ->name('libros.index');

Route::get('/categorias', [CategoriaController::class, 'index'])
    ->name('categorias.index');

 Route::get('/prestamos', [PrestamoController::class, 'index'])
    ->name('prestamos.index');

Route::get('/usuarios', [UsuarioController::class, 'index'])
    ->name('usuarios.index');