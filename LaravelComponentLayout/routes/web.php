<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/rooms', 'rooms');
Route::view('/amenities', 'amenities');
Route::view('/contact', 'contact');
Route::view('/login', 'login');