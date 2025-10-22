<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/new', [PersonController::class, 'show_form']);
Route::get('/person', [PersonController::class, 'get']);
Route::post('/person', [PersonController::class, 'post']);
Route::put('/person', [PersonController::class, 'put']);
Route::patch('/person', [PersonController::class, 'patch']);
Route::delete('/person', [PersonController::class, 'delete']);

//Any method
Route::get('/newperson', [PersonController::class, 'show_form2']);

/*
Route::get('/persons', [PersonController::class, 'any']);
Route::post('/persons', [PersonController::class, 'any']);
Route::put('/persons', [PersonController::class, 'any']);
Route::patch('/persons', [PersonController::class, 'any']);
Route::delete('/persons', [PersonController::class, 'any']);
*/

/*
Route::any('/persons', [PersonController::class, 'any']);
*/

Route::match(['post', 'get'], '/persons', [PersonController::class, 'f1']);
Route::match(['put', 'patch'], '/persons', [PersonController::class, 'f2']);
Route::match(['delete'], '/persons', [PersonController::class, 'f3']);
