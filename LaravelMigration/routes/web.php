<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [StudentController::class, 'list']);
Route::get('list', [StudentController::class, 'list']);
Route::get('save', [StudentController::class, 'save']);