@extends('include.layout')
@section('title', 'Login')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
<div class="container">
    <div class="">
        <div class="header">
            <p>Registeration for Riversky</p>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{route('register.post')}}" method="POST">
            @csrf
            <div class="input-box">
                <label for="Username">Username</label>
                <input type="text" class="input-field" name="username" id="username" placeholder="username">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <label for="Email">Email address</label>
                <input type="email" class="input-field" name="email" id="email" placeholder="name@gmail.com">
            </div>
            <div class="input-box">
                <label for="Password">Password</label>
                <input type="password" class="input-field" name="password" id="password" placeholder="password">
                <i class="bx bx-lock"></i>
            </div>
            <div class="input-box">
                <span><a href="{{route('login')}}">saya sudah punya akun</a></span>
            </div>
            <div class="input-box">
                <input type="submit" name="submit" class="input-submit" value="Login">
            </div>
        </form>
    </div>
</div>
@endsection