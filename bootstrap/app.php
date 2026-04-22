<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use OGame\Http\Middleware\Admin;
use OGame\Http\Middleware\CheckBanned;
use OGame\Http\Middleware\CheckFirstLogin;
use OGame\Http\Middleware\DebugHeaders;
use OGame\Http\Middleware\GlobalGame;
use OGame\Http\Middleware\Locale;
use OGame\Http\Middleware\ServerTiming;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withBroadcasting(
        __DIR__.'/../routes/channels.php',
        ['middleware' => ['web', 'auth']],
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->prepend(ServerTiming::class);
        // Locale must be APPENDED (not prepended) to the web group so that it executes
        // after StartSession. Prepending would place it before StartSession, making
        // $request->hasSession() return false and breaking session-based locale reading.
        // Appending still guarantees the locale is set before any route-specific middleware
        // (auth, globalgame, firstlogin) runs.
        $middleware->web(append: [Locale::class]);
        $middleware->alias([
            'globalgame' => GlobalGame::class,
            'locale' => Locale::class,
            'admin' => Admin::class,
            'firstlogin' => CheckFirstLogin::class,
            'banned' => CheckBanned::class,
        ]);

        // Task 013: Guest redirect diagnostic
        $middleware->redirectGuestsTo(function ($request) {
            $diag = [
                'at' => now()->toIso8601String(),
                'path' => $request->path(),
                'has_session_cookie' => $request->cookies->has('ogamex-session'),
                'session_id_in_request' => optional($request->session())->getId(),
                'auth_check' => auth()->check(),
                'auth_id' => auth()->id(),
                'cookie_names' => array_keys($request->cookies->all()),
                'user_agent' => substr((string) $request->header('User-Agent'), 0, 120),
                'xf_proto' => $request->header('X-Forwarded-Proto'),
                'is_secure' => $request->isSecure(),
            ];
            session()->flash('debug_auth_redirect', $diag);
            return '/login';
        });

        // Task 013: X-Debug response headers
        $middleware->append(DebugHeaders::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
    })
    ->create();
