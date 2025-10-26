<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    function getFullnameAttribute($value){
        return ucfirst($value);
    }

    function getSectionAttribute($value){
        return ucwords($value);
    }

    function setFullnameAttribute($value){
        $this->attributes['fullname']=ucwords($value);        
    }

    function setCourseAttribute($value){
        $this->attributes['course']=ucwords($value);        
    }

    function setLevelAttribute($value){
        $this->attributes['level']=ucwords($value);        
    }

    function setSectionAttribute($value){
        $this->attributes['section']=ucwords($value);        
    }
}
