<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\MenabungController;





Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', [TabunganController::class, 'index'])->name('tabungan.index');
    Route::resource('tabungan', TabunganController::class)->except(['index']);
    Route::get('menabung', [MenabungController::class, 'create'])->name('menabung.create');
    Route::post('menabung', [MenabungController::class, 'store'])->name('menabung.store');
});
