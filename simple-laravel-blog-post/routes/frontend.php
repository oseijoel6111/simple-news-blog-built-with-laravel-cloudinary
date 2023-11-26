<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/categories', [PageController::class, 'category'])->name('categories');

Route::get('/single', [PageController::class, 'single'])->name('single');


Route::controller(PostController::class)->prefix('posts')->group(function(){

    Route::get('/', 'index')->name('posts.index');

});

Route::controller(CategoryController::class)->prefix('categories')->group(function (){

    Route::get('/', 'index')->name('categories.index');
    Route::post('/', 'store')->name('categories.store');

});
