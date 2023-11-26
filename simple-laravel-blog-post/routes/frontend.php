<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/categories', [PageController::class, 'category'])->name('categories');

Route::get('/single', [PageController::class, 'single'])->name('single');

// Route::get('/post', [PostController::class, 'post'])->name('post');
// Route::post('/post', [PostController::class, 'store'])->name('post.store');
