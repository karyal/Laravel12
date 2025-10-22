<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NumCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo "Hello from NumCheck handle()";
        //echo("<pre>");
        //print_r($request);
        //echo("</pre>");
        
        echo "<p>Hello from handle() of NumCheck Middleware</p>";
        if(($request->num1<=0) || ($request->num1>=100)){
            if(($request->num2<=0) || ($request->num2>=100)){
                die("Numbers should be in range of 1 to 100");
            }
        }
        return $next($request);
    }
}