<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show(){
        //return view('home');
        return to_route('hm');
    }

    function show2(){
        //return view('home');
        return to_route('hm2',['name'=>'Raj Rai']);
    }

}