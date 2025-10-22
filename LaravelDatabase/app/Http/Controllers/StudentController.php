<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function queries(){
        //Record Retrival
        //$response=Student::all();
        //$response=Student::get(); //All Records
        //$response=Student::where('sid',5)->first();
        //$response=Student::find(1);
        //$response = [$response];
        //return view('student', ['students'=>$response]);

        //Insert Record
        /*
        $response = Student::insert([
            'full_name'=>'Keshab Thapa',
            'class'=>'Grade 7',
            'section'=>'A'
        ]);
        if($response){
            echo 'Record insert successfully';
        }
        else{
            echo 'Error to insert record';
        }
        $response=Student::all();
        return view('student', ['students'=>$response]);
        */
    
    //Update Record
    /*
        $response = Student::where('sid', 6)->update([
            'full_name'=>'Keshab Sharma',
            'class'=>'Grade 6',
            'section'=>'B'
        ]);
        if($response){
            echo 'Record insert successfully';
        }
        else{
            echo 'Error to insert record';
        }
        $response=Student::all();
        return view('student', ['students'=>$response]);
    */

    //Delete Record
        $response = Student::where('sid', 6)->delete();
        if($response){
            echo 'Record delete successfully';
        }
        else{
            echo 'Error to delete record';
        }
        $response=Student::all();
        return view('student', ['students'=>$response]);
    }
}