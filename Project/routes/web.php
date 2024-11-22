<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/','pages.welcome', ['title' => 'Golden <i>Farm</i>']);
Route::view('/about','pages.about', ['title' => 'Golden Farm']);
Route::view('/products','pages.products', ['title' => 'Golden Farm']);
Route::view('/contact','pages.contact', ['title' => 'Golden Farm']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
