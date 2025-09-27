<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('about', function(){
    return Inertia::render('About');
});

Route::get('contact-us', function(){
    return Inertia::render('Contact', [
        'user' => 'Jhon Doe'
    ]);
});
