@extends('include.layout')
@section('title', 'CRUD')
@section('content')
@include('include.navigasi')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Product</h1>
    <!-- Button to trigger the modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahMahasiswa">
            Add Mahasiswa
        </button>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelamin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>



@endsection