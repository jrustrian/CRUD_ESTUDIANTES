<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Category')->group(function () {
    Route::get('/agregar', [CategoryController::class, 'create'])->name('category-add');
    Route::get('/visualizar', [CategoryController::class, 'index'])->name('category-visualize');
    Route::post('/crear', [CategoryController::class, 'store'])->name('category-create');
    Route::delete('/eliminar/{id}', [CategoryController::class, 'delete'])->name('category-delete');
    Route::get('/editar/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    Route::PUT('/actualizar/{id}', [CategoryController::class, 'update'])->name('category-update');
});


Route::prefix('Cliente')->group(function () {
    Route::get('/agregar', [CustomerController::class, 'create'])->name('customer-add');
    Route::get('/visualizar', [CustomerController::class, 'index'])->name('customer-visualize');
    Route::post('/crear', [CustomerController::class, 'store'])->name('customer-create');
    Route::delete('/eliminar/{id}', [CustomerController::class, 'delete'])->name('customer-delete');
    Route::get('/editar/{id}', [CustomerController::class, 'edit'])->name('customer-edit');
    Route::PUT('/actualizar/{id}', [CustomerController::class, 'update'])->name('customer-update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
