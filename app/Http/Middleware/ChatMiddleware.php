<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChatMiddleware
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
        $userID = 1;
        $talk = [
            [
            'userID' => 1,
            'msg' => 'こんにちは',
            'type' => 1,
            ],
            [
            'userID' => 2,
            'msg' => '初めまして、こんにちは',
            'type' => 2,
            ],
            [
            'userID' => 1,
            'msg' => 'いい天気ですね',
            'type' => 1,
            ],
        ];
        $data = ['userID'=> $userID, 'talk' => $talk];

        $request->merge(['data' => $data]);

        return $next($request);
    }
}
