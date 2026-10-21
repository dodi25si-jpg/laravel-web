<script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById('sidebar');

    // Toggle sidebar (mobile)
    const mobileBtn = document.getElementById('sidebar-toggle');
    if (mobileBtn) mobileBtn.addEventListener('click', () => sidebar.classList.toggle('show'));

    // Minimize sidebar (desktop)
    const desktopBtn = document.getElementById('desktop-sidebar-toggle');
    if (desktopBtn) desktopBtn.addEventListener('click', () => {
      const collapsed = document.body.classList.toggle('sidebar-collapsed');
      const icon = desktopBtn.querySelector('i');
      if (icon) icon.className = collapsed ? 'bi bi-chevron-bar-right' : 'bi bi-chevron-bar-left';
    });

    // Fullscreen
    const fsBtn = document.getElementById('btn-fullscreen');
    if (fsBtn) fsBtn.addEventListener('click', () => {
      if (!document.fullscreenElement) document.documentElement.requestFullscreen();
      else document.exitFullscreen();
    });

    // Live search pada tabel (baris dengan class .data-row)
    const search = document.getElementById('main-search');
    const rows = document.querySelectorAll('#data-table .data-row');
    const noResult = document.getElementById('no-result-row');
    if (search && rows.length) {
      search.addEventListener('input', function () {
        const q = this.value.toLowerCase().trim();
        let visible = 0;
        rows.forEach(row => {
          const show = row.textContent.toLowerCase().includes(q);
          row.classList.toggle('d-none', !show);
          if (show) visible++;
        });
        if (noResult) noResult.classList.toggle('d-none', visible !== 0);
      });
    }
  });
</script>

{{-- JS tambahan per halaman: @push('scripts') ... @endpush --}}
@stack('scripts')
