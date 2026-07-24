<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
<<<<<<< HEAD
use App\Http\Controllers\ContactController;
=======
use App\Http\Controllers\MenuPublicController;
>>>>>>> 5c924d4 (learn delete & relationship)

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

<<<<<<< HEAD
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/hasil', [MenuController::class, 'hasil'])->name('menu.hasil');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menus', [MenuController::class, 'store'])->name('menu.store');

Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
=======
Route::get('/menu', [MenuPublicController::class, 'index'])->name('menu.index');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [MenuController::class, 'index'])->name('admin.dashboard');
    Route::get('/menu', [MenuController::class, 'index'])->name('admin.menu.index');
    Route::get('/hasil', [MenuController::class, 'hasil'])->name('admin.menu.hasil');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');
    Route::post('/menu', [MenuController::class, 'store'])->name('admin.menu.store');
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('admin.menu.edit');
    Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
});
>>>>>>> 5c924d4 (learn delete & relationship)
