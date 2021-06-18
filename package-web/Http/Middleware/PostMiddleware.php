<?php

namespace MyApp\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MyApp\application\Talks\TalkApplicationService;

class PostMiddleware
{
    protected TalkApplicationService $_talkApplicationService;

    public function __construct(TalkApplicationService $talkApplicationService)
    {
        $this->_talkApplicationService = $talkApplicationService;
    }

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

        $this->_talkApplicationService->register($request->rid, $user->uid, $request->message);

        return $next($request);
    }
}
