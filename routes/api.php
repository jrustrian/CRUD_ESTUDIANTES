<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('customersprueba', [App\Http\Controllers\CustomerController::class, 'getAll'])->name('api-getAll');
Route::put('save-customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('api-saveProduct');
Route::delete('delete-customer/{id}', [App\Http\Controllers\CustomerController::class, 'deleteCustomer'])->name('api-deleteCustomer');
Route::post('edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'editCustomer'])->name('api-editCustomer');
