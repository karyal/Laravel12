<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'home');
Route::view('home', 'home');
Route::view('about', 'about');
Route::view('contact', 'about');
Route::view('calculate/{num1}/{num2}', 'calculate');

//Named Routes
Route::view('home/test/test2/test3/', 'home')->name('hm');
Route::view('home/test/test2/test3/test4/{name}', 'home')->name('hm2');

Route::get('show', [HomeController::class, 'show']);
Route::get('show2', [HomeController::class, 'show2']);

//Group of Route with Prefix with Views
/*
Route::view('person/home', 'person.home');
Route::view('person/new', 'person.new');
Route::view('person/edit', 'person.edit');
Route::view('person/delete', 'person.delete');
Route::view('person/all', 'person.all');
*/

//Normal url
/*
Route::get('person/home', [PersonController::class, 'home']);
Route::get('person/new', [PersonController::class, 'save']);
Route::get('person/update', [PersonController::class, 'update']);
Route::get('person/delete', [PersonController::class, 'delete']);
Route::get('person/all', [PersonController::class, 'all']);
*/

//Group of Route with Prefix in Route
/*
Route::prefix('person')->group(function(){
    Route::get('/home', [PersonController::class, 'home']);
    Route::get('/new', [PersonController::class, 'save']);
    Route::get('/update', [PersonController::class, 'update']);
    Route::get('/delete', [PersonController::class, 'delete']);
    Route::get('/all', [PersonController::class, 'all']);
    Route::get('/search', [PersonController::class, 'search']);
});
*/

//Group of Route with Controller
Route::controller(PersonController::class)->group(function(){
    Route::get('/home', 'home');
    Route::get('/new', 'save');
    Route::get('/update', 'update');
    Route::get('/delete', 'delete');
    Route::get('/all', 'all');
    Route::get('/search', 'search');
});
