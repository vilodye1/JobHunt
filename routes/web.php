<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

// Homepage
Route::get('/', [ListingController::class, 'index']);

// create job post
Route::get('/listings/create', [ListingController::class, 'create']);

// keep at bottom
// single listing
Route::get('/listings/{listing}', [ListingController::class, 'single']);