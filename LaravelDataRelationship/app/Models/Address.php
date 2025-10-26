<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Address extends Model {
    //
    protected $table = 'addresses';
    public $timestamps=false;  

    public function getAddresses(){
        return $this->belongsTo('App\Models\Person');
    }  
}