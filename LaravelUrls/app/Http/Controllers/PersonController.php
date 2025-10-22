<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //   
    public function home(){
        return view('person.home');
    }

    function save(){
        return "Person Save";
    }

    function update(){
        return "Person Update";
    }

    function delete(){
        return "Person Delete";
    }

     function all(){
        return "All Persons";
    }

    function search(){
        return "Search person";
    }
}