<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/index', function () {
//     return view('index');
// })->name('index');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');