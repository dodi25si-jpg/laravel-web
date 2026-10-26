@extends('layouts.guest.app')

@section('title', 'Register')

@section('content')
<section class="auth-wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-5">
        <div class="auth-card">
          <h2 class="mb-1">Register</h2>
          <p class="text-muted mb-4">Buat akun baru untuk mulai menggunakan Kantinku.</p>

          <form action="{{ route('auth.register') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Name</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                       class="form-control @error('name') is-invalid @enderror" placeholder="Nama lengkap" autofocus>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror" placeholder="nama@email.com">
              </div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" id="password" name="password"
                       class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter">
              </div>
            </div>

            <div class="mb-4">
              <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="form-control" placeholder="Ulangi password">
              </div>
            </div>

            <button type="submit" class="btn btn-auth w-100">Daftar</button>
          </form>

          <p class="text-center text-muted small mt-4 mb-0">
            Sudah punya akun? <a href="{{ url('/auth') }}" class="fw-semibold text-decoration-none">Login di sini</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
