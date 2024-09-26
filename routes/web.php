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

//admin routes
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
