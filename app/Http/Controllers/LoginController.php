<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request) {
        return view('login.index', ['data' => $request->data]);
    }

    public function action(Request $request) {
        $_rule = [
            'email' => 'required|email',
            'password' => 'required|digits_between:8,20'
        ];

        if(! $this->validate($request, $_rule)) {
            view('login.index', ['data' => $request->data]);
        };

        return redirect('/chat/');
    }
}
