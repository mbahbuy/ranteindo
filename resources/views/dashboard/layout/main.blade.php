<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img') }}/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img') }}/favicon.png" />
    <title>{{ $title }}</title>

    @if (Request::is('dashboard'))        
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


      .dd-selected-image, .dd-option-image {
        max-width: 50px !important;
      }
      .dd-selected {
        max-height: 60px !important;
      }
      </style>
      <!-- Scripts -->
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
    <script src="{{ asset('js') }}/jquery.min.js"></script>

  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500 overflow-x-hidden">

    @include('dashboard.layout.sidebar')

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <h4 class="mb-0 font-bold capitalize">{{ Request::segment(count(request()->segments())) }}</h4>
          </nav>

          @if (Request::is('dashboard'))
          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <h5 class="mb-0 font-bold capitalize">Click bagian yang mau di edit</h5>
            </div>
          </div>
          @endif

          <div class="flex items-center justify-end mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center px-4">
                <a class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- end Navbar -->  
      
      @yield('dashboard')

    </main>

    @include('dashboard.layout.settings')

  </body>

  @if (Request::is('dashboard'))      
    <!-- Scripts custom -->
    <script src="{{ asset('js') }}/owl-carousel.js"></script>
    <script src="{{ asset('js') }}/animation.js"></script>
    <script src="{{ asset('js') }}/imagesloaded.js"></script>
    <script>
      (function ($) {
        $('.owl-banner').owlCarousel({
          items:1,
          loop:true,
          dots: true,
          nav: false,
          autoplay: true,
          margin:0,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:1
              },
              1000:{
                items:1
              },
              1600:{
                items:1
              }
            }
        })

        $('.owl-services').owlCarousel({
            items:4,
            loop:true,
            dots: true,
            nav: false,
            autoplay: true,
            margin:5,
              responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:2
                  },
                  1000:{
                      items:3
                  },
                  1600:{
                      items:4
                  }
              }
        })

        $('.owl-portfolio').owlCarousel({
            items:4,
            loop:true,
            dots: true,
            nav: true,
            autoplay: true,
            margin:30,
              responsive:{
                  0:{
                      items:1
                  },
                  700:{
                      items:2
                  },
                  1000:{
                      items:3
                  },
                  1600:{
                      items:4
                  }
              }
        })

        $('#logo').click(function() {
          location.href = "{{ route('views.logo') }}";
        });
        $('#top').click(function(){
          location.href = "{{ route('views.top') }}";
        });
        $('#services').click(function(){
          location.href = "{{ route('views.services') }}";
        });
        $('#about').click(function(){
          location.href = "{{ route('views.about') }}";
        });
        $('#portfolio').click(function(){
          location.href = "{{ route('views.project') }}";
        });
        $('#contact').click(function(){
          location.href = "{{ route('views.contact') }}";
        });
        $('#footer').click(function(){
          location.href = "{{ route('views.footer') }}";
        });
      })(window.jQuery);
    </script>
  @endif
  
  <!-- plugin for charts  -->
  <script src="{{ asset('js') }}/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('js') }}/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  {{-- <script src="{{ asset('js') }}/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script> --}}
  <script>

    var sidenav_target = "{{ Request::path() }}";

    loadStylesheet("{{ asset('css') }}/perfect-scrollbar.css");
    loadJS("{{ asset('js') }}/perfect-scrollbar.js", true);

    if (document.querySelector("nav [navbar-trigger]")) {
      loadJS("{{ asset('js') }}/navbar-collapse.js", true);
    }

    if (document.querySelector("[data-target='tooltip']")) {
      loadJS("{{ asset('js') }}/tooltips.js", true);
      loadStylesheet("{{ asset('css') }}/tooltips.css");
    }

    if (document.querySelector("[nav-pills]")) {
      loadJS("{{ asset('js') }}/nav-pills.js", true);
    }

    if (document.querySelector("[dropdown-trigger]")) {
      loadJS("{{ asset('js') }}/dropdown.js", true);

    }

    if (document.querySelector("[fixed-plugin]")) {
      loadJS("{{ asset('js') }}/fixed-plugin.js", true);
    }

    if (document.querySelector("[navbar-main]")) {
      loadJS("{{ asset('js') }}/sidenav-burger.js", true);
      loadJS("{{ asset('js') }}/navbar-sticky.js", true);
    }

    if (document.querySelector("canvas")) {
      loadJS("{{ asset('js') }}/chart-1.js", true);
      loadJS("{{ asset('js') }}/chart-2.js", true);
    }

    function loadJS(FILE_URL, async) {
      let dynamicScript = document.createElement("script");

      dynamicScript.setAttribute("src", FILE_URL);
      dynamicScript.setAttribute("type", "text/javascript");
      dynamicScript.setAttribute("async", async);

      document.head.appendChild(dynamicScript);
    }

    function loadStylesheet(FILE_URL) {
      let dynamicStylesheet = document.createElement("link");

      dynamicStylesheet.setAttribute("href", FILE_URL);
      dynamicStylesheet.setAttribute("type", "text/css");
      dynamicStylesheet.setAttribute("rel", "stylesheet");

      document.head.appendChild(dynamicStylesheet);
    }
  </script>
</html>