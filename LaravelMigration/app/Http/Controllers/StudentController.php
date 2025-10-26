<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function list(){
        return Student::all();
        //return "Hello from list() of StudentController";
    }

    function save(){
        $student = new Student();
        $student->fullname="rohit rai";
        $student->course="BSc csse";
        $student->level="level-5";
        $student->section="b";
        if($student->save()){
            echo "Student save successfully";
        }
    }
}