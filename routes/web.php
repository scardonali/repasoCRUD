<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('gestion_productos',compact('products')) ;
});

/*Rutas de Productos
*/
Route::get('/', [ProductController::class, 'index']);
Route::get('/productos',[productController::class , 'index'])->name('productos.index');
Route::get('/productos',[productController::class , 'index'])->name('productos.index')->middleware('roles: x,y');
Route::get('/productos/crear',[productController::class , 'create'])->name('productos.create');
Route::post('/productos',[productController::class , 'store'])->name('productos.store');
Route::get('/productos/{id}/editar',[productController::class , 'edit'])->name('productos.edit');
Route::put('/productos/{id}',[productController::class , 'update'])->name('productos.update');
Route::delete('/productos/{id}',[productController::class , 'destroy'])->name('productos.destroy');

