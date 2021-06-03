@extends('layouts.loginapp')
@section('header')
    @component('components.header')
        @slot('title', 'login')
        @slot('css', 'login.css')
    @endcomponent

@endsection

@section('content')
@if (isset($msg))
<p class="errorTitle">{{$msg}}</p>
@endif
@if (count($errors) > 0)
<p class="errorTitle">入力内容に問題があります。</p>
@endif
    @include('components.login_component')

@endsection
