<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::post('/user-request', [UserRequestController::class, 'store']);
