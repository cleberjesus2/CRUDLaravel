<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    // Rotas dos Controllers junto com seus métodos do resource
Route::resource('usuarios', UserController::class);

Route::resource('produtos', ProductController::class);

Route::resource('carros', CarController::class);

