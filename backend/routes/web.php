<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BurgerController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])
    ->withoutMiddleware('auth:admin')
    ->middleware('guest:admin')
    ->name('login');
Route::post('/login', [LoginController::class, 'attempt'])->withoutMiddleware('auth:admin')->name('login.attempt');

Route::prefix('burgers')->group(function () {
    Route::get('/', [BurgerController::class, 'index'])->name('burger.index');
    Route::get('/create', [BurgerController::class, 'create'])->name('burger.create');
    Route::post('/store', [BurgerController::class, 'store'])->name('burger.store');
    Route::get('/{burger}', [BurgerController::class, 'show'])->name('burger.show');
    Route::get('/{burger}/edit', [BurgerController::class, 'edit'])->name('burger.edit');
    Route::put('/{burger}/update', [BurgerController::class, 'update'])->name('burger.update');
    Route::delete('/{burger}/delete', [BurgerController::class, 'delete'])->name('burger.delete');
});
