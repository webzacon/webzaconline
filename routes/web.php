<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'service')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('/pricing', 'pricing')->name('pricing');

