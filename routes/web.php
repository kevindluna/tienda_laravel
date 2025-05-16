<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pinateria\PinateriaController;
use App\Http\Controllers\Pinateria\ProductosController;
use App\Models\Pinateria\Producto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de  piñateria

Route::get('/pinateria', [PinateriaController::class, 'index'])->name('pinateria.index');
Route::get('/pinateria/productos', [PinateriaController::class, 'viewProducts'])->name('pinateria.productos');
Route::get('/pinateria/producto/{codigo}/{nombre}', [PinateriaController::class, 'viewProduct'])->name('pinateria.producto');

// Rutas de GEstion de Pinñteria
Route::middleware(['auth'])->group(function () {
    // Rutas de GEstion de Productos
    Route::get('/pinateria/gestion/productos', [ProductosController::class, 'index'])->name('gestion.pinateria.productos');
});

// Rutas de Cacharreria

Route::get('/cacharreria', function(){return view('cacharreria/index');});



