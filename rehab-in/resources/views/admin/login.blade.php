<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rehab - IN Administrator Side</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{asset('assets/style/images/favicon-log.png')}}" type="image/x-icon" />
     <link rel="apple-touch-icon" href="{{asset('assets/style/images/favicon-log.png')}}">
 
    <!-- Custom fonts for this template-->
    
    <link href="{{ asset('assets/style/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/style/admin/css/sb-admin-2.css') }}" rel="stylesheet">

    {{-- Bootsrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" style="margin-top: 30px;">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="{{ asset('assets/style/images/adminlogin.png') }}" alt="" style="width: 100%; padding:30px;"/>
                            </div>
                            <div class="col-lg-6" >
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                                    </div>
                                    <form class="user"  action="{{ route('authadm') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user @error('username')is-invalid @enderror"
                                                id="exampleInputEmail" name="username" aria-describedby="emailHelp"
                                                placeholder="Username" autofocus required/>

                                                @error('Username')

                                                <div class="invalid-feedback">
                                                    Username anda tidak valid.
                                                  </div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password" required>
                                        </div>
                                        <input type="number" name="role" id="role" class="form-control form-control-user" value=1 hidden>
                                        {{-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> --}}
                                        
                                        <hr>
                                        <input class="btn btn-primary btn-user btn-block" value="Login" type="submit">
                                            
                                        
                                    </form>

                                    <div class="text-center" style="margin-top: 10px;">
                                        <a class="small" href="{{ route('registeradm') }}">Buat akun baru!</a>
                                    </div>
                                    
                                    {{-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> --}}
                                   
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>