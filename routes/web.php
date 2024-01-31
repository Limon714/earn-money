<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\postpageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home',[HomeController::class,'home'])
->middleware('auth')
->name('home');


Route::get('/',[HomeController::class,'homepage']);
Route::get('/post_details/{id}',[HomeController::class,'postdetails']);
Route::get('/new_post',[HomeController::class,'newpost'])->middleware('auth');
Route::post('/user_add_post',[HomeController::class,'user_add_post'])->middleware('auth');
Route::get('/my_post',[HomeController::class,'mypost'])->middleware('auth');
Route::get('/my_post_delete/{id}',[HomeController::class,'my_post_delete'])->middleware('auth');
Route::get('/my_post_edit/{id}',[HomeController::class,'my_post_edit']);
Route::post('/my_post_update/{id}',[HomeController::class,'my_post_update']);



Route::get('/postpage',[postpageController::class,'postpage']);
Route::post('/add_post',[postpageController::class,'add_post']);
Route::get('/showpost',[postpageController::class,'show_post']);
Route::get('/delete_post/{id}',[postpageController::class,'delete_post']);
Route::get('/edit_post/{id}',[postpageController::class,'edit_post']);
Route::post('/update_post/{id}',[postpageController::class,'update_post']);
Route::get('/active_post/{id}',[postpageController::class,'active_post']);
Route::get('/inactive_post/{id}',[postpageController::class,'inactive_post']);




