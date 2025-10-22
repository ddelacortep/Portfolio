<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/habilidades', function () {
    return view('habilidades');
})->name('habilidades');