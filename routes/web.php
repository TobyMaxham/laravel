<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function (Request $request) {
    return \App\Models\User::search($request->get('s'))->get();
});

Route::get('/search/add', function (Request $request) {
        \App\Models\User::factory()->create([
            'name' => $request->get('name'),
        ]);
});
