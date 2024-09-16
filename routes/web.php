<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () 
{ 
    return view('inicio');
});

Route::get('/vista1', [PruebaController::class, 'mostrar_vista1'])->name('ruta_vista1');
Route::get('/vista2', [PruebaController::class, 'mostrar_vista2'])->name('ruta_vista2');
Route::get('/vista3', [PruebaController::class, 'mostrar_vista3'])->name('ruta_vista3');

//Ruta GET que invoca la vista de la calculadora
Route::get('/calculadora', [PruebaController::class, 'mostrar_calculadora'])->name('mostrar_calculadora');

//Ruta POST que envía los datos de la calculadora
Route::post('/calculadora', [PruebaController::class, 'calcular'])->name('enviar_calculadora');

//Rutas de producto
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
//Ruta POST que envía los datos del producto al servidor
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/index', [ProductoController::class, 'index'])->name('productos.index');

