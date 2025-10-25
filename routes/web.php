<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/skills', function () {
    return view('pages.skills');
});

Route::get('/Projects', function () {
    return view('pages.Projects');
});