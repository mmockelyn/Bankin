<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('suivi-dossier', [\App\Http\Controllers\HomeController::class, 'suivi'])->name('suivi');
Route::post('suivi-dossier/fold', [\App\Http\Controllers\HomeController::class, 'fold'])->name('fold');
