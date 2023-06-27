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
        @forelse ($mahasiswa as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->kelamin }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit',  $row->id) }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMahasiswa">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $row->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No records found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
