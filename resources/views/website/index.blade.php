@extends('layouts.website')
@section('content')
    <a href="{{ route('login', []) }}">
        <h1>login</h1>
    </a>
    <a href="{{ route('register', []) }}">
        <h1>register</h1>
    </a>
    <a href="{{ route('logout', []) }}">
        <h1>logout</h1>
    </a>
    @auth
        you are {{ auth()->user()->role }}
    @endauth
@endsection
