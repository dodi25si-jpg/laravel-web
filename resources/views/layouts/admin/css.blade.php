<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('assets-admin/images/favicon.ico') }}">

<!-- Local Third-Party Libraries -->
<link rel="stylesheet" href="{{ asset('assets-admin/libs/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets-admin/libs/bootstrap-icons/bootstrap-icons.css') }}">

<!-- Main Design System & Custom Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">

<!-- Fallback toggle sidebar (mobile & minimize desktop) -->
<style>
  @media (max-width: 1199.98px) {
    .sidebar-wrapper { transition: transform .3s ease; }
    .sidebar-wrapper.show { transform: translateX(0) !important; }
  }
  @media (min-width: 1200px) {
    .sidebar-wrapper { transition: transform .3s ease; }
    .main-wrapper { transition: margin-left .3s ease; }
    body.sidebar-collapsed .sidebar-wrapper { transform: translateX(-100%); }
    body.sidebar-collapsed .main-wrapper { margin-left: 0 !important; }
  }
</style>

{{-- CSS tambahan per halaman: @push('styles') ... @endpush --}}
@stack('styles')
