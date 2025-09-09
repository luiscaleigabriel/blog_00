<?php

use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 *
 * Rotas de autênticação
 */

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

/**
 * Rotas Administrativas
 */
Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
