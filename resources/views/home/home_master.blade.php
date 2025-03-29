<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Easy - IT Solution </title>

  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  <!-- End google font  -->

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/niceselect.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">



  <!-- Code Editor  -->

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.min.css') }}">
</head>

<body>

  <div class="preloader">
    <div class="preloader-inner">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!-- End preloader -->

  <div class="progress-bar-container">
    <div class="progress-bar"></div>
  </div>

  <!-- progress circle -->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
      <div class="top-arrow">
        <svg width="12" height="20" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.999999 1L8 8L1 15" stroke="#142D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>
  </div>
  <!-- End All Js -->



  <!-- Mobile Menu -->
  @include('home.body.mobile_menu')
  <!-- End mobile menu -->

  @include('home.body.header') 

  <!-- End mobile menu -->

   @yield('home')


  <!-- Footer  -->

  @include('home.body.footer') 


  <!-- scripts -->
  <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>

  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/menu/menu.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/pricing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/skillbar.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick-animation.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick-animation.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/faq.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/tabs-slider.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/product-increment.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/niceselect.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>
  <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>

  <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
 
</body>
</html>