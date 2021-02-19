<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DealerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderLinesController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('productos','App\Http\Controllers\Api\ProductController');
Route::apiResource('customers','App\Http\Controllers\Api\CustomerController');
Route::apiResource('dealers','App\Http\Controllers\Api\DealerController');
Route::apiResource('orders','App\Http\Controllers\Api\OrderController');
Route::apiResource('orderlines','App\Http\Controllers\Api\OrderLinesController');
Route::apiResource('users','App\Http\Controllers\Api\UserController');
Route::apiResource('login','App\Http\Controllers\Api\LoginController');
Route::get('login/{credentials}', [LoginController::class, 'login']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
