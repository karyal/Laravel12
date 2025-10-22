<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

/*
Route::get('/link', function () {
    return view('receive');
});
*/

Route::get('link', [UserFormController::class, 'getDataFromUrl']);

Route::get('/form1', function () {
    return view('form1');
});
Route::get('getForm', [UserFormController::class, 'getDataFromGet']);

Route::get('/form2', function () {
    return view('form2');
});

Route::post('postForm', [UserFormController::class, 'getDataFromPost']);

Route::get('/form3', function () {
    return view('form3');
});

Route::post('postForm2', [UserFormController::class, 'getDataFromPost2']);