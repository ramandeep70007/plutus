<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictRegisterMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->is('register')) {
            return response('Access forbidden', 403); // You can customize the response as needed
        }

        return $next($request);
    }
}
