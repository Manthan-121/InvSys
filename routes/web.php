<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;


Route::get('/',[UserController::class, 'index'])->name('login');

Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');

Route::get('/profile',[SettingsController::class, 'profile'])->name('profile');

Route::get('/settings',[SettingsController::class, 'settings'])->name('settings');