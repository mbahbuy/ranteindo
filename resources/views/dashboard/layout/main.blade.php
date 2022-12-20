<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img') }}/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img') }}/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>

    @if (Request::is('dashboard*'))        
      <!-- Additional CSS Files -->
      <link href="{{ asset('css') }}/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css') }}/fontawesome.css">
      <link rel="stylesheet" href="{{ asset('css') }}/animated.css">
      <link rel="stylesheet" href="{{ asset('css') }}/owl.css">
      <link rel="stylesheet" href="{{ asset('css') }}/templatemo-onix-digital.css">
      <style>
        .main-banner:after {
          background-image: url(./assets/img/baner-dec-left.png);
        }
        .main-banner:before {
          background-image: url(./assets/img/banner-right-image.png);
        }
        .our-portfolio .item .hover-effect {
          background-image: url(./assets/img/hover-bg.png);
        }
        .pricing-tables .first-item {
          background-image: url(./assets/img/first-plan-bg.png);
        }
        .pricing-tables .second-item {
          background-image: url(./assets/img/second-plan-bg.png);
        }
        .pricing-tables .third-item {
          background-image: url(./assets/img/third-plan-bg.png);
        }
        .subscribe .inner-content {
          background-image: url(./assets/img/subscribe-bg.png);
        }
        .subscribe .inner-content:after {
          background-image: url(./assets/img/subscribe-dec.png);
        }
        form#contact {
          background-image: url(./assets/img/contact-form-bg.png);
        }
      </style>
      <!-- Scripts -->
      <script src="{{ asset('js') }}/jquery.min.js"></script>
      <script src="{{ asset('js') }}/bootstrap.bundle.min.js"></script>
    @endif

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('css') }}/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('css') }}/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('css') }}/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500 overflow-x-hidden">

    @include('dashboard.layout.sidebar')

    @yield('dashboard')

    @include('dashboard.layout.settings')

  </body>

  @if (Request::is('dashboard*'))      
    <!-- Scripts custom -->
    <script src="{{ asset('js') }}/owl-carousel.js"></script>
    <script src="{{ asset('js') }}/animation.js"></script>
    <script src="{{ asset('js') }}/imagesloaded.js"></script>
  @endif
  
  <!-- plugin for charts  -->
  <script src="{{ asset('js') }}/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('js') }}/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="{{ asset('js') }}/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
</html>