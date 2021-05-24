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

        return view('chat.index', $data);
    }
}
