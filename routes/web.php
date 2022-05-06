<?php

use App\Http\Controllers\Wholesaler\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin']);
//Route::post('login', [AuthController::class, 'login']);
