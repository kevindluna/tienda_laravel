<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PinateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de  piñateria

Route::get('/pinateria', [PinateriaController::class, 'index'])->name('pinateria.index');
Route::get('/pinateria/productos', [PinateriaController::class, 'viewProducts'])->name('pinateria.productos');

// Rutas de Cacharreria

Route::get('/cacharreria', function(){return view('cacharreria/index');});



