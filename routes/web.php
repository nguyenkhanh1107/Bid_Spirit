<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\DetailsController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
Route::get('/categoriespage', [CategoriesController::class, 'index'])->name('categoriespage');
Route::get('/galleriespage', [GalleriesController::class, 'index'])->name('galleriespage');
Route::get('/detailspage', [DetailsController::class, 'index'])->name('detailspage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
