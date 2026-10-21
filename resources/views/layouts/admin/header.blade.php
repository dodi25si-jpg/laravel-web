<header class="navbar-custom">
  <div class="navbar-left">
    <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
      id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
      <i class="bi bi-chevron-bar-left"></i>
    </button>
    <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
      <i class="bi bi-list"></i>
    </button>

    <div class="dropdown ms-2">
      <button class="btn-quick-action dropdown-toggle" type="button" data-bs-toggle="dropdown"
        aria-expanded="false" id="quick-actions-dropdown">
        <i class="bi bi-plus-lg"></i>
        <span>Create</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-quick-action" aria-labelledby="quick-actions-dropdown">
        <li class="dropdown-header">Quick Action Shortcuts</li>
        <li><a class="dropdown-item" href="{{ route('product.create') }}"><i class="bi bi-box-seam"></i> New Product</a></li>
        <li><a class="dropdown-item" href="{{ route('category.create') }}"><i class="bi bi-tag"></i> New Category</a></li>
        <li><a class="dropdown-item" href="{{ route('customer.create') }}"><i class="bi bi-person-plus"></i> New Customer</a></li>
        <li><a class="dropdown-item" href="{{ route('user.create') }}"><i class="bi bi-person-gear"></i> New User</a></li>
      </ul>
    </div>
  </div>

  <div class="navbar-search-wrapper">
    <input type="text" class="navbar-search-input" placeholder="Cari data di tabel..." id="main-search">
    <button class="navbar-search-btn" aria-label="Search" type="button">
      <i class="bi bi-search"></i>
    </button>
  </div>

  <div class="navbar-actions">
    <button class="navbar-action-btn me-1" aria-label="Toggle Fullscreen" id="btn-fullscreen" type="button">
      <i class="bi bi-arrows-fullscreen"></i>
    </button>

    <div class="dropdown ms-2">
      <button class="navbar-profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
        aria-expanded="false" id="profile-dropdown">
        <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Profile Image" class="navbar-profile-img">
        <span class="navbar-profile-name d-none d-md-inline">Administrator</span>
        <i class="bi bi-chevron-down navbar-profile-caret"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile" aria-labelledby="profile-dropdown">
        <li class="dropdown-header">Welcome !</li>
        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"><i class="bi bi-grid"></i> Dashboard</a></li>
      </ul>
    </div>
  </div>
</header>
