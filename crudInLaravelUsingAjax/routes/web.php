<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('products');
// });

Route::get('/',[ProductController::class,'product'])->name('products');
Route::post('/add-product',[ProductController::class,'addProduct'])->name('add.product');