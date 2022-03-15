<?php
use Illuminate\Support\Facades\Route;

Route::prefix('oauth')->group(function () {
    Route::get('token', [\App\Http\Controllers\Auth\FirebaseController::class, 'token'])->name('auth.firebase.token');
    Route::post('check', [\App\Http\Controllers\Auth\FirebaseController::class, 'check'])->name('auth.firebase.check');
});
