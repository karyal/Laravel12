<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StudentController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", [PersonController::class, 'persons']);
Route::get("/persons", [PersonController::class, 'getPersons']);
Route::get("/all", [PersonController::class, 'allPersons']);

//Student Management
Route::get("/students", [StudentController::class, 'queries']);