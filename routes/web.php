<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'index']);

Route::get('/login', [AuthController::class,'login']);
Route::post('/login/authentication', [AuthController::class,'login_auth']);

Route::get('/forgot_password', [AuthController::class,'forgot_password']);
Route::post('/forgot_password/send_mail', [AuthController::class,'send_forgot_password']);
Route::get('/change_password', [AuthController::class,'change_password']);
Route::post('/change_password/success', [AuthController::class,'change_password_success']);