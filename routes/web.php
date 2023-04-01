<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;



//Route::get('/inventario/index',[PedidosController::class,'index']);
//Route::get('/almacen/create',[PedidosController::class,'create'])->name('producto.create');


//##########################PRODUCTOS############################################
//Route::get('/inventario/index',[ProductosController::class,'index'])->name('producto.index');
//Route::get('/almacen/create',[ProductosController::class,'create'])->name('producto.create');

//################## RUTAS DE PRODUCTOS ##################//
//Todas las rutas del controlador
//Route::resource('productos', ProductosController::class);



//#########################
Route::get('/inventario/index',[ProductosController::class,'index'])->name('productos.index');
Route::get('/almacen/create',[ProductosController::class,'create'])->name('productos.create');
//Todas las rutas del controlador
Route::resource('productos', ProductosController::class);
Auth::routes();
//###########################

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [ProductosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [ProductosController::class, 'index'])->name('home');
});

