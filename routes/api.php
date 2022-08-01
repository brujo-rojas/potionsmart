<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PotionController;
use App\Http\Controllers\Api\ClientController;
use Illuminate\Http\Request;

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/user', 'user');
    });

    Route::controller(PotionController::class)->group(function () {
        Route::get('/potions', 'index');
    });

    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index');
        Route::post('/buy', 'buy');
    });
});
