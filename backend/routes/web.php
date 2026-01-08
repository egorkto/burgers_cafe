<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])
    ->withoutMiddleware('auth:admin')
    ->middleware('guest:admin')
    ->name('login');
Route::post('/login', [LoginController::class, 'attempt'])->withoutMiddleware('auth:admin')->name('login.attempt');

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/{category}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{category}/delete', [CategoryController::class, 'delete'])->name('category.delete');
});

Route::prefix('currencies')->group(function () {
    Route::get('/', [CurrencyController::class, 'index'])->name('currency');
    Route::get('/create', [CurrencyController::class, 'create'])->name('currency.create');
    Route::post('/store', [CurrencyController::class, 'store'])->name('currency.store');
    Route::get('/{currency}', [CurrencyController::class, 'show'])->name('currency.show');
    Route::get('/{currency}/edit', [CurrencyController::class, 'edit'])->name('currency.edit');
    Route::put('/{currency}/update', [CurrencyController::class, 'update'])->name('currency.update');
    Route::delete('/{currency}/delete', [CurrencyController::class, 'delete'])->name('currency.delete');
});
