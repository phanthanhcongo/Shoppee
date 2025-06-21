<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\GoolgeAuthController;
use App\Http\Controllers\Api\FacebookAuthController;

Route::get('/login/facebook/url', [FacebookAuthController::class, 'getFacebookUrl']);
Route::get('/login/facebook/callback', [FacebookAuthController::class, 'handleFacebookCallback']);

Route::get('/login/google/url', [GoolgeAuthController::class, 'getGoogleUrl']);
Route::get('/login/google/callback', [GoolgeAuthController::class, 'handleGoogleCallback']);

Route::get('/', function () {
    return view('welcome');
});
