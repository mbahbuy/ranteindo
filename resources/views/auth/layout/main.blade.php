<!DOCTYPE html>
<html>
  <head>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/main') }}/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset('assets/main') }}/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('css') }}/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('css') }}/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('css') }}/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

  </head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">

    @include('auth.layout.navbar')

    @yield('auth')

  </body>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('js') }}/perfect-scrollbar.min.js"></script>
  <!-- main script file  -->
  <script src="{{ asset('js') }}/soft-ui-dashboard-tailwind.js?v=1.0.4"></script>
</html>