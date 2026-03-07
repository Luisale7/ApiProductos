<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::apiResource('show', UserController::class);
Route::apiResource('products', ProductController::class);