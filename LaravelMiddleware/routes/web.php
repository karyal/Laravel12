<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PersonController;
use App\Http\Middleware\CheckMin;
use App\Http\Middleware\CheckMax;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Global Middleware
Route::get('/', [MyController::class, 'home']);
Route::get('/home', [MyController::class, 'home']);
Route::get('/about', [MyController::class, 'about']);
Route::get('/contact', [MyController::class, 'contact']);
Route::get('/add/{num1}/{num2}', [MyController::class, 'add'])->middleware(CheckMin::class, CheckMax::class);
Route::get('/sum/{num1}/{num2}', [MyController::class, 'add'])->middleware('check1');

//Group Middlware
/*
Route::get('/person', [PersonController::class, 'home']);
Route::get('/person/home', [PersonController::class, 'home']);
Route::get('/person/new', [PersonController::class, 'new']);
Route::get('/person/edit', [PersonController::class, 'edit']);
Route::get('/person/delete', [PersonController::class, 'delete']);
*/

Route::middleware('check2')->group(function(){
    Route::get('/person/home', [PersonController::class, 'home']);
    Route::get('/person/new', [PersonController::class, 'new']);
    Route::get('/person/edit', [PersonController::class, 'edit']);
    Route::get('/person/delete', [PersonController::class, 'delete']);
});