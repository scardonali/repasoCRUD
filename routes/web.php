<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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
    return view('gestion_productos');
});

/*Rutas de Productos
*/
Route::get('/productos',[productController::class , 'index'])->name('productos.index');
Route::get('/productos/crear',[productController::class , 'create'])->name('productos.create');
Route::post('/productos',[productController::class , 'store'])->name('productos.store');
Route::get('/productos/{id}/editar',[productController::class , 'edit'])->name('productos.edit');
Route::put('/productos/{id}',[productController::class , 'update'])->name('productos.update');
Route::delete('/productos/{id}',[productController::class , 'destroy'])->name('productos.destroy');

