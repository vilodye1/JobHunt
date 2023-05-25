<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings/index');
});

Route::get('/create', function () {
    return view('listings/create');
});
