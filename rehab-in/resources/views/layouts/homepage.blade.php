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


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/style/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/templatemo-digimedia-v3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/owl.css') }}">

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{asset('assets/style/images/favicon-log.png')}}" type="image/x-icon" />
     <link rel="apple-touch-icon" href="{{asset('assets/style/images/favicon-log.png')}}">
     

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ route('home') }}" class="logo">
              <img src="{{ asset('assets/style/images/logo-v5.png') }}" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a class="{{ request()->is('/') ? 'active nav-link' : 'nav-link' }}"
                href="{{ route('home') }}">Home</a></li>
              <li class="scroll-to-section"><a class="{{ request()->is('service') ? 'active nav-link' : 'nav-link' }}"
                href="{{ route('service') }}">Services</a></li>
              <li class="scroll-to-section"><a class="{{ request()->is('about') ? 'active nav-link' : 'nav-link' }}"
                href="{{ route('about') }}">Contact Us</a></li>

              @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/pasien">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a href="{{ route('logout') }}" type="submit" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </li>
                
              @else
                {{-- <li class="scroll-to-section"><div class="border-first-button-login"><a href="{{ route('login') }}" >Login</a></div></li> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Sebagai pasien</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('logindokter') }}">Sebagai dokter</a></li>
                  </ul>
                </li>
                
                <li class="scroll-to-section"><div class="border-first-button"><a href="{{ route('register') }}" >Sign-Up</a></div></li>
              @endauth
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        @yield('main')
  </div>

  <footer>
    <div class="container">
        <div class="row ms-auto me-auto">
            <div class="col">
                <h4>REHABIN</h4>
                <p1>Rehabin mempermudah anda untuk mendapatkan layanan rehabilitasi</p1>
            </div>
            <div class="col">
                <h5>Contact Us</h5>
                <p><a href="#">FAQ</a><br>
                <a href="#">Privacy Policy</a></p>
            </div>
            <div class="col">
                <h5>Support</h5>
                <p>halo@rehabin.com<br>
                (+62) 85939016869</p>
            </div>
        </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/style/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/style/js/animation.js') }}"></script>
  <script src="{{ asset('assets/style/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/style/js/custom.js') }}"></script>


</body>
</html>
