<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller {
    //
    public function persons(){
        //return "All Persons";
        $persons = DB::select('SELECT * FROM persons');
        return view("persons", ['persons'=>$persons]);
    }

    public function getPersons(){
        $tmpPerson = new \App\Models\Person;
        $tmpPerson->f1();
        $persons = \App\Models\Person::all();        
        return view("persons", ['persons'=>$persons]);
    }

    //use Illuminate\Support\Facades\DB;
    public function allPersons(){
        //Select Records
        $result = DB::table('persons')->get(); //Get All Records
        //$result = DB::table('persons')->where('address', 'Kathmandu, Nepal')->get(); //Get All Records
        //$result = DB::table('persons')->first(); //Get All Records
        //$result = [$result];
        return view("persons", ['persons'=>$result]);
        //Insert Record
        /*
        $result=DB::table('persons')->insert([
            'pid'=>10001,
            'full_name'=>'Rosham Maharjan',
            'address'=>'Kushunti, Lalitpur',
            'email'=>'roshan@gmail.com',
            'phone'=>'9851456789'
        ]);
        if($result){
            echo 'Insert Record Successfully';
        }
        else{
            echo 'Error to insert record';
        }
        */
        //$result = DB::table('persons')->where('pid', 10001)->get(); //Get All Records
        //$result = [$result];

        //Update Record
        /*
        $result=DB::table('persons')->where('pid', 10001)->update([
            'full_name'=>'Rosham Shrestha',
            'address'=>'Kalanki, Kathmandu',
            'email'=>'roshan.stha@gmail.com',
            'phone'=>'9851098765'
        ]);
        if($result){
            echo 'Update record successfully';
        }
        else{
            echo 'Error to update record';
        }
        */

        //Delete Record
        /*
        $result=DB::table('persons')->where('pid', 10001)->delete();
        if($result){
            echo 'delete record successfully';
        }
        else{
            echo 'Error to delete record';
        }
        $result = DB::table('persons')->where('pid', 10001)->get(); //Search record
        return view("persons", ['persons'=>$result]);
        */
    }
}