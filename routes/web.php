<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// General Page Routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/why', function () {
    return view('why');
})->name('why');

Route::get('/team', function () {
    return view('team');
})->name('team');

// Auth and Protected Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include the auth routes
require __DIR__.'/auth.php';
