<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostMiddleware
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

        if ($request->message == "") {
            return $next($request); // メッセージがなければ、何もしない
        }

        $param = [
            'id' => $loginid,
            'pw' => $loginpw,
        ];

        $user = DB::table('UserData')->where('loginid', $loginid)->where('loginpw', $loginpw)->first();

        $talkParam = [
            "rid" => $request->rid, 
            "uid" => $user->uid, 
            "message" => $request->message, 
            "regist_dt" => date("Y/m/d H:i:s"),
        ];
        // トークデータを登録
        DB::table("TalkData")->insert($talkParam);

        return $next($request);
    }
}
