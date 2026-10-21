<div class="sidebar-wrapper" id="sidebar">
  <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
    <span>KANTINKU</span>
  </a>

  <div class="flex-grow-1 overflow-y-auto">
    <div class="sidebar-menu-section">
      <div class="sidebar-menu-title">MENU</div>
      <ul class="sidebar-menu-list">
        <li class="sidebar-menu-item">
          <a href="{{ route('admin.dashboard') }}"
            class="sidebar-menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" title="Dashboard">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="{{ route('product.index') }}"
            class="sidebar-menu-link {{ request()->routeIs('product.*') ? 'active' : '' }}" title="Data Produk">
            <i class="bi bi-box-seam-fill"></i>
            <span>Data Produk</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="{{ route('category.index') }}"
            class="sidebar-menu-link {{ request()->routeIs('category.*') ? 'active' : '' }}" title="Data Kategori">
            <i class="bi bi-tags-fill"></i>
            <span>Data Kategori</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="{{ route('customer.index') }}"
            class="sidebar-menu-link {{ request()->routeIs('customer.*') ? 'active' : '' }}" title="Data Customer">
            <i class="bi bi-person-fill"></i>
            <span>Data Customer</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="{{ route('user.index') }}"
            class="sidebar-menu-link {{ request()->routeIs('user.*') ? 'active' : '' }}" title="Data User">
            <i class="bi bi-people-fill"></i>
            <span>Data User</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="sidebar-profile">
    <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Administrator" class="sidebar-profile-img"
      onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop'">
    <div class="sidebar-profile-info">
      <div class="sidebar-profile-name">Administrator</div>
      <div class="sidebar-profile-email">admin@email.com</div>
    </div>
  </div>
</div>
