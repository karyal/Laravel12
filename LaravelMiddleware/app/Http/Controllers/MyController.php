<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
        return view("home");
    }

    public function about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
    }

    public function add($num1, $num2){        
        $num3 = $num1 + $num2;
        return view("display", ['num1'=>$num1, 'num2'=>$num2, 'operation'=>'+', 'result'=>$num3]);
    }
}