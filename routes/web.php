<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inventario/index',[PedidosController::class,'index']);
//Route::get('/almacen/create',[PedidosController::class,'create'])->name('producto.create');


//##########################PRODUCTOS############################################
//Route::get('/inventario/index',[ProductosController::class,'index'])->name('producto.index');
//Route::get('/almacen/create',[ProductosController::class,'create'])->name('producto.create');

//################## RUTAS DE PRODUCTOS ##################//
//Todas las rutas del controlador
//Route::resource('productos', ProductosController::class);

//Route::get('/inventario/index',[ProductosController::class,'index'])->name('productos.index');
//Route::get('/almacen/create',[ProductosController::class,'create'])->name('productos.create');
//Todas las rutas del controlador
Route::resource('productos', ProductosController::class);



//rutas para pedidos
Route::get('/pedidos/index',[PedidosController::class,'index'])->name('pedidos.index');
Route::post('/pedidos/store',[PedidosController::class,'store'])->name('pedidos.store');
Route::get('/pedidos/{id}/show',[PedidosController::class,'show'])->name('pedidos.show');
Route::post('/pedidos/update/{id}',[PedidosController::class,'update'])->name('pedidos.update');
Route::delete('/pedidos/delete/{id}',[PedidosController::class,'destroy'])->name('pedidos.delete');