<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Rafi Ahmed
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[EcommerceController::class,'index'])->name('/');
Route::get('/product-details/{id}',[EcommerceController::class,'productDetails'])->name('product-details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add-product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
    Route::post('/new-product',[ProductController::class,'saveProduct'])->name('new-product');
    Route::get('/status/{id}',[ProductController::class,'status'])->name('status');
    Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete-product');
    Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit-product');
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update-product');
});
