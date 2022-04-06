<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('tranc', App\Http\Controllers\TransactionsController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('dashboard', App\Http\Controllers\OrderDetailController::class);
Route::resource('report', App\Http\Controllers\ReporteController::class);
Route::get('/barcode', 'App\Http\Controllers\ProductController@GetProductBarcodes')->name('products.barcode');
Route::get('/search', 'App\Http\Controllers\TransactionsController@search')->name('search');

Route::resource('sections', App\Http\Controllers\SectionController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('subcategories', App\Http\Controllers\SubCategoryController::class);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chart/orders', [App\Http\Controllers\HomeController::class, 'orderChart'])->name('chart.orders');
