<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BerandaController;

// ===== POV USER ===== //


// ===== POV ADMIN ===== //
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/data-buku', [BukuController::class, 'index'])->name('admin.data-buku');
