<?php

use App\Http\Controllers\WpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wp', [WpController::class, 'index']);
