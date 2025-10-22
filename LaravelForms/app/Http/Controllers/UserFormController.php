<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
class UserFormController extends Controller
{
    public function getDataFromUrl(Request $request){
        //echo $request;
        $pid=$request->pid;
        $fullname=$request->fullname;
        $email=$request->email;
        $phone=$request->phone;
        //echo ($pid.", ".$fullname.", ".$email.", ".$phone);
        return View("receive", ["title"=>"Data from URL","pid"=>$pid, "fullname"=>$fullname, "email"=>$email, "phone"=>$phone]);
    }

    public function getDataFromGet(Request $request){
        //echo $request;
        $pid=$request->pid;
        $fullname=$request->fullname;
        $email=$request->email;
        $phone=$request->phone;
        //echo ($pid.", ".$fullname.", ".$email.", ".$phone);
        return View("receive", ["title"=>"Data from GET Method","pid"=>$pid, "fullname"=>$fullname, "email"=>$email, "phone"=>$phone]);
    }

    public function getDataFromPost(Request $request){
        //echo $request;
        $pid=$request->pid;
        $fullname=$request->fullname;
        $email=$request->email;
        $phone=$request->phone;
        $gender = $request->rbGender;
        $age = $request->cmbAge;
        $hobbies=null;
        $hobbies = implode(', ', $request->hobbies); ;        
        //echo ($pid.", ".$fullname.", ".$email.", ".$phone.", ".$gender.", ".$age.", ".$hobbies);
        return View("receive", ["title"=>"Data from POST Method","pid"=>$pid, "fullname"=>$fullname, "email"=>$email, "phone"=>$phone, "gender"=>$gender, "age"=>$age, "hobbies"=>$hobbies]);
    }

    public function getDataFromPost2(Request $request){
        $request->validate([
            'pid'=>'required',
            'fullname'=>'required | min:2 | max:50 | Uppercase',
            'email'=>'required | email',
            'phone'=>'required | min:10 | max:14',
            'rbGender'=>'required',
            'cmbAge'=>'required',
            'hobbies'=>'required'
        ],[
            'pid.required'=>'PID cannt be empty',
            'fullname.required'=>'FullName cannt be empty',
            'fullname.min'=>'FullName cannt be less than 2 characters',
            'fullname.max'=>'FullName cannt be greater than 20 characters',
        ]);

        //echo $request;
        $pid=$request->pid;
        $fullname=$request->fullname;
        $email=$request->email;
        $phone=$request->phone;
        $gender = $request->rbGender;
        $age = $request->cmbAge;
        $hobbies=null;
        $hobbies = implode(', ', $request->hobbies);        
        //echo ($pid.", ".$fullname.", ".$email.", ".$phone.", ".$gender.", ".$age.", ".$hobbies);
        return View("receive", ["title"=>"Data from POST Method","pid"=>$pid, "fullname"=>$fullname, "email"=>$email, "phone"=>$phone, "gender"=>$gender, "age"=>$age, "hobbies"=>$hobbies]);
    }
}