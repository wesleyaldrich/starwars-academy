<?php

use App\Http\Middleware\HasHeroMiddleware;
use App\Http\Middleware\SetLanguageMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('web', [
            SetLanguageMiddleware::class
        ]);

        $middleware->alias([
            'hero' => HasHeroMiddleware::class
        ]);

        $middleware->group('app', [
            'auth',
            'hero'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
