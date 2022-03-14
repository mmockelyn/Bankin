<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('simulate')->group(function () {
    Route::get('facility', \App\Http\Controllers\Api\Simulate\FacilityController::class);
    Route::get('info_subscription', \App\Http\Controllers\Api\Simulate\InfoSubscriptionController::class);
});

Route::prefix('oauth')->group(function () {
    Route::get('/token', [\App\Http\Controllers\Api\AuthController::class, 'token']);
    Route::post('/verify', [\App\Http\Controllers\Api\AuthController::class, 'verify']);
});
