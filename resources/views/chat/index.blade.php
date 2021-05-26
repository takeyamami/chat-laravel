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
    <li>{{$view_message}}</li>
    <li><middleware>google.com</middleware>へのリンク</li>
@endsection
@section('content')
    @each ('components.talk', $data['talk'], 'val')

    @include('components.message_form')

@endsection
