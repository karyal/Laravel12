<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('', 'home');
Route::view('/home', 'home');
Route::view('/custom', 'custom');
Route::view('/bootstrap', 'bootstrap');
