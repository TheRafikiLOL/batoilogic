<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('log');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('inici');
})->name('inici');

/*Route::get('/tienda/productos', function () {
	return view('product.llistat');
})->name('product_llistat');

Route::get('/product/{id}', function ($id) {
    return view('product.fitxa', compact('id'));
})->where('id', "[0-9]+")->name('product_fitxa');*/
