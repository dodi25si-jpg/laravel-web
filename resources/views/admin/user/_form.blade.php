{{--
  Field form User, dipakai bersama oleh create.blade.php dan edit.blade.php.
  Variabel opsional: $dataUser (hanya ada saat edit).
  Password tidak pernah di-repopulate (old) demi keamanan.
--}}
@php($isEdit = isset($dataUser))

<div class="mb-3">
  <label for="name" class="form-label fw-bold">Name</label>
  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
    value="{{ old('name', $dataUser->name ?? '') }}" placeholder="Nama lengkap">
  @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="email" class="form-label fw-bold">Email</label>
  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
    value="{{ old('email', $dataUser->email ?? '') }}" placeholder="nama@email.com">
  @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="row">
  <div class="col-md-6 mb-3">
    <label for="password" class="form-label fw-bold">Password</label>
    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"
      placeholder="{{ $isEdit ? 'Kosongkan jika tidak diubah' : 'Minimal 8 karakter' }}" autocomplete="new-password">
    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
    @if ($isEdit)
      <div class="form-text">Kosongkan jika tidak ingin mengganti password.</div>
    @endif
  </div>
  <div class="col-md-6 mb-3">
    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
      placeholder="Ulangi password" autocomplete="new-password">
  </div>
</div>
