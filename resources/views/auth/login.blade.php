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
        <form action="" method="post">
            <div class="input-box">
                <label for="Username">Username</label>
                <input type="text" class="input-field" name="username" id="username" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <label for="pass">Password</label>
                <input type="password" class="input-field" name="password" id="password" required>
                <i class="bx bx-lock"></i>
            </div>
            <div class="input-box">
                <input type="submit" name="submit" class="input-submit" value="Login">
            </div>
        </form>
    </div>
</div>
@endsection