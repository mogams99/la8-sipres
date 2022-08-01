<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    
    Route::middleware('role:admin')->group(function() {
        Route::resource('/users', App\Http\Controllers\UsersController::class);
        Route::get('/presences', [App\Http\Controllers\PresenceController::class, 'index'])->name('presence.index');
    });
    Route::middleware('role:user')->group(function() {
        Route::resource('/presences', App\Http\Controllers\PresenceController::class)->names('presence')->except('index', 'store');
        Route::post('/presences', [App\Http\Controllers\PresenceController::class, 'store'])->name('presence.store')->middleware('presence.iscomplete');
    });
});

Auth::routes([
    'register' => false,
]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

