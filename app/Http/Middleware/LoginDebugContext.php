<?php

namespace OGame\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class LoginDebugContext
{
    public function handle(Request $request, Closure $next)
    {
        $id = (string) Str::uuid();
        $request->attributes->set('debug_request_id', $id);

        Log::channel('login_debug')->info('request_in', [
            'request_id' => $id,
            'method' => $request->method(),
            'path' => $request->path(),
            'ip' => $request->ip(),
            'ua' => substr((string) $request->header('User-Agent'), 0, 120),
            'xf_proto' => $request->header('X-Forwarded-Proto'),
            'is_secure' => $request->isSecure(),
            'has_session_cookie' => $request->cookies->has('ogamex-session'),
            'cookie_names' => array_keys($request->cookies->all()),
            'referer' => $request->header('Referer'),
        ]);

        $response = $next($request);

        try {
            $response->headers->set('X-Debug-Request-Id', $id);
            Log::channel('login_debug')->info('request_out', [
                'request_id' => $id,
                'status' => $response->getStatusCode(),
                'location' => $response->headers->get('Location'),
                'session_id' => optional($request->session())->getId(),
                'auth_check' => auth()->check(),
                'auth_id' => auth()->id(),
                'set_cookie_count' => count($response->headers->all('Set-Cookie') ?? []),
            ]);
        } catch (\Throwable $e) {
            Log::channel('login_debug')->error('request_out_error', [
                'request_id' => $id,
                'error' => $e->getMessage(),
            ]);
        }

        return $response;
    }
}
