<?php

namespace MyApp\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->cookie('TKCHTID', hash('sha256', $request->email));
        $response->cookie('TKCHTPW', hash('sha256', $request->password));

        return $response;
    }
}
