<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PedidoController;


Route::get('/categorias',
[CategoriasController::class, 'index']);

Route::get('/clientes',
[ClienteController::class, 'index']);

Route::get('/empleados', 
[EmpleadoController::class, 'index']);

Route::get('/materiales', 
[MaterialesController::class, 'index']);

Route::get('/productos', 
[ProductoController::class, 'index']);

Route::get('/proveedores', 
[ProveedorController::class, 'index']);

Route::get('/pedidos', 
[PedidoController::class, 'index']);
