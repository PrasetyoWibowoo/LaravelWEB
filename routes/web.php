<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});
