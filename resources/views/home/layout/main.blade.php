
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Ranteindo Teknik Mandiri &#8211; {{ $title }}</title>
    
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
        background-image: url(./assets/{{ App\Models\Views::TopImg() }});
      }
      .our-portfolio .item .hover-effect {
        background-image: url(./assets/img/hover-bg.png);
      }
      .pricing-tables .item {
        background-image: url(./assets/img/second-plan-bg.png);
      }
      form#contact {
        background-image: url(./assets/img/contact-form-bg.png);
      }
      .post{
        position: relative;
        border-radius: 23px;
        display: block;
      }
      .post img{
        border-radius: 23px;
      }
      .overlay-post{
        background: rgb(255,104,95);
        background: linear-gradient(105deg, rgba(255,104,95,1) 0%, rgba(255,144,104,1) 100%);
        display: inline-block;
        position: absolute;
        left: 0;
        top: 0;
        width: 30%;
        border-top-left-radius: 23px;
        border-bottom-right-radius: 23px;
        padding: 35px 30px;
        text-align: center;
      }
    </style>
    
    <!-- Scripts -->
    <script src="{{ asset('js') }}/jquery.min.js"></script>
    <script src="{{ asset('js') }}/bootstrap.bundle.min.js"></script>

  </head>

<body class="overflow-x-hidden">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

@include('home.layout.header')

@yield('container')

@include('home.layout.footer')

  <!-- Scripts custom -->
  <script src="{{ asset('js') }}/owl-carousel.js"></script>
  <script src="{{ asset('js') }}/animation.js"></script>
  <script src="{{ asset('js') }}/imagesloaded.js"></script>

  @if (Route::is('home') )
    <script src="{{ asset('js') }}/custom.js"></script>
  @else
    <script>
      (function ($) {

        "use strict";

        // Page loading animation
        $(window).on('load', function() {
          $('#js-preloader').addClass('loaded');
        });

      })(window.jQuery);
    </script>
  @endif

</body>
</html>