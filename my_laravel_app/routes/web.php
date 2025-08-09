<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\SupplierController;
Use App\Http\Controllers\PurchaseOrderStatusController;
Use App\Http\Controllers\EmployeeController;
Use App\Http\Controllers\PurchaseOrderController;
Route::get('/', function () {
    return view('welcome');  // Vista pública
})->middleware('guest');

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('suppliers', SupplierController::class);
    Route::resource('purchase-order-status', PurchaseOrderStatusController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('purchase-orders', PurchaseOrderController::class);
});