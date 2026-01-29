<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SignupController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\UserVitalsController;





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::post('/signup', [SignupController::class, 'signup']);

Route::post('/login',  [LoginController::class, 'login']);

// No auth, update profile by user_id
Route::post('/profile/update', [ProfileController::class, 'updateProfile']);

Route::get('/profile/data', [ProfileController::class, 'viewProfile']);


// Request reset link
Route::post('/password/forgot', [ForgotPasswordController::class, 'sendResetLink']);

// Reset password
Route::post('/password/reset', [ForgotPasswordController::class, 'resetPassword']);


Route::post('/vitals', [UserVitalsController::class, 'storeVitals']);


