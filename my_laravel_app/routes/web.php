<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\SupplierController;
Use App\Http\Controllers\PurchaseOrderStatusController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('purchase-order-status', App\Http\Controllers\PurchaseOrderStatusController::class);