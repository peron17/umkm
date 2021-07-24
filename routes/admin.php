<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ElementPositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::resource('element-position', ElementPositionController::class);