@extends('layouts.admin.app')

@section('title', 'Edit User')
@section('page-title', 'Edit User')
@section('page-subtitle', 'Ubah data user lalu simpan perubahan.')

@section('content')
<div class="card mb-4 col-md-8">
  <div class="card-body">
    <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.user._form')

      <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-info">Simpan Perubahan</button>
      </div>
    </form>
  </div>
</div>
@endsection
