<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EstadoOrdenController;
use App\Http\Controllers\OrdenCompraController;


Route::resource('estadoorden', EstadoOrdenController::class)->only(['index', 'create', 'store']);

Route::resource('orden_compras', OrdenCompraController::class);

Route::get('estadoorden/create', [EstadoOrdenController::class, 'create'])->name('estadoorden.create');


Route::resource('productos', ProductoController::class);

Route::resource('proveedores', ProveedorController::class);
Route::put('proveedores/{proveedore}', [ProveedorController::class, 'update'])->name('proveedores.update');

Route::get('/', function () {
    return view('home');
});
