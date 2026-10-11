<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('wallet', WalletController::class);
    Route::resource('transaction', TransactionController::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/auth/google', [
        GoogleController::class,
        'redirect',
    ])->name('google.redirect');

    Route::get('/auth/google/callback', [
        GoogleController::class,
        'callback',
    ])->name('google.callback');
});

require __DIR__ . '/auth.php';
