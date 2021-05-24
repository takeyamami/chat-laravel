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
    @each ('components.talk', $talk, 'val')

    @include('components.message_form')

@endsection
