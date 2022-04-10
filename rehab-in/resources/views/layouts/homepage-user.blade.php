<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard Pasien</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('assets/style/user/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/style/user/css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/owl.css') }}">

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{asset('assets/style/images/favicon-log.png')}}" type="image/x-icon" />
     <link rel="apple-touch-icon" href="{{asset('assets/style/images/favicon-log.png')}}">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="{{ route('landinguser') }}" class="logo">
                    <img src="{{ asset('assets/style/images/favicon-log-v2.png') }}" alt=""></a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ route('landinguser') }}"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
            <a href="{{ route('user-healthnotes') }}"><span class="fa fa-sticky-note"></span>Catatan Kesehatan</a>
          </li>
          <li>
            <a href="{{ route('user-consult') }}"><span class="fa fa-paper-plane"></span> Tanya Dokter</a>
          </li>
          <li>
            <a href="{{ route('user-history') }}"><span class="fa fa-history"></span>Riwayat Layanan</a>
          </li>
          <li>
              <a href="{{ route('user-profile') }}"><span class="fa fa-user"></span> Profile</a>
          </li>
          <li>
            <a href="{{ route('user-services') }}"><span class="fa fa-users"></span>Layanan Kami</a>
            {{-- fa fa-cogs --}}
          </li>

        </ul>

        <div class="footer">
        	<p>
                &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by Group 162<a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            </p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <strong><p class="mt-4"> Hallo #NamePasien | How are you? </p></strong>
          </div>
        </nav>

        {{-- <h2 class="mb-4">Halo, user! Semangatt 162!</h2> --}}
        @yield('main')
      </div>
		</div>

    <script src=" {{ asset('assets/style/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/style/user/js/popper.js') }}"></script>
    <script src="{{ asset('assets/style/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/style/user/js/main.js') }}"></script>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/style/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/style/js/animation.js') }}"></script>
    <script src="{{ asset('assets/style/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/style/js/custom.js') }}"></script>





  </body>
</html>
