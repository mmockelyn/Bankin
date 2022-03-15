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
        Route::get('create', [\App\Http\Controllers\Account\TransferController::class, 'create'])->name('account.transfer.create');
        Route::post('create', [\App\Http\Controllers\Account\TransferController::class, 'store'])->name('account.transfer.store')->middleware('otp');

        Route::get('history', [\App\Http\Controllers\Account\TransferController::class, 'history'])->name('account.transfer.history');

        Route::prefix('beneficiaire')->group(function () {
            Route::get('/', [\App\Http\Controllers\Account\BeneficiaireController::class, 'index'])->name('account.transfer.beneficiaire.index');
            Route::post('/', [\App\Http\Controllers\Account\BeneficiaireController::class, 'store'])->name('account.transfer.beneficiaire.store');
        });
    });
});
