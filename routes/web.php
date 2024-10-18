<?php

use Illuminate\Support\Facades\Route;
Route::get('/info/server', [InfoController::class, 'phpInfo']);
Route::get('/info/client', [InfoController::class, 'clientInfo']);
Route::get('/info/database', [InfoController::class, 'dbInfo']);
Route::get('/', function () {
    return view('welcome');
});
