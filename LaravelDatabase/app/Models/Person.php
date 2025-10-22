<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model {
    //
    use HasFactory;
    protected $table='persons';

    function f1(){
        echo "Hello from f1() of Person";
    }
}