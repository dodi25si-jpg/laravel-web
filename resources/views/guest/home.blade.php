@extends('layouts.guest.app')

@section('title', 'Home')

@section('content')
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <span class="hero-badge">
            <i class="bi bi-stars"></i> Selamat Datang di kantinku
          </span>
          <h1 class="hero-title">Selamat Menikmati Makanan Lezat</h1>
          <p class="hero-desc">
            Platform terintegrasi untuk membantu mengelola data, memantau analitik secara terpusat, dan mempercepat pekerjaan tim kamu secara modern.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="{{ url('/auth') }}" class="btn btn-pill-primary px-4 py-3">
              Mulai Sekarang <i class="bi bi-arrow-right ms-1"></i>
            </a>
            <a href="#fitur" class="btn btn-pill-outline px-4 py-3">Pelajari Fitur</a>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="hero-img-card">
            <img src="{{ asset('assets-admin/images/kantinku.png') }}" alt="Kantinku Preview" onerror="this.src='https://cdn-icons-png.flaticon.com/512/562/562678.png'">
            <h5 class="fw-bold text-dark mb-1">Kantinku</h5>
            <p class="text-muted small mb-0">Sistem Manajemen Terintegrasi & Real-time</p>
          </div>
        </div>
      </div>

      <!-- Quick Stats Bar -->
      <div class="stats-container">
        <div class="row text-center g-4">
          <div class="col-md-4 border-end-md">
            <div class="stat-item-number">99.9%</div>
            <p class="stat-item-label">Sistem Uptime & Respon Cepat</p>
          </div>
          <div class="col-md-4 border-end-md">
            <div class="stat-item-number">10k+</div>
            <p class="stat-item-label">Transaksi Terproses Per Bulan</p>
          </div>
          <div class="col-md-4">
            <div class="stat-item-number">4.9 / 5.0</div>
            <p class="stat-item-label">Tingkat Kepuasan Pengguna</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section" id="fitur">
    <div class="container">
      <div class="text-center section-header">
        <h2 class="section-title">Layanan & Fitur Unggulan</h2>
        <p class="section-subtitle">Temukan berbagai kemudahan pengolahan data yang kami sediakan untuk kamu</p>
      </div>

      <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-md-4">
          <div class="feature-card">
            <div class="feature-icon-box icon-blue">
              <i class="bi bi-speedometer2"></i>
            </div>
            <h3 class="feature-card-title">Dashboard Analitik</h3>
            <p class="feature-card-desc">
              Pantau perkembangan statistik dan grafik transaksi secara real-time melalui visualisasi yang interaktif.
            </p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
          <div class="feature-card">
            <div class="feature-icon-box icon-green">
              <i class="bi bi-shield-check"></i>
            </div>
            <h3 class="feature-card-title">Keamanan Terjamin</h3>
            <p class="feature-card-desc">
              Sistem perlindungan enkripsi data yang kuat untuk menjamin seluruh informasi pengguna tetap aman.
            </p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
          <div class="feature-card">
            <div class="feature-icon-box icon-orange">
              <i class="bi bi-phone"></i>
            </div>
            <h3 class="feature-card-title">Desain Responsif</h3>
            <p class="feature-card-desc">
              Dapat diakses dengan lancar dan nyaman melalui perangkat smartphone, tablet, maupun desktop PC.
            </p>
          </div>
        </div>
      </div>

      <!-- CTA Card Banner -->
      <div class="cta-banner mt-5 text-center" id="tentang">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h3 class="fw-bold mb-3">Siap Tingkatkan Efisiensi Kerja Kamu?</h3>
            <p class="opacity-75 mb-4">Masuk ke Portal Administrator sekarang untuk mengelola data dan memantau performa bisnis secara menyeluruh.</p>
            <a href="{{ url('/auth') }}" class="btn btn-pill-primary px-5 py-3">Masuk Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
