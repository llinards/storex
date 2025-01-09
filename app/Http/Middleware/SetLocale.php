<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $validLocales = config('app.available_locales');
        $defaultLocale = env('APP_LOCALE');
        $queryLocale = strtolower($request->query('changeLanguage'));

        if ($queryLocale && in_array($queryLocale, $validLocales, true)) {
            $locale = $queryLocale;
        } else {
            $locale = $request->segment(1);

            if (! in_array($locale, $validLocales, true)) {
                return redirect($defaultLocale);
            }
        }

        app()->setLocale($locale);

        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
