@extends('layouts.chatapp')
@section('header')
    @component('components.header')
        @slot('title', 'chat')
        @slot('css', 'chat.css')
    @endcomponent

@endsection

@section('talkTitle', isset($data['selectRoom']->name) ? $data['selectRoom']->name : '---')
@section('username', $data['user']->name)
@section('list')
    @parent
    @foreach($data['rooms'] as $val)
    @if (isset($data['selectRoom']->rid) && $data['selectRoom']->rid == $val->rid)
    <li class="text selected"><a href="/chat/{{$val->rid}}">{{$val->name}}</a></li>
    @else
    <li class="text"><a href="/chat/{{$val->rid}}">{{$val->name}}</a></li>
    @endif
    @endforeach
@endsection
@section('content')
    @if (isset($data['selectRoom']->rid))
        @each ('components.talk', $data['talk'], 'val')
        @component('components.message_form')
            @slot('rid', $data['selectRoom']->rid)
        @endcomponent
    @else
        <p>ルームを選択してください</p>
    @endif
@endsection
