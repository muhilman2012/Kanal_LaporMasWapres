<?php

namespace App\Http\Middleware;

use Closure;

class ContentSecurityPolicy
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $csp = "default-src 'self'; frame-src 'self' https://form.jotform.com https://cdn.jotfor.ms https://eu-submit.jotform.com; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jotfor.ms https://www.googletagmanager.com; style-src 'self' 'unsafe-inline' https://cdn.jotfor.ms https://www.googletagmanager.com https://cdn.jsdelivr.net https://fonts.googleapis.com; connect-src 'self' https://form.jotform.com https://cdn.jotfor.ms https://eu-submit.jotform.com; img-src 'self' data: https://cdn.jotfor.ms https://www.jotform.com https://files.jotform.com; font-src 'self' https://cdn.jotfor.ms https://fonts.gstatic.com;";

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}