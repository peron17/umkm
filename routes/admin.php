<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'a'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});