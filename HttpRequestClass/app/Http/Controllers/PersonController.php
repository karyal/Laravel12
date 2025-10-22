<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    function form(){
        return view('user');
    }

    function save(Request $request){
        //return "Hello from save() method of PersonController";
        echo "<br/>METHOD : ".$request->method();
        echo "<br/>PATH : ".$request->path();
        echo "<br/>URL : ".$request->url();
        echo "<br/>FULL URL : ".$request->fullUrl();
        echo "<br/>FULL URL & QUERY : ".$request->fullUrlWithQuery($request->query());
        echo "<br/>FULL URL & Without QUERY : ".$request->fullUrlWithoutQuery(['txtUser','txtPassword']);
        echo "<br/>USER : ".$request->input('txtUser');
        echo "<br/>PASSWORD : ".$request->input('txtPassword');        
        echo "<br/>COLLECT : ".$request->collect();
        //print_r("<br/>Request : ".$request->input());
        //return $request;
        if($request->method()=='POST'){
            echo '<br/>METHOD : POST';
        }
        if($request->method()=='GET'){
            echo '<br/>METHOD : GET';
        }
        //Path
        if($request->is('person')){
            echo '<br/>PATH : person';
        }
        //IP
        echo "<br/>IP : ".$request->ip();
    }
}