<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

// Voeg de MenuController import toe
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');


});
// Huidige welkomstpagina route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Nieuwe route voor het menu
Route::resource('/menu', MenuController::class);

require __DIR__ . '/auth.php';
