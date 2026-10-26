@extends('layouts.guest.app')

@section('title', 'Login')

@section('content')
<section class="auth-wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="auth-card">
          <h2 class="mb-1">Login</h2>
          <p class="text-muted mb-4">Masuk untuk melanjutkan ke dashboard.</p>

          <form action="{{ route('auth.login') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="username" class="form-label fw-semibold">Username</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" id="username" name="username" value="{{ old('username') }}"
                       class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan username" autofocus>
              </div>
              @error('username') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
              <label for="password" class="form-label fw-semibold">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" id="password" name="password"
                       class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password">
              </div>
              @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-auth w-100">Masuk</button>
          </form>

          <p class="text-center text-muted small mt-4 mb-0">
            Belum punya akun? <a href="{{ url('/register') }}" class="fw-semibold text-decoration-none">Daftar di sini</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
