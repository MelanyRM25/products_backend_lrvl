<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('login',action: [UserController::class,'login']);

Route::get('products', [ProductController::class, 'index']);// MOSTRAR
Route::post('products', [ProductController::class, 'store']); //POST GUARDAR
Route::get('products/{product}', [ProductController::class, 'show']); // MOSTRAR producto po producto
Route::put('products/{product}', [ProductController::class, 'update']);//ACTUALIZAR
Route::delete('products/{product}', [ProductController::class, 'destroy']);//DELETE ELIMINAR 