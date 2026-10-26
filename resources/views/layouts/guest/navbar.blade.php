<nav class="navbar navbar-expand-lg navbar-guest sticky-top">
  <div class="container">
    <a class="brand-logo" href="{{ url('/') }}">
      <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Kantinku Logo"
           onerror="this.src='https://cdn-icons-png.flaticon.com/512/562/562678.png'">
      <span>Kantinku</span>
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->is('auth') ? 'active' : '' }}" href="{{ url('/auth') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->is('register') ? 'active' : '' }}" href="{{ url('/register') }}">Register</a>
        </li>
      </ul>

      <div class="d-flex align-items-center gap-2">
        <a href="{{ url('/auth') }}" class="btn btn-outline-primary rounded-pill px-4">Masuk</a>
        <a href="{{ url('/register') }}" class="btn btn-primary rounded-pill px-4">Daftar Akun</a>
      </div>
    </div>
  </div>
</nav>
