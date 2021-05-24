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

        @include('components.talk', ['talkPosition' => $talkPosition, 'msg' => $val['msg']])

    @endforeach

    @include('components.message_form')

@endsection
