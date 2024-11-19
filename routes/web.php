<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/iuran-warga',[IuranController::class,'iuran'])->name('iuran');

    Route::get('/data-warga',[WargaController::class,'warga'])->name('warga');
});

require __DIR__.'/auth.php';
