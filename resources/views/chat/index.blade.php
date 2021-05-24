@extends('layouts.chatapp')

@section('title', 'chat')
@section('list')
    @parent
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
@endsection
@section('content')
            @foreach ($talk as $val)
            @php
            $talkPosition = $userID == $val['userID'] ? 'talk-left' : 'talk-right';
            @endphp
            <div class="talk">
                <div class="{{$talkPosition}}">
                    <p>{{$val['msg']}}</p>
                </div>
            </div>
            @endforeach
            <form method="POST" action="/post">
                <div id="form">
                    {{ csrf_field() }}
                    <textarea class="message" name="message" rows="2" cols="100"></textarea>
                    <button class="submitBtn" type="submit">送信</button>
                </div>
            </form>
@endsection
