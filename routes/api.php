<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\AutorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/libros', [LibrosController::class, 'getlibros']);

Route::get('/libro/{id}', [LibrosController::class, 'getlibro']);

Route::post('/nuevo_libro', [LibrosController::class, 'nuevoLibro']);

Route::put('/libro_actualizar/{id}', [LibrosController::class, 'libroActualizar']);

Route::delete('/libro_eliminar/{id}', [LibrosController::class, 'libroEliminar']);



Route::get('/autores', [AutorController::class, 'getAutores']);

Route::get('/autor/{id}', [AutorController::class, 'getAutor']);

Route::post('/nuevo_autor', [AutorController::class, 'nuevoAutor']);

Route::put('/autor_actualizar/{id}', [AutorController::class, 'AutorActualizar']);

Route::delete('/autor_eliminar/{id}', [AutorController::class, 'AutorEliminar']);
