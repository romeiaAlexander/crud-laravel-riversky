@extends('include.layout')
@section('title', 'Login')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
<div class="container">
    <div class="box">
        <div class="header">
            <header><img src="{{ asset('/assets/images/logo4.png') }}" alt="logo"></header>
            <p>Welcome to Riversky</p>
        </div>
        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error')}}
            </div>
        @endif
        <form action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="input-box">
                <label for="Username">Username</label>
                <input type="text" class="input-field" name="username" id="username">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <label for="pass">Password</label>
                <input type="password" class="input-field" name="password" id="password">
                <i class="bx bx-lock"></i>
            </div>
            <div class="input-box">
                <span>Belum punya akun? <a href="{{route('register')}}">register</a></span>
            </div>
            <div class="input-box">
                <input type="submit" name="submit" class="input-submit" value="Login">
            </div>
        </form>
    </div>
</div>
@endsection