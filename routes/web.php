<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/hasil', [MenuController::class, 'hasil']);

Route::get('/contact', function () {
    return view('contact');
});
