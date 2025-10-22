<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\TestMiddleware;
use App\Http\Middleware\CheckMax;
use App\Http\Middleware\CheckMin;
use App\Http\Middleware\NumCheck;

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->append(TestMiddleware::class); //Global

        $middleware->appendToGroup('check1', [            
            NumCheck::class,
        ]);

        $middleware->appendToGroup('check2', [
            AgeCheck::class,
            CountryCheck::class,            
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
