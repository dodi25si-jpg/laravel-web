<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') - KANTINKU</title>

  {{-- start css --}}
  @include('layouts.admin.css')
  {{-- end css --}}
</head>

<body>

  {{-- start sidebar --}}
  @include('layouts.admin.sidebar')
  {{-- end sidebar --}}

  <div class="main-wrapper">

    {{-- start header --}}
    @include('layouts.admin.header')
    {{-- end header --}}

    {{-- start page header --}}
    <div class="page-header">
      <div>
        <h1 class="page-title">@yield('page-title')</h1>
        <p class="page-subtitle">@yield('page-subtitle')</p>
      </div>
      @yield('page-action')
    </div>
    {{-- end page header --}}

    {{-- start flash data (success / error / validasi) --}}
    @include('layouts.admin.alert')
    {{-- end flash data --}}

    {{-- start main content --}}
    @yield('content')
    {{-- end main content --}}

    {{-- start footer --}}
    @include('layouts.admin.footer')
    {{-- end footer --}}

  </div>

  {{-- start js --}}
  @include('layouts.admin.js')
  {{-- end js --}}
</body>

</html>
