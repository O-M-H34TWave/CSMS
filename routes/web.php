<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/archive', function () {
    return view('archive');
})->name('archive');

Route::get('/statistics', function () {
    return view('statistics');
})->name('statistics');
