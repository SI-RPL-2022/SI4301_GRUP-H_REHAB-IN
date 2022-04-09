@extends('layouts.homepage-user')
@section('main')
    <div class="container mb-3">
        <div class="row">
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('user-services') }}">
                        <i class="fa fa-hospital-o fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Rumah Sakit</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('reservasi')}}">
                        <i class="fa fa-bed fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Reservasi Kamar</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 text-white" style="background-color:#67a5ff">
                    <i class="fa fa-user-md fa-5x  mt-3" style="color:white" ></i>
                    <p class="p-1 text-white">Dokter</p>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="">
                        <i class="fa fa-book fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Edukasi</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="{{ route('user-services') }}">
            <button type="button" id="sidebarCollapse" class="btn btn-primary mb-4">
                <i class="fa fa-backward"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </a>
        <span class="p-2 text-black" style="font-size:30px">Dokter Kami</span>
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">                            
                            <div class="thumb-xl member-thumb">
                                <img src="assets/images/random-avatar3.jpg" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. John</h4>
                                <p class="text-muted">Dentist<span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                            </div>

                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                            <a href="profile.html"  class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="3" ><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card">                            
                            <div class="thumb-xl member-thumb">
                                <img src="assets/images/random-avatar4.jpg" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Kendra V. Alfaro</h4>
                                <p class="text-muted">ENT Specialist<span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                            </div>

                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <a href=""  class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="3" ><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">                           
                            <div class="thumb-xl member-thumb">
                                <img src="assets/images/random-avatar6.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                               
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Kendra V. Alfaro</h4>
                                <p class="text-muted">Neurologist<span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                            </div>

                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <a href=""  class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="3" ><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">                           
                            <div class="thumb-xl member-thumb">
                                <img src="assets/images/random-avatar6.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                               
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Kendra V. Alfaro</h4>
                                <p class="text-muted">Neurologist<span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                            </div>

                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <a href=""  class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="3" ><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
