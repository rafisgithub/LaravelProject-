<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::post('todo/add', [TaskController::class, 'store']);
Route::post('todo/status', [TaskController::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('/user')->group(function(){
    Route::post('/login','api\v1\loginController@login');
    Route::post('todo/add', [TaskController::class, 'store']);
    Route::post('todo/status', [TaskController::class, 'update']);

});