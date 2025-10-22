<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request){
        $token = $request->input('_token') ; 
        $user = $request->input('txtUser') ;
        $password = $request->input('txtPassword') ;
        
        //Adding value on session
        $request->session()->put('user', $user);
        $request->session()->put('password', $password);
        //return $user.','.$password.','.$token;
        //return "Hello from login() of UserController";
        return redirect('profile');
    }

    function logout(){
        session()->pull('user'); 
        return redirect('profile');       
    }

    function save(Request $request){
        //session()->pull('user'); 
        //return redirect('profile');       
        $request->session()->flash('message', 'User has been added successfully');
        //return redirect("user");
        //return 'User save successfully';
        return redirect('user');
    }

}
