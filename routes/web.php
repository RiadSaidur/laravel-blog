<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-single', [HomeController::class, 'blogSingle'])->name('blog-single');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-details', [HomeController::class, 'portfolioDetails'])->name('portfolio-details');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/team', [HomeController::class, 'team'])->name('team');
