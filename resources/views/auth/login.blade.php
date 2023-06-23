@extends('include.layout')
@section('title', 'Login')
@section('content')
    <div class="container p-5">
      <form class="ms-auto me-auto" style="width: 500px">
        <div class="mb-3">
          <label for="exampleInputUsername" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword">
        </div>
        <div class="mb-3">
          <a href="#">Apakah anda sudah mempunyai akun?</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection