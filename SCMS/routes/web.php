<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;  

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


