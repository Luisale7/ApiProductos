<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::apiResource('show', UserController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('orders', OrderController::class);