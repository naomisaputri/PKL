<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PerusahaanController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('siswa', SiswaController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::resource('perusahaan', PerusahaanController::class);
});

require __DIR__.'/auth.php';