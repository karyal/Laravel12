<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('uploadform', [UploadController::class, 'showUploadForm']);
Route::post('upload', [UploadController::class, 'uploadFile']);
Route::get('uploadfiles', [UploadController::class, 'getUploadedFiles']);