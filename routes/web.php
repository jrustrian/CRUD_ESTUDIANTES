<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Category')->group(function () {
    Route::get('/agregar', [CategoryController::class, 'create'])->name('category-add');
    //Route::get('/visualizar', [CuentaController::class, 'index'])->name('cuenta-visualizar');
    Route::post('/crear', [CategoryController::class, 'store'])->name('category-create');
    //Route::delete('/eliminar/{id}', [CuentaController::class, 'delete'])->name('cuenta-eliminar');
    //Route::get('/editar/{id}', [CuentaController::class, 'edit'])->name('cuenta-editar');
    //Route::PUT('/actualizar/{id}', [CuentaController::class, 'update'])->name('cuenta-actualizar');
});
