<?php

namespace OGame\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * Resolves the locale in priority order — READ ONLY, never writes session or DB:
     * 1. Authenticated user's  users.lang  DB column
     * 2. Session key 'locale'  (written exclusively by LanguageController::switchLang)
     * 3. Accept-Language HTTP header (preferred language from browser)
     * 4. Application default   (config/app.php → fallback_locale)
     *
     * NOTE: Do NOT write to the session here. Fortify regenerates the session during
     * login, so any Session::put() performed in middleware before the regeneration is
     * silently lost, creating an infinite re-read loop and potential redirect instability.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // RULE: this middleware is strictly READ-ONLY.
        // It never calls Session::put(), never writes to DB, and never blocks
        // $next($request). Safe to run on every route including login/register,
        // because all operations below are plain reads with no side-effects.

        $supported = array_keys(config('app.supported_locales', ['en' => 'English']));
        $locale = null;

        // Priority 1 – authenticated user's saved preference in DB.
        // Auth::check() is a read-only call here (no Session::put follows it),
        // so it is safe on POST /login: Fortify's session regeneration happens
        // inside $next($request), after this middleware has already finished.
        if (Auth::check()) {
            $dbLang = Auth::user()->lang ?? null;
            if ($dbLang !== null && in_array($dbLang, $supported, true)) {
                $locale = $dbLang;
            }
        }

        // Priority 2 – explicit user choice stored in session by LanguageController.
        // Uses $request->session() instead of the Session facade so that
        // $request->hasSession() can guard the call safely on stateless contexts.
        if ($locale === null && $request->hasSession() && $request->session()->has('locale')) {
            $sessLocale = $request->session()->get('locale');
            if (in_array($sessLocale, $supported, true)) {
                $locale = $sessLocale;
            }
        }

        // Priority 3 – Accept-Language HTTP header from browser.
        if ($locale === null) {
            $preferred = $request->getPreferredLanguage($supported);
            if ($preferred !== null) {
                $locale = $preferred;
            }
        }

        // Priority 4 – fallback to config default.
        if ($locale === null) {
            $locale = config('app.fallback_locale', 'en');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
