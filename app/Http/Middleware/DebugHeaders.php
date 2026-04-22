<?php

namespace OGame\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Task 013: Temporary middleware for login/auth diagnostics
 * Adds X-Debug-* headers to all responses for browser Network tab inspection
 */
class DebugHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        try {
            $sessionId = '-';
            $authCheck = '0';
            $authId = '-';

            if ($request->hasSession()) {
                $sessionId = $request->session()->getId() ?: '-';
            }

            try {
                $authCheck = auth()->check() ? '1' : '0';
                $authId = (string) (auth()->id() ?? '-');
            } catch (\Throwable $e) {
                // Ignore auth errors during response phase
            }

            $response->headers->set('X-Debug-Session-Id', $sessionId);
            $response->headers->set('X-Debug-Auth-Check', $authCheck);
            $response->headers->set('X-Debug-Auth-Id', $authId);
            $response->headers->set('X-Debug-Has-Session-Cookie', $request->cookies->has('ogamex-session') ? '1' : '0');
            $response->headers->set('X-Debug-Is-Secure', $request->isSecure() ? '1' : '0');
            $response->headers->set('X-Debug-Xf-Proto', (string) $request->header('X-Forwarded-Proto', '-'));
        } catch (\Throwable $e) {
            $response->headers->set('X-Debug-Error', substr($e->getMessage(), 0, 80));
        }

        return $response;
    }
}
