<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    //
    function sendEmail(){
        $to="krishna.aryal@patancollege.edu.np";
        $message="Hello from Test Mail";
        $subject="Test Mail using Laravel-12";
        Mail::to($to)->send(new WelcomeEmail($message, $subject));
        return "Email send successfully";
    }

    function sendEmail2(Request $request){      
        $to = $request->to;        
        $message = $request->message;
        $subject = $request->subject;
        Mail::to($to)->send(new WelcomeEmail($message, $subject));
        return "Compose and send Email Successfully";
    }
}