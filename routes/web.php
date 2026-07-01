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

Route::get('/births-statistics', function () {
    return view('births-statistics');
})->name('births-statistics');

Route::get('/archive/deaths-archive', function () {
    return view('deaths-archive');
})->name('deaths-archive');

Route::get('/archive/births-archive', function () {
    return view('births-archive');
})->name('births-archive');