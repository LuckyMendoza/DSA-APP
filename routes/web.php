<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\homeController;

// All static pages routes using PageController
Route::controller(homeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about'); 
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/designers', 'designers')->name('designers');
    Route::get('/studios', 'studios')->name('studios');

  

});

