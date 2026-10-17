<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Produk Kantin - Spark Admin</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('assets-admin/images/favicon.ico') }}">

  <!-- Local Third-Party Libraries -->
  <link rel="stylesheet" href="{{ asset('assets-admin/libs/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-admin/libs/bootstrap-icons/bootstrap-icons.css') }}">

  <!-- Main Design System & Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">
</head>

<body>

  <!-- ==========================================
         START: Sidebar Component
         ========================================== -->
  <div class="sidebar-wrapper" id="sidebar">
    <!-- Brand Logo / Identity -->
    <a href="/Admin" class="sidebar-brand">
      <i class="bi bi-asterisk"></i>
      <span>Spark Admin</span>
    </a>

    <!-- Navigation Menu -->
    <div class="flex-grow-1 overflow-y-auto">
      <!-- Group: Menu -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">MENU</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="/Admin" class="sidebar-menu-link" title="Overview">
              <i class="bi bi-grid-fill"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="{{ route('product.index') }}" class="sidebar-menu-link active" title="Data Produk">
              <i class="bi bi-box-seam-fill"></i>
              <span>Data Produk</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Group: Components -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">COMPONENTS</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" title="Basic Tables">
              <i class="bi bi-table"></i>
              <span>Basic Tables</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" title="Forms and Input">
              <i class="bi bi-input-cursor-text"></i>
              <span>Forms & Input</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Sidebar Profile Card -->
    <div class="sidebar-profile">
      <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Administrator" class="sidebar-profile-img"
        onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop'">
      <div class="sidebar-profile-info">
        <div class="sidebar-profile-name">Administrator</div>
        <div class="sidebar-profile-email">admin@email.com</div>
      </div>
    </div>
  </div>
  <!-- ==========================================
         END: Sidebar Component
         ========================================== -->


  <!-- ==========================================
         START: Main Content Area
         ========================================== -->
  <div class="main-wrapper">

    <!-- START: Top Navbar Component -->
    <header class="navbar-custom">
      <div class="navbar-left">
        <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
          id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
          <i class="bi bi-chevron-bar-left"></i>
        </button>
        <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
          <i class="bi bi-list"></i>
        </button>
      </div>

      <div class="navbar-search-wrapper">
        <input type="text" class="navbar-search-input" placeholder="Search product..." id="main-search">
        <button class="navbar-search-btn" aria-label="Search">
          <i class="bi bi-search"></i>
        </button>
      </div>

      <div class="navbar-actions">
        <div class="dropdown ms-2">
          <button class="navbar-profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Profile Image" class="navbar-profile-img">
            <span class="navbar-profile-name d-none d-md-inline">Administrator</span>
          </button>
        </div>
      </div>
    </header>
    <!-- END: Top Navbar Component -->

    <!-- START: Page Header -->
    <div class="page-header">
      <div>
        <h1 class="page-title">Manajemen Produk</h1>
        <p class="page-subtitle">Kelola daftar makanan, minuman, dan stok kantin kamu.</p>
      </div>
      <a href="{{ route('product.create') }}" class="btn btn-primary rounded-pill px-4">
        <i class="bi bi-plus-lg me-1"></i> Tambah Produk
      </a>
    </div>
    <!-- END: Page Header -->

    <!-- START: Alert Flash Data -->
    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <!-- END: Alert Flash Data -->

    <!-- START: Main Card Table -->
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-title mb-0">Daftar Produk Kantin</h2>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th class="ps-4">No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th class="text-end pe-4">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse($products as $index => $item)
                <tr>
                  <td class="ps-4 fw-semibold">{{ $index + 1 }}</td>
<td>
  <div class="fw-bold text-dark">
    {{ $item->name ?? $item->nama_barang ?? '-' }}
  </div>
</td>
<td class="text-success fw-semibold">
  Rp {{ number_format($item->price ?? $item->harga ?? 0, 0, ',', '.') }}
</td>
<td>
  <span class="badge bg-info text-dark">
    {{ $item->stock ?? $item->stok ?? 0 }} item
  </span>
</td>
<td>
  <span class="badge bg-secondary">
    {{ $item->category ?? $item->kategori ?? '-' }}
  </span>
</td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center py-4 text-muted">
                    <i class="bi bi-box-seam fs-2 d-block mb-2"></i>
                    Belum ada data produk tersedia.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- END: Main Card Table -->

    <!-- START: Footer Component -->
    <footer class="footer-custom mt-4">
      <div class="footer-left">
        <span class="footer-logo"><i class="bi bi-asterisk"></i> Spark Admin</span>
        <span class="footer-separator">|</span>
        <span class="footer-copy">© 2026 Spark Admin • Modul Produk Kantin</span>
      </div>
    </footer>
    <!-- END: Footer Component -->

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

  <!-- Script Dependencies via CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>