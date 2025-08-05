<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/timetable', function () {
    return view('timetable'); // or your actual controller method
})->name('timetable');

Route::get('/todo', function () {
    return view('todo'); // or your actual controller method
})->name('todo');




require __DIR__.'/auth.php';
