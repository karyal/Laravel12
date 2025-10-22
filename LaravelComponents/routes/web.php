<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", [HomeController::class, "home"]);
Route::get("/home", [HomeController::class, "home"]);
Route::get("/about", [HomeController::class, "about"]);
Route::get("/contact", [HomeController::class, "contact"]);
