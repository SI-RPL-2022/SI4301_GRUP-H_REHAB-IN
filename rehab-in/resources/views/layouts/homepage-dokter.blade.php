<!doctype html>
<html lang="en">

<head>
    <title>Dashboard User - {{ auth()->user()->username }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/user/css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style/user/css/article.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/style/images/favicon-log.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/style/images/favicon-log.png') }}">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
{{-- =======
            <div class="wrapper d-flex align-items-stretch">
                <nav id="sidebar" class="active">
                    <h1><a href="{{ route('landingdokter') }}" class="logo">
                        <img src="{{ asset('assets/style/images/favicon-log-v2.png') }}" alt=""></a></h1>
                    <ul class="list-unstyled components mb-5">
                        <li class="active">
                            <a href="{{ route('landingdokter') }}"><span class="fa fa-home"></span> Home</a>
                        </li>
                        <li>
                            <a href="{{ route('jadwaldokter') }}"><span class="fa fa-calendar"></span>Input Jadwal</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"><span class="fa fa-sign-out"></span>Keluar akun</a>
                        </li>
                    </ul>
>>>>>>> 1665ecb50df22fd293d7b439ce0e8be06dd86875 --}}

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <h1><a href="{{ route('landingdokter') }}" class="logo">
                    <img src="{{ asset('assets/style/images/favicon-log-v2.png') }}" alt=""></a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{ route('landingdokter') }}"><span class="fa fa-home"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('catpasien') }}"><span class="fa fa-users"></span>Input Catatan
                        Kesehatan</a>
                </li>
                <li>
                    <a href="{{ route('jadwaldokter') }}"><span class="fa fa-calendar"></span>Lihat Jadwal</a>
                </li>
                <li>
                    <a href="{{ route('orderkons') }}"><span class="fa fa-shopping-basket"></span>Check order</a>
                </li>
                <li>
                    <a href="{{ route('history') }}"><span class="fa fa-history"></span>Riwayat Pembayaran</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"><span class="fa fa-sign-out"></span>Keluar akun</a>
                </li>
            </ul>

            <div class="footer">
                <p>
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by
                    Group 162
                </p>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">


                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Side Menu</span>
                    </button>
                    <strong>
                        <p class="mt-4">
                            Hallo
                            <a
                                href="{{ route('dokter.profile', ['id' => auth()->user()->id]) }}">{{ auth()->user()->name }}</a>
                            | How are you?
                        </p>
                    </strong>

                </div>
            </nav>
            @yield('main')
            {{-- <h2 class="mb-4">Halo, user! Semangatt 162!</h2> --}}

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
    <script src="{{ asset('assets/style/user/js/article.js') }}"></script>





</body>

</html>
