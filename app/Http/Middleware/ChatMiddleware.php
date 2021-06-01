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
        $loginid = $request->cookie('TKCHTID');
        $loginpw = $request->cookie('TKCHTPW');

        if ($loginid == "" || $loginpw == "") {
            return redirect('/login');
        }

        // 仮データの作成
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

        $response = $next($request);
        $content = $response->content();

        // <middleware>タグに囲まれた文字列を置換
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="https://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);

        return $response;
    }
}
