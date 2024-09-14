<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Corrected the spelling of the controller

Route::get('/', function () {
    return view('welcome');
});

// Corrected route syntax and route name
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
