<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogoutMiddleware
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

        // Cookie情報を削除
        setcookie('TKCHTID');
        setcookie('TKCHTPW');

        return $response;
    }
}
