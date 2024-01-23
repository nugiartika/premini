<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Auth::routes(['verify'=>true]);

// Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

