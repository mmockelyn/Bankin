<?php
use Illuminate\Support\Facades\Route;

Route::prefix('account')->middleware(['auth', 'folder'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Account\AccountController::class, 'dashboard'])->name('account.dashboard');
    Route::get('info', [\App\Http\Controllers\Account\AccountController::class, 'info'])->name('account.info');

    Route::prefix('wallet')->group(function () {
        Route::get('{uuid}', [\App\Http\Controllers\Account\WalletController::class, 'show'])->name('account.wallet.show');
    });

    Route::prefix('transfer')->group(function () {
        Route::get('/', [\App\Http\Controllers\Account\TransferController::class, 'index'])->name('account.transfer.index');
    });
});
