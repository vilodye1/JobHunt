<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// Homepage
Route::get('/', [ListingController::class, 'index']);

// create job post
Route::get('/listings/create', [ListingController::class, 'create']);

// store listing data
Route::post('/', [ListingController::class, 'store']);

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// update form
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// delete form
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

//register form
Route::get('/users/register', [UserController::class, 'register']);

// Create new user
Route::post('/users', [UserController::class, 'store']);

// keep at bottom
// single listing
Route::get('/listings/{listing}', [ListingController::class, 'single']);