<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/hasil', [MenuController::class, 'hasil']);
Route::get('/menus/create', [MenuController::class, 'create']);
Route::post('/menus', [MenuController::class, 'store']);

Route::get('/menus/{menu}/edit', [MenuController::class, 'edit']);
Route::put('/menus/{menu}', [MenuController::class, 'update']);


Route::get('/contact', function () { return view('contact'); });
