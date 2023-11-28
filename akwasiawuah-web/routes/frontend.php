<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'index')->name('home');
});