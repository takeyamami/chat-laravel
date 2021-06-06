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

        $users = DB::select('SELECT * FROM UserData WHERE loginid=:id AND loginpw=:pw', $param);

        $talkParam = [
            "rid" => $request->rid, 
            "uid" => $users[0]->uid, 
            "message" => $request->message, 
            "regist_dt" => date("Y/m/d H:i:s"),
        ];
        // トークデータを登録
        DB::insert("INSERT INTO TalkData (rid, uid, message, regist_dt) VALUES (:rid, :uid, :message, :regist_dt)", $talkParam);

        return $next($request);
    }
}
