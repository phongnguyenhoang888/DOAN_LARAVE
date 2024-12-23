<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('Profile');

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'Dash'])->name('Dash');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
