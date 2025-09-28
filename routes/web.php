<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('about', function(){
    return Inertia::render('About');
})->name('about');

Route::get('contact-us', function(){
    return Inertia::render('Contact', [
        'user' => 'Jhon Doe'
    ]);
})->name('contact');
