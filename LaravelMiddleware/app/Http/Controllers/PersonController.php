<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PersonController extends Controller {
    //
    public function home(){
        return view("person.home");
    }

    public function new(){
        return view("person.new");
    }

    public function edit(){
        return view("person.edit");
    }

    public function delete(){
        return view("person.delete");
    }
}