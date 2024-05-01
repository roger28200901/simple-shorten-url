<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortURLController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten', [ShortURLController::class, 'create']);
Route::get('/{shortID}', [ShortURLController::class, 'redirect']);
