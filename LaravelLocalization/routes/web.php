<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\SetLang;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::view('', 'index');
Route::view('index', 'index');
Route::view('about', 'about');
*/
//Route::get('', 'index');
Route::middleware('SetLang')->group(function(){
    Route::get('', function(){
        return view('index');
    });
    
    Route::get('index/{lang}', function($lang){
        App::setLocale($lang);
        return view('index');
    });
});

    
