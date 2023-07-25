<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', static fn () => ['ping' => 'pong'])->name('ping');

Route::prefix('api/v1')
    ->as('v1:')
    ->middleware('api')
    ->group(base_path('routes/api/v1/routes.php'));


Route::prefix('api/v2')
    ->as('v2:')
    ->middleware('api')
    ->group(base_path('routes/api/v2/routes.php'));
