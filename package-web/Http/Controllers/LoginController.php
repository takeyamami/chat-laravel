<?php

namespace MyApp\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'password' => 'required|digits_between:6,20'
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

        $param = [
            'id' => hash('sha256', $request->email),
            'pw' => hash('sha256', $request->password),
        ];

        $items = DB::select('SELECT * FROM users WHERE loginid=:id AND loginpw=:pw', $param);

        if(count($items) == 0) {
            return view('login.index', ['msg' => '未登録のユーザーです。']);
        }

        return redirect('/chat/');
    }
}
