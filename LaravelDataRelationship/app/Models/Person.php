<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Person extends Model {
    //
    protected $table = 'persons';
    public $timestamps=false;
    function addressData(){
        return $this->hasOne('App\Models\Address', 'person_id');
    }

    function addressesData(){
        return $this->hasMany('App\Models\PersonAddresses', 'person_id');
    }
}