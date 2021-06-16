<?php

namespace MyApp\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Talk;

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

        $user = DB::table('users')->where('loginid', $loginid)->where('loginpw', $loginpw)->first();

        $talk = new Talk;
        $talk->rid = $request->rid;
        $talk->uid = $user->uid;
        $talk->message = $request->message;
        $talk->save();

        return $next($request);
    }
}