<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonAddresses;

class PersonController extends Controller {
    //
    function list(){
        //return Person::all();
        return Person::find(2)->addressData;
        //return Person::where('person_id','1');
    }

    function persons(){
        return Person::find(1)->addressesData;
    }
}