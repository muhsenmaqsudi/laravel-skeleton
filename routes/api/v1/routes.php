<?php

use Illuminate\Support\Facades\Route;

Route::as('v1:transactions:')
    ->group(base_path('routes/api/v1/transaction.php'));
