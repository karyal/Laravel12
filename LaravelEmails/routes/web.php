<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/send-mail', [EmailController::class, 'sendEmail']);
Route::view('compose-mail','compose-email');
Route::post('/send-email', [EmailController::class, 'sendEmail2']);