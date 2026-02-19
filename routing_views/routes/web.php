<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return 'Hello, Im Feeyyaa';
});

Route::get('/greet', [GreetController::class, 'index']);
