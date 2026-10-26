<link rel="icon" type="image/png" href="{{ asset('assets-admin/images/favicon.ico') }}">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Bootstrap 5 & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Custom CSS Guest -->
<link rel="stylesheet" href="{{ asset('assets-guest/css/main.css') }}">

<style>
  .auth-wrapper { min-height: calc(100vh - 170px); display: flex; align-items: center; padding: 3rem 0; background: var(--bg-light); }
  .auth-card { background: #fff; border: 1px solid var(--border-color); border-radius: 20px; padding: 2.25rem; box-shadow: 0 10px 30px rgba(15, 23, 42, .06); }
  .auth-card h2 { font-weight: 800; color: var(--dark-color); }
  .auth-card .form-control { border-radius: 12px; padding: .7rem 1rem; }
  .auth-card .input-group-text { border-radius: 12px 0 0 12px; background: var(--bg-light); }
  .auth-card .input-group .form-control { border-radius: 0 12px 12px 0; }
  .btn-auth { background: var(--primary-color); color: #fff; font-weight: 600; border-radius: 50px; padding: .75rem; }
  .btn-auth:hover { background: var(--primary-hover); color: #fff; }
</style>

@stack('styles')
