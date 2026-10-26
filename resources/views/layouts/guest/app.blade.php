<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Welcome') - Kantinku</title>

  {{-- start css --}}
  @include('layouts.guest.css')
  {{-- end css --}}
</head>

<body>

  {{-- start navbar --}}
  @include('layouts.guest.navbar')
  {{-- end navbar --}}

  {{-- start flash data (success / error / validasi) --}}
  @include('layouts.guest.alert')
  {{-- end flash data --}}

  {{-- start main content --}}
  @yield('content')
  {{-- end main content --}}

  {{-- start footer --}}
  @include('layouts.guest.footer')
  {{-- end footer --}}

  {{-- start js --}}
  @include('layouts.guest.js')
  {{-- end js --}}
</body>

</html>
