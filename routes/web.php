<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserSession;

Route::get('/', [MainController::class,'index']);

Route::get('/login', [AuthController::class,'login']);
Route::post('/login/authentication', [AuthController::class,'login_auth']);

Route::get('/forgot_password', [AuthController::class,'forgot_password']);
Route::post('/forgot_password/send_mail', [AuthController::class,'send_forgot_password']);
Route::get('/change_password', [AuthController::class,'change_password']);
Route::post('/change_password/success', [AuthController::class,'change_password_success']);

Route::get('/logout', [AuthController::class,'logout']);

// Super Admin
Route::middleware(['usersession:1'])->group(function () {

});

// Admin
Route::middleware(['usersession:2'])->group(function () {

});

// Lecturer
Route::middleware(['usersession:3'])->group(function () {

});

// Assistant
Route::middleware(['usersession:4'])->group(function () {

});

// Student
Route::middleware(['usersession:5'])->group(function () {

});

// All User
Route::middleware(['usersession:5,4,3,2,1'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'Index']);
});