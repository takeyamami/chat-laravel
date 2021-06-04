<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // ログイン情報がない
        if ($loginid == "" || $loginpw == "") {
            return redirect('/login');
        }

        $param = [
            'id' => $loginid,
            'pw' => $loginpw,
        ];

        $users = DB::select('SELECT * FROM UserData WHERE loginid=:id AND loginpw=:pw', $param);

        // 該当するユーザーが存在しない
        if(isset($users[0])){
            return redirect('/login');
        }

        $rooms = DB::select('SELECT r.rid, r.name FROM RoomData r INNER JOIN RoomMemberData rm ON r.rid = rm.rid WHERE rm.uid=:uid' , ['uid' => $users[0]->uid]);
        $selectRoom = [];
        $talk = [];
        if (isset($request->rid)) {
            $selectRoom = DB::select('SELECT * FROM RoomData WHERE rid=:rid' , ['rid' => $request->rid])[0];
            $talk = DB::select('SELECT t.*, (CASE WHEN t.uid = :uid THEN 1 ELSE 2 END) type, u.name username FROM TalkData t INNER JOIN UserData u ON t.uid = u.uid WHERE rid=:rid' , ['rid' => $request->rid, 'uid' => $users[0]->uid]);
        }
        $data = ['user'=> $users[0], 'talk' => $talk, 'rooms' => $rooms, 'selectRoom' => $selectRoom];
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
