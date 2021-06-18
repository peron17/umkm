<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::group(['prefix'=>'product'], function() {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::get('/show/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::put('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
});