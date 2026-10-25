@extends('layouts.admin.app')
@section('title', 'Tambah User')
@section('page-title', 'Tambah User')
@section('page-subtitle', 'Isi form di bawah ini untuk menambahkan user baru.')
@section('content')
<div class="card mb-4 col-md-8">
  <div class="card-body">
    <form action="{{ route('user.store') }}" method="POST">
      @csrf

      @include('admin.user._form')

      <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan User</button>
      </div>
    </form>
  </div>
</div>
@endsection
