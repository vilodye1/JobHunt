<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// Homepage
Route::get('/', [ListingController::class, 'index']);

// create job post
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing data
Route::post('/', [ListingController::class, 'store'])->middleware('auth');

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// update form
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete form
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

//register form
Route::get('/users/register', [UserController::class, 'register'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Login form
Route::get('/users/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// keep at bottom
// single listing
Route::get('/listings/{listing}', [ListingController::class, 'single']);