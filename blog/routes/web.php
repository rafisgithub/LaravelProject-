<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogControoler;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[BlogControoler::class,'index'])->name('/');
Route::post('/new-blog',[BlogControoler::class,'saveBlog'])->name('new.blog');
Route::get('/all-blog',[BlogControoler::class,'allBlog'])->name('all.blog');
Route::get('/edit-blog/{id}',[BlogControoler::class,'editBlog'])->name('edit.blog');
Route::post('/delete-blog',[BlogControoler::class,'deleteBlog'])->name('delete.blog');
Route::post('/update-blog',[BlogControoler::class,'updateBlog'])->name('update.blog');
