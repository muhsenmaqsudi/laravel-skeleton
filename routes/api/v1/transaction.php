<?php

use App\Http\Controllers\V1\PlaceTransactionController;
use Illuminate\Support\Facades\Route;

Route::prefix('transactions')->group(function () {
    Route::post('/', PlaceTransactionController::class)->name('store');
});
