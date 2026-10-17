<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spark Admin - Premium Bootstrap 5 Admin Dashboard Template</title>

  <!-- SEO Optimization -->
  <meta name="description" content="Spark Admin - Premium Bootstrap 5 Admin Dashboard Template">
  <meta name="author" content="Spark Admin Team">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('assets-admin/images/favicon.ico') }}">

  <!-- Local Third-Party Libraries -->
  <link rel="stylesheet" href="{{ asset('assets-admin/libs/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-admin/libs/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-admin/libs/apexcharts/apexcharts.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-admin/libs/flatpickr/flatpickr.min.css') }}">

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
      <span>KANTINKU</span>
    </a>

    <!-- Navigation Menu Wrapper -->
    <div class="flex-grow-1 overflow-y-auto">
      <!-- Group: Menu -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">MENU</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="/Admin" class="sidebar-menu-link active" id="menu-overview" title="Overview">
              <i class="bi bi-grid-fill"></i>
              <span>Dashboard</span>
            </a>
          </li>
          
          <li class="sidebar-menu-item">
            <a href="{{ route('product.index') }}" class="sidebar-menu-link" title="Data Produk">
              <i class="bi bi-box-seam-fill"></i>
              <span>Data Produk</span>
            </a>
          </li>

          <li class="sidebar-menu-item">
            <a href="{{ route('category.index') }}" class="sidebar-menu-link" title="Data Kategori">
              <i class="bi bi-tags-fill"></i>
              <span>Data Kategori</span>
            </a>
          </li>

          <li class="sidebar-menu-item">
            <a href="{{ route('customer.index') }}" class="sidebar-menu-link" title="Data Customer">
              <i class="bi bi-person-fill"></i>
              <span>Data Customer</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Group: Components -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">COMPONENTS</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="tables-basic.html" class="sidebar-menu-link" id="menu-basictables" title="Basic Tables">
              <i class="bi bi-table"></i>
              <span>Basic Tables</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="ui-forms.html" class="sidebar-menu-link" id="menu-uiforms" title="Forms and Input">
              <i class="bi bi-input-cursor-text"></i>
              <span>Forms & Input</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="ui-buttons.html" class="sidebar-menu-link" id="menu-uibuttons" title="Buttons">
              <i class="bi bi-menu-button-wide-fill"></i>
              <span>Buttons & Alerts</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Group: Pages -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">PAGES</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="page-blank.html" class="sidebar-menu-link" id="menu-blankpage" title="Blank Page">
              <i class="bi bi-file-earmark"></i>
              <span>Blank Page</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="page-login.html" class="sidebar-menu-link" id="menu-loginpage" title="Login Page">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Login Screen</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="page-404.html" class="sidebar-menu-link" id="menu-404" title="404 Page">
              <i class="bi bi-slash-circle"></i>
              <span>Error 404</span>
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

        <div class="dropdown ms-2">
          <button class="btn-quick-action dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            id="quick-actions-dropdown">
            <i class="bi bi-plus-lg"></i>
            <span>Create</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-quick-action" aria-labelledby="quick-actions-dropdown">
            <li class="dropdown-header">Quick Action Shortcuts</li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-plus"></i> New Invoice</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus"></i> New User</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-seam"></i> New Product</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> System Settings</a></li>
          </ul>
        </div>
      </div>

      <div class="navbar-search-wrapper">
        <input type="text" class="navbar-search-input" placeholder="Search anything in Spark..." id="main-search">
        <button class="navbar-search-btn" aria-label="Search">
          <i class="bi bi-search"></i>
        </button>
      </div>

      <div class="navbar-actions">
        <button class="navbar-action-btn me-1" aria-label="Toggle Fullscreen" id="btn-fullscreen">
          <i class="bi bi-arrows-fullscreen"></i>
        </button>
        <div class="dropdown">
          <button class="navbar-action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" id="btn-notifications" data-bs-auto-close="outside">
            <i class="bi bi-bell"></i>
            <span class="navbar-action-badge"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-notification p-0"
            aria-labelledby="btn-notifications">
            <div class="notification-header">
              <h6 class="notification-title">Notifications</h6>
              <button class="btn-clear-all" type="button">Mark all read</button>
            </div>
            <div class="notification-list">
              <a href="#" class="notification-item">
                <div class="notification-icon bg-success text-white">
                  <i class="bi bi-wallet2"></i>
                </div>
                <div class="notification-content">
                  <p class="notification-text">New sale received: <strong>$150.00</strong></p>
                  <span class="notification-time">2 mins ago</span>
                </div>
                <span class="notification-unread-dot"></span>
              </a>
              <a href="#" class="notification-item">
                <div class="notification-icon bg-primary text-white">
                  <i class="bi bi-person-plus-fill"></i>
                </div>
                <div class="notification-content">
                  <p class="notification-text">New user registered: <strong>John Doe</strong></p>
                  <span class="notification-time">1 hour ago</span>
                </div>
                <span class="notification-unread-dot"></span>
              </a>
              <a href="#" class="notification-item">
                <div class="notification-icon bg-warning text-dark">
                  <i class="bi bi-box-seam-fill"></i>
                </div>
                <div class="notification-content">
                  <p class="notification-text">Stock running low: <strong>Hoodie</strong></p>
                  <span class="notification-time">3 hours ago</span>
                </div>
              </a>
            </div>
            <a href="#" class="notification-footer">View All Notifications</a>
          </div>
        </div>

        <div class="dropdown ms-2">
          <button class="navbar-profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" id="profile-dropdown">
            <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Profile Image" class="navbar-profile-img">
            <span class="navbar-profile-name d-none d-md-inline">Administrator</span>
            <i class="bi bi-chevron-down navbar-profile-caret"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile" aria-labelledby="profile-dropdown">
            <li class="dropdown-header">Welcome !</li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> My Account</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-lock"></i> Lock Screen</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="page-login.html"><i class="bi bi-box-arrow-right"></i>
                Logout</a></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- END: Top Navbar Component -->

    <!-- START: Dashboard Header Banner -->
    <div class="page-header">
      <div>
        <h1 class="page-title">Dashboard</h1>
        <p class="page-subtitle">An easy way to manage sales with care and precision.</p>
      </div>
      <button class="btn-date-picker" type="button" id="date-picker-trigger">
        <i class="bi bi-calendar4-event"></i>
        <span id="selected-date-range">January 12, 2026 - January 23, 2026</span>
        <i class="bi bi-chevron-down ms-1"></i>
      </button>
    </div>
    <!-- END: Dashboard Header Banner -->

    <!-- START: Top Stats Cards Row -->
    <div class="row g-4 mb-4">
      <!-- Stat Card 1: Green Alert Banner -->
      <div class="col-xl-4 col-md-4">
        <div class="card alert-green-card h-100 mb-0">
          <div class="position-relative z-index-2">
            <span class="alert-green-badge">Update</span>
            <div class="alert-green-date">Feb 14th 2026</div>
            <div class="alert-green-text">Sales revenue increased 40% in 1 week</div>
          </div>
          <a href="#" class="alert-green-link z-index-2" id="alert-link-statistics">
            <span>See Statistics</span>
            <i class="bi bi-arrow-right"></i>
          </a>

          <svg class="alert-green-bg-shape" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(50,50)">
              <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" />
              <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(60)" />
              <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(120)" />
            </g>
          </svg>
        </div>
      </div>

      <!-- Stat Card 2: Net Income -->
      <div class="col-xl-4 col-md-4">
        <div class="card card-stat d-flex flex-column justify-content-between h-100 mb-0">
          <div>
            <div class="card-header">
              <span class="stat-label">Net Income</span>
              <div class="dropdown">
                <button class="card-more-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                  aria-label="More Options" id="btn-more-income">
                  <i class="bi bi-three-dots"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"></i> Refresh</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-arrow-down"></i> Export Report</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-eye-slash"></i> Hide Details</a></li>
                </ul>
              </div>
            </div>
            <div class="stat-value">$196.000</div>
            <div class="trend-badge trend-up">
              <i class="bi bi-arrow-up-right"></i>
              <span>+35% from last month</span>
            </div>
          </div>
          <div class="sparkline-container sparkline-card-footer">
            <div id="income-sparkline"></div>
          </div>
        </div>
      </div>

      <!-- Stat Card 3: Total Return -->
      <div class="col-xl-4 col-md-4">
        <div class="card card-stat d-flex flex-column justify-content-between h-100 mb-0">
          <div>
            <div class="card-header">
              <span class="stat-label">Total Return</span>
              <div class="dropdown">
                <button class="card-more-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                  aria-label="More Options" id="btn-more-return">
                  <i class="bi bi-three-dots"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"></i> Refresh</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-arrow-down"></i> Export Report</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-eye-slash"></i> Hide Details</a></li>
                </ul>
              </div>
            </div>
            <div class="stat-value">$32.000</div>
            <div class="trend-badge trend-down">
              <i class="bi bi-arrow-down-left"></i>
              <span>-24% from last month</span>
            </div>
          </div>
          <div class="sparkline-container sparkline-card-footer">
            <div id="return-sparkline"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Top Stats Cards Row -->

    <!-- START: Middle Area (Revenue Chart & Total View Performance) -->
    <div class="row g-4 mb-4">
      <div class="col-xl-9 col-lg-8">
        <div class="card h-100 mb-0">
          <div class="card-header mb-2">
            <h2 class="card-title">Revenue</h2>
            <div class="d-flex gap-3 align-items-center">
              <div class="chart-legend-item">
                <span class="legend-dot bg-forest-medium"></span>
                <span class="chart-legend-label">Income</span>
              </div>
              <div class="chart-legend-item">
                <span class="legend-dot bg-lime-accent"></span>
                <span class="chart-legend-label">Expenses</span>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-baseline gap-2 mb-3">
            <span class="stat-value-amount">$196.000</span>
            <span class="trend-badge trend-up fs-xs">+35% from last month</span>
          </div>
          <div id="revenue-chart"></div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4">
        <div class="card h-100 d-flex flex-column justify-content-between mb-0">
          <div class="card-header mb-1">
            <h2 class="card-title">Total View Performance</h2>
          </div>
          <div id="views-chart"></div>
          <div class="chart-legends-container">
            <div class="chart-legend-item">
              <span class="legend-dot bg-lime-accent"></span>
              <span class="text-muted-green">View Count</span>
            </div>
            <div class="chart-legend-item">
              <span class="legend-dot bg-forest-medium"></span>
              <span class="text-muted-green">Percentage</span>
            </div>
            <div class="chart-legend-item">
              <span class="legend-dot bg-brand-orange"></span>
              <span class="text-muted-green">Sales</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Middle Area -->

    <!-- START: Bottom Cards Row (Transaction, Product Overview, Promo Banner) -->
    <div class="row g-4">
      <!-- 1. Transaction Card -->
      <div class="col-xl-4 col-lg-6">
        <div class="card h-100 mb-0">
          <div class="card-header mb-3">
            <h2 class="card-title">Transaction</h2>
            <button class="card-more-btn" type="button" aria-label="More Options">
              <i class="bi bi-three-dots"></i>
            </button>
          </div>
          <div class="transaction-list">
            <div class="transaction-item">
              <div class="transaction-icon bg-forest-medium text-white">
                <i class="bi bi-spotify"></i>
              </div>
              <div class="transaction-info">
                <div class="transaction-name text-truncate">Spotify Subscription</div>
                <div class="transaction-date">Feb 14, 2026 • 12:40 PM</div>
              </div>
              <div class="transaction-amount text-dark ms-auto">-$15.00</div>
            </div>

            <div class="transaction-item">
              <div class="transaction-icon bg-forest-medium text-white">
                <i class="bi bi-paypal"></i>
              </div>
              <div class="transaction-info">
                <div class="transaction-name text-truncate">Paypal Transfer</div>
                <div class="transaction-date">Feb 13, 2026 • 08:15 AM</div>
              </div>
              <div class="transaction-amount trend-up ms-auto">+$1,250.00</div>
            </div>

            <div class="transaction-item">
              <div class="transaction-icon bg-forest-medium text-white">
                <i class="bi bi-stripe"></i>
              </div>
              <div class="transaction-info">
                <div class="transaction-name text-truncate">Stripe Payout</div>
                <div class="transaction-date">Feb 11, 2026 • 04:30 PM</div>
              </div>
              <div class="transaction-amount trend-up ms-auto">+$3,400.00</div>
            </div>

            <div class="transaction-item">
              <div class="transaction-icon bg-forest-medium text-white">
                <i class="bi bi-slack"></i>
              </div>
              <div class="transaction-info">
                <div class="transaction-name text-truncate">Slack Pro Workspace</div>
                <div class="transaction-date">Feb 09, 2026 • 09:20 AM</div>
              </div>
              <div class="transaction-amount text-dark ms-auto">-$45.00</div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. Product Overview Card -->
      <div class="col-xl-5 col-lg-6">
        <div class="card h-100 mb-0">
          <div class="card-header mb-3">
            <h2 class="card-title">Product Overview</h2>
            <button class="card-more-btn" type="button" aria-label="More Options">
              <i class="bi bi-three-dots"></i>
            </button>
          </div>

          <div class="progress-container">
            <div class="progress-label-row">
              <span class="progress-label">Product Launched</span>
              <span class="progress-value">233</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-lime-accent w-65" role="progressbar"></div>
            </div>
          </div>

          <div class="progress-container">
            <div class="progress-label-row">
              <span class="progress-label">Ongoing Product</span>
              <span class="progress-value">23</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-lime-accent w-38" role="progressbar"></div>
            </div>
          </div>

          <div class="progress-container">
            <div class="progress-label-row">
              <span class="progress-label">Product Sold</span>
              <span class="progress-value">482</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-lime-accent w-85" role="progressbar"></div>
            </div>
          </div>

          <div class="progress-container">
            <div class="progress-label-row">
              <span class="progress-label">Product Returned</span>
              <span class="progress-value">8</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-brand-orange w-38" role="progressbar"></div>
            </div>
          </div>

          <div class="progress-container">
            <div class="progress-label-row">
              <span class="progress-label">Product In Stock</span>
              <span class="progress-value">1,420</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-lime-accent w-75" role="progressbar"></div>
            </div>
          </div>

          <div class="progress-container mb-0">
            <div class="progress-label-row">
              <span class="progress-label">Pending Shipment</span>
              <span class="progress-value">64</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-lime-accent w-45" role="progressbar"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3. Promo Banner Card -->
      <div class="col-xl-3 col-lg-12">
        <div class="promo-banner-card h-100 mb-0">
          <h3 class="promo-title">Level up your sales managing to the next level.</h3>
          <p class="promo-desc">An easy way to manage sales with care and precision.</p>
          <button class="btn-promo" type="button">Check the updates now</button>

          <svg class="promo-banner-bg-shape" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(50,50)">
              <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" />
              <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(60)" />
              <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(120)" />
            </g>
          </svg>
        </div>
      </div>
    </div>
    <!-- END: Bottom Cards Row -->

    <!-- START: Footer Component -->
    <footer class="footer-custom mt-4">
      <div class="footer-left">
        <span class="footer-logo"><i class="bi bi-asterisk"></i> Spark Admin</span>
        <span class="footer-separator">|</span>
        <span class="footer-copy">© 2026 Made with <i class="bi bi-heart-fill text-danger footer-heart"></i> by Spark Admin • Distributed by ThemeWagon</span>
      </div>
      <div class="footer-right">
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Overview</a></li>
          <li><a href="#" class="footer-link">Statistics</a></li>
          <li><a href="#" class="footer-link">Help & Documentation</a></li>
          <li><a href="#" class="footer-link">Status <span class="status-dot"></span></a></li>
        </ul>
      </div>
    </footer>
    <!-- END: Footer Component -->

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

  <!-- Script Dependencies via CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      
      // 1. Sparkline Chart - Net Income (Garis Hijau)
      const incomeSparklineOptions = {
        series: [{ data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 98, 70, 85] }],
        chart: { type: 'area', height: 50, sparkline: { enabled: true } },
        stroke: { curve: 'smooth', width: 2 },
        colors: ['#22C55E'],
        fill: {
          type: 'gradient',
          gradient: { opacityFrom: 0.3, opacityTo: 0.0 }
        },
        tooltip: { enabled: false }
      };
      if (document.querySelector("#income-sparkline")) {
        new ApexCharts(document.querySelector("#income-sparkline"), incomeSparklineOptions).render();
      }

      // 2. Sparkline Chart - Total Return (Garis Merah)
      const returnSparklineOptions = {
        series: [{ data: [65, 59, 80, 81, 56, 55, 40, 35, 42, 30, 20, 15] }],
        chart: { type: 'area', height: 50, sparkline: { enabled: true } },
        stroke: { curve: 'smooth', width: 2 },
        colors: ['#EF4444'],
        fill: {
          type: 'gradient',
          gradient: { opacityFrom: 0.3, opacityTo: 0.0 }
        },
        tooltip: { enabled: false }
      };
      if (document.querySelector("#return-sparkline")) {
        new ApexCharts(document.querySelector("#return-sparkline"), returnSparklineOptions).render();
      }

      // 3. Bar Chart - Revenue (Batang Hijau Tua & Hijau Muda)
      const revenueChartOptions = {
        series: [
          { name: 'Income', data: [35, 45, 30, 50, 40, 60, 55, 70, 65, 80] },
          { name: 'Expenses', data: [15, 20, 10, 25, 20, 30, 20, 35, 30, 40] }
        ],
        chart: {
          type: 'bar',
          height: 280,
          toolbar: { show: false }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '40%',
            borderRadius: 4
          }
        },
        dataLabels: { enabled: false },
        colors: ['#0ba165', '#6b8f07'],
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
          axisBorder: { show: false },
          axisTicks: { show: false }
        },
        grid: {
          borderColor: '#E9EFEF',
          strokeDashArray: 4
        },
        legend: { show: false }
      };
      if (document.querySelector("#revenue-chart")) {
        new ApexCharts(document.querySelector("#revenue-chart"), revenueChartOptions).render();
      }

      // 4. Donut Chart - Total View Performance
      const viewsChartOptions = {
        series: [45, 35, 20],
        chart: {
          type: 'donut',
          height: 260
        },
        labels: ['View Count', 'Percentage', 'Sales'],
        colors: ['#B4F105', '#072F1F', '#F97316'],
        legend: { show: false },
        dataLabels: { enabled: false },
        plotOptions: {
          pie: {
            donut: {
              size: '75%',
              labels: {
                show: true,
                total: {
                  show: true,
                  label: 'Total Count',
                  formatter: () => '565K'
                }
              }
            }
          }
        }
      };
      if (document.querySelector("#views-chart")) {
        new ApexCharts(document.querySelector("#views-chart"), viewsChartOptions).render();
      }

    });
  </script>
</body>

</html>