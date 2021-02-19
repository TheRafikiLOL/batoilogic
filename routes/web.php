<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderLinesController;

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

Route::resource('productos', 'App\Http\Controllers\ProductController');
Route::resource('usuarios', 'App\Http\Controllers\UserController');
Route::resource('proveedores', 'App\Http\Controllers\ProviderController');
Route::resource('order', 'App\Http\Controllers\OrderController');
Route::resource('orderlines', 'App\Http\Controllers\OrderLinesController');

Route::get('orderlines/index/{id}', [OrderLinesController::class, 'index'])->name('orderlinesIndex');
Route::get('orderlines/create/{id}', [OrderLinesController::class, 'create'])->name('orderlinesCreate');
Route::post('orderlines/{id}', [OrderLinesController::class, 'store'])->name('orderlinesStore');

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('log');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'registerForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('reg');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/', function () {
    return view('inici');
})->name('inici');

Route::get('/order/{id}/pdf', 'App\Http\Controllers\OrderController@pdf')->name('pdf');

/*Route::get('/tienda/productos', function () {
	return view('product.llistat');
})->name('product_llistat');

Route::get('/product/{id}', function ($id) {
    return view('product.fitxa', compact('id'));
})->where('id', "[0-9]+")->name('product_fitxa');*/
