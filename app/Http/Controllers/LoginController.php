<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

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

    public function action(LoginRequest $request) {

        return view('login.index', ['data' => $request->data]);
    }
}
