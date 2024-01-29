<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\postpageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/home',[HomeController::class,'home'])
->middleware('auth')
->name('home');


Route::get('/',[HomeController::class,'homepage']);
Route::get('/postpage',[postpageController::class,'postpage']);
Route::post('/add_post',[postpageController::class,'add_post']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
