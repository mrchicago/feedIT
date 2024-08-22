<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LieferantenController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('welcome');
});
Route::get('/order', [LieferantenController::class, 'show']);
