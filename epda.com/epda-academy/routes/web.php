<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service-1');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/t', function () {
    return view('testcrousel');
});

Route::get('/team', function () {
    return view('Team-member-list');
});
