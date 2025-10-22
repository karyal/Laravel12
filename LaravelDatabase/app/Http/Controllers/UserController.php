<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    //
    function persons(){
        //return "All Persons";
        $persons = DB::select('SELECT * FROM persons');
        return view("persons");
    }    
}