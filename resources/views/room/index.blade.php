@extends('layouts.roomapp')
@section('header')
    @component('components.header')
        @slot('title', 'create room')
        @slot('css', 'room.css')
    @endcomponent

@endsection

@section('content')
@if (isset($msg))
<p class="errorTitle">{{$msg}}</p>
@endif
@if (count($errors) > 0)
<p class="errorTitle">入力内容に問題があります。</p>
@endif
    @include('components.room_form')

@endsection
