<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/hasil', [MenuController::class, 'hasil'])->name('menu.hasil');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menus', [MenuController::class, 'store'])->name('menu.store');

Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
