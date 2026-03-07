<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::apiResource('show', UserController::class);
Route::apiResource('products', ProductController::class);