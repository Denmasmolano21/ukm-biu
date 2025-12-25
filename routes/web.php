<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataUkmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::prefix('ukm')->name('ukm.')->group(function () {
    Route::get('/', [DataUkmController::class, 'index'])->name('index');
    Route::get('/{slug}', [DataUkmController::class, 'show'])->name('show');
});

// 404 Error Page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
