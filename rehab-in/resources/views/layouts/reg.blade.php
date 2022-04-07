<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Rehab-IN</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/style/images/favicon-log.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets/style/images/favicon-log.png')}}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/style/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/templatemo-digimedia-v3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/owl.css') }}">
  </head>

<body>

  <div class="main-banner-reg-log wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

        @yield('main')

  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/style/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/style/js/animation.js') }}"></script>
  <script src="{{ asset('assets/style/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/style/js/custom.js') }}"></script>


</body>
</html>
