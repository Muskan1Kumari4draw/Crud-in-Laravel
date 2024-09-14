<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContrller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create',[ProductContrller::class,'create'])->name(products.create);
