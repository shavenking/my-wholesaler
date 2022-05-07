<?php

use App\Http\Controllers\Wholesaler\AuthController;
use App\Http\Controllers\Wholesaler\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('auth.show-login')->middleware(['guest']);
Route::post('login', [AuthController::class, 'login'])->name('auth.login')->middleware(['guest']);
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware(['auth']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(['auth']);
