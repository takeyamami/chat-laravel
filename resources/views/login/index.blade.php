@extends('layouts.loginapp')
@section('header')
    @component('components.header')
        @slot('title', 'login')
        @slot('css', 'login.css')
    @endcomponent

@endsection

@section('content')
    @include('components.login-component')

@endsection
