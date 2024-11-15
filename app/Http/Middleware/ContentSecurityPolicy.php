<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Set Content Security Policy header
        $response->headers->set('Content-Security-Policy', "default-src 'self'; img-src 'self' https://lapormaswapres.id/; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline';");

        return $response;
    }
}
