<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class PersonAddresses extends Model {
    //
    protected $table = 'personaddresses';
    public $timestamps=false;

    function personData(){
         return $this->belongsTo('App\Models\PersonAddresses', 'person_id');
    }    
}