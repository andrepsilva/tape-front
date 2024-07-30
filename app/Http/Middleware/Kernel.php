<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Outros middleware globais...
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Outros middleware do grupo 'web'...
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // Middleware CSRF...
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // Middleware de autenticação da aplicação...
            \App\Http\Middleware\Authenticate::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Outros middleware de rota...
        'auth' => \App\Http\Middleware\Authenticate::class,
    ];
}
