<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request) {
        return view('chat.index', ['data' => $request->data]);
    }

    /**
     * メッセージ送信
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request) {
        return redirect('/chat/' . $request->rid);
    }
}
