<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller {
    
    function show_form(){
        return view("new");
    }
    function get(Request $request){
        //return "Hello from get() method of PersonController";
        return $request;
    }

    function post(Request $request){
        //return "Hello from get() method of PersonController";
        return $request;
    }
    
    //function put(Request $request){
    function put(Request $request){
        //return "Hello from put() method of PersonController";
        return $request;
    }

    function patch(Request $request){
        //return "Hello from patch() method of PersonController";
        return $request;
    }
    function delete(Request $request){
        //return "Hello from delete() method of PersonController";
        return $request;
    }

    function show_form2(){
        return view("new2");
    }


    function any(Request $request){
        return "Hello from any() method of PersonController";
        //return $request;
    }

    function f1(Request $request){
        return "Hello from f1() method of PersonController";
        //return $request;
    }

    function f2(Request $request){
        return "Hello from f2() method of PersonController";
        //return $request;
    }

    function f3(Request $request){
        return "Hello from f3() method of PersonController";
        //return $request;
    }
}