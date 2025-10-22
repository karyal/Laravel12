<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/person', [PersonController::class, 'form']);
Route::post('/person', [PersonController::class, 'save']);