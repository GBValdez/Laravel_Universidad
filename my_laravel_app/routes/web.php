<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\SupplierController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('suppliers', App\Http\Controllers\SupplierController::class);