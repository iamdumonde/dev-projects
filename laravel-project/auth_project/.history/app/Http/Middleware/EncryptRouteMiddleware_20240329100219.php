<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EncryptRouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->route()->setParameter('id', encrypt($request->route('id')));
        $encrypted = encrypt($request->path());
        $request->merge(["path" => $encrypted]);
        dd($request->path());
        return $next($request);
    }
}
