<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
// use App\Http\Controllers\homeController;

// Group all static page routes
Route::prefix('/')->group(function () {
  
    Route::view('/', 'home.index')->name('home');
    Route::view('about', 'home.sections.about')->name('about');
    Route::view('services', 'home.sections.services')->name('services');
    Route::view('designers', 'home.sections.designers')->name('designers');
    Route::view('studios', 'home.sections.studios')->name('studios');
    Route::view('contact', 'home.sections.contact')->name('contact');

    Route::view('inquire', 'home.sections.inquire')->name('inquire');

    Route::view('faqs', 'home.sections.faqs')->name('faqs');
});