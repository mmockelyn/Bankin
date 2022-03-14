<?php
use Illuminate\Support\Facades\Route;

Route::prefix('account')->middleware(['auth', 'folder'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Account\AccountController::class, 'dashboard'])->name('account.dashboard');
});
