<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{csrf_token()}}" />

    <title>Rehab-IN - Dashboard Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/style/images/favicon-log.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets/style/images/favicon-log.png')}}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/style/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="{{ asset('assets/style/admin/css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/style/admin/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/style/admin/css/custom-admin.css') }}" rel="stylesheet">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                   {{-- <img src="{{asset('assets/style/images/logo-v6.png')}}"/> --}}
                </div>
                {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
                <img src="{{asset('assets/style/images/logo-v6.png')}}"/>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('landingadmin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesComp"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Manajemen User & Komponen Lainnya</span>
                    </a>
                    <div id="collapsePagesComp" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">User:</h6>
                            <a class="collapse-item" href="{{ route('dbpasien') }}">Pasien</a>
                            <a class="collapse-item" href="{{ route('dbdokter') }}">Dokter</a>
                            <a class="collapse-item" href="{{ route('dbadmin') }}">Administrator</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Komponen:</h6>
                            <a class="collapse-item" href="{{ route('kamaradm') }}">Kamar</a>
                            <a class="collapse-item" href="{{ route('contactusadm') }}">Kontak Kami</a>
                            <a class="collapse-item" href="{{ route('riwayatadm') }}">Riwayat Pelayanan</a>
                            <a class="collapse-item" href="{{ route('orderadm') }}">Orderan Saat Ini</a>
                            
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Manajemen Konten</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">UI Utama:</h6>
                            <a class="collapse-item" href="{{ route('tipskesadm') }}">Konten Tips Kesehatan</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">UI User:</h6>
                            <a class="collapse-item" href="{{ route('artikeladm') }}">Konten Artikel</a>
                            <a class="collapse-item" href="{{ route('jadwalkons') }}">Jadwal Konsultasi</a>
                            <a class="collapse-item" href="{{ route('catkes') }}">Catatan Kesehatan</a>
                            {{-- <a class="collapse-item" href="{{ route('servicers') }}">Layanan Kami - RS</a> --}}
                            <a class="collapse-item" href="{{ route('servreserv') }}">Layanan Kami - Reservasi</a>
                            <a class="collapse-item" href="{{ route('listdokter') }}">Layanan Kami - Dokter</a>
                            {{-- <a class="collapse-item" href="{{ route('eduadm') }}">Layanan Kami - Edukasi</a> --}}
                            <div class="collapse-divider"></div>
                            {{-- <h6 class="collapse-header">UI Dokter:</h6>
                            <a class="collapse-item" href="404.html">404 Page</a>
                            <a class="collapse-item" href="blank.html">Blank Page</a> --}}
                        </div>
                    </div>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi! {{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/style/admin/img/undraw_profile.svg') }}">
                                    
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('main')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>By TIM  H RPL 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin untuk logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" untuk keluar dari session saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{route('logoutadm')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/style/admin/vendor/jquery/jquery.min.js') }}"></script>
    
    <script src="{{ asset('assets/style/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/style/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/style/admin/js/sb-admin-2.min.js') }}"></script>
    
    <!-- Page level plugins -->
    <script src="{{ asset('assets/style/admin/vendor/chart.js/Chart.min.js') }}"></script>
    
    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/style/admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/style/admin/js/demo/chart-pie-demo.js') }}"></script>
    
    <!-- javascript for artikel modal -->
    @yield('script')
</body>

</html>

