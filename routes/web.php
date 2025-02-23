<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [\App\Foundation\Http\Controllers\ScoutSearchController::class, 'search']);
Route::get('/search/add', [\App\Foundation\Http\Controllers\ScoutSearchController::class, 'add']);
