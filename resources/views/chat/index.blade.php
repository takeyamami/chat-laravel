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

    @component('components.talk')
        @slot('talkPosition')
        {{$talkPosition}}
        @endslot
        
        @slot('msg')
        {{$val['msg']}}
        @endslot
    @endcomponent

    @endforeach

    @component('components.message_form')
    @endcomponent

@endsection
