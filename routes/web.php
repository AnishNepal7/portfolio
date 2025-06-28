<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');
// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Admin Authentication Routes
Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');

// Protected Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/messages', [ContactController::class, 'messages'])->name('messages');
});
