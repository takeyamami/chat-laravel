@extends('layouts.chatapp')
@section('header')
    @component('components.header')
        @slot('title', 'chat')
        @slot('css', 'chat.css')
    @endcomponent

@endsection

@section('talkTitle', isset($data['selectRoom']->name) ? $data['selectRoom']->name : '---')

@section('list')
    @parent
    @foreach($data['rooms'] as $val)
    <li><a href="/chat/{{$val->rid}}">{{$val->name}}</a></li>
    @endforeach
    <!--
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>hogehoge</li>
    <li>{{$view_message}}</li>
    <li><middleware>google.com</middleware>へのリンク</li>-->
@endsection
@section('content')
    @if (isset($data['selectRoom']->name))
        @each ('components.talk', $data['talk'], 'val')
        @component('components.message_form')
            @slot('rid', $data['selectRoom']->rid)
        @endcomponent
    @else
        <p>ルームを選択してください</p>
    @endif
@endsection
