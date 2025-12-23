<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index']);

// Blog routes

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}',[BlogController::class,'show'])->name('blog.show');




Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy.index');
Route::get('/terms', [TermsController::class, 'index'])->name('terms.index');





// Route::get('blogs/create', [BlogController::class,'create'])->name('blogs.create');
// Route::post('/blogs',[BlogController::class,'store'])->name('blogs.store');
// Route::get('/blogs/{id}',[BlogController::class,'show'])->name('blogs.show');
// Route::get('/blogs/{id}/edit',[BlogController::class,'edit'])->name('blogs.edit');
// Route::put('/blogs/{id}',[BlogController::class,'update'])->name('blogs.update');
// Route::delete('/blogs/{id}',[BlogController::class,'destroy'])->name('blogs.destroy');

