<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[EcommerceController::class,'index'])->name('/');
Route::get('/shop-page',[EcommerceController::class,'shopPage'])->name('shop-page');
Route::get('/single-product',[EcommerceController::class,'singleProduct'])->name('single-product');
Route::get('/card',[EcommerceController::class,'card'])->name('card');
Route::get('/check-out',[EcommerceController::class,'checkOut'])->name('check-out');
Route::get('/product-details/{id}',[EcommerceController::class,'productDetails'])->name('product-details');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add-product');
    Route::post('/new-product',[ProductController::class,'saveProduct'])->name('new-product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
    Route::get('/status/{id}',[ProductController::class,'status'])->name('status');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update-product');

    Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete-product');
});
