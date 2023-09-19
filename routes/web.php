<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Rutas para el CRUD de productos
Route::resource('productos', ProductoController::class);