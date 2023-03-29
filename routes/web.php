<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inventario/index',[PedidosController::class,'index']);
//Route::get('/almacen/create',[PedidosController::class,'create'])->name('producto.create');

Route::get('/inventario/index',[ProductosController::class,'index'])->name('producto.index');
Route::get('/almacen/create',[ProductosController::class,'create'])->name('producto.create');
