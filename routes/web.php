<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('comic-read', function () {
    return view('comic-read');
});

Route::get('question', function () {
    return view('question');
});
