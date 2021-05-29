@extends('layouts.loginapp')
@section('header')
    @component('components.header')
        @slot('title', 'login')
        @slot('css', 'login.css')
    @endcomponent

@endsection

@section('content')
@if (count($errors) > 0)
<p class="errorTitle">入力内容に問題があります。</p>
<div class="error">
    <ul>
        @foreach ($errors->all() as $error) 
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
    @include('components.login-component')

@endsection
