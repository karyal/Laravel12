<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('student', 'newstudent');
Route::post('student', [StudentController::class, 'save']);
Route::get('/', [StudentController::class, 'students']);
Route::get('students', [StudentController::class, 'students']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('update/{id}', [StudentController::class, 'update']);
Route::get('search', [StudentController::class, 'search']);
Route::post('delete-multi', [StudentController::class, 'deleteMultiple']);