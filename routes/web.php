<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware('auth')->group(function(){

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

});

Route::get('/login', 
    [AuthController::class,'login']
)
->name('login');


Route::post('/login', 
    [AuthController::class,'authenticate']
)
->name('login.authenticate');


Route::post('/logout',
    [AuthController::class,'logout']
)
->name('logout');