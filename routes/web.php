<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

//website routes
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/blogs', [WebsiteController::class, 'blogs'])->name('website.blogs');
Route::get('/blogs/detail', [WebsiteController::class, 'detail'])->name('website.detail');


Route::get('/login', [AuthController::class, 'login'])->name('login');

//admin routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::post('/authenticate',[AuthController::class, 'authenticate'])->name('authenticate');

    Route::middleware('auth')->group(function() {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    });
});

