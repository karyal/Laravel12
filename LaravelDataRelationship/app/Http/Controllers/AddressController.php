<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Person;
use App\Models\PersonAddresses;

class AddressController extends Controller {
    //
    function list(){
        return PersonAddresses::all();
    }

    function addresses(){
        $data=PersonAddresses::with('personData')->get();
        return $data;
    }
}