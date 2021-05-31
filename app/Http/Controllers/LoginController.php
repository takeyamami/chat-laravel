<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request) 
    {
        return view('login.index', ['data' => $request->data]);
    }

    public function action(Request $request) 
    {
        $rules = [
            'email' => 'required|email|myemail',
            'password' => 'required|digits_between:8,20'
        ];

        $messages = [
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'email.myemail' => '不適切な文字列が含まれています。',
            'password.required' => 'パスワードは必須です。',
            'password.digits_between' => 'パスワードは8文字以上、20文字以下で入力してください。'
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        }

        return redirect('/chat');
    }
}
