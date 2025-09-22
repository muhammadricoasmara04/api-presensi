<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\User\ProfileController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    //    Auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    // User
     Route::prefix('users/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
        // Route::put('/', [ProfileController::class, 'update']); // nanti bisa ditambah untuk update
    });
});
