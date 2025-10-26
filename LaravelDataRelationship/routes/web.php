<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PersonController::class,  'list']);
Route::get('/persons', [PersonController::class,  'persons']);
Route::get('/addresses', [AddressController::class, 'addresses']);