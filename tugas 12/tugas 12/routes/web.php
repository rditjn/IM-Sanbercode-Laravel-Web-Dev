<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/register', [FormController::class, 'registerForm']);
Route::post('/register', [FormController::class, 'submitForm']); // Untuk menangani form submission

Route::get('/welcome', [FormController::class, 'welcome']);
