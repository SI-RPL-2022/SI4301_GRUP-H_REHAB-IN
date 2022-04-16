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
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card" style="width: 18em;">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="card-img-top" width="50" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Doctor's name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga rerum assumenda, mollitia dolores perferendis et error! Ducimus, earum necessitatibus.</p>

                    <div class="mt-3 mb-3 text-center">
                        <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                    </div>
                    <a href="{{ route('jadwal') }}" class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card" style="width: 18em;">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="card-img-top" width="50" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Doctor's name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga rerum assumenda, mollitia dolores perferendis et error! Ducimus, earum necessitatibus.</p>

                    <div class="mt-3 mb-3 text-center">
                        <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                    </div>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card" style="width: 18em;">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="card-img-top" width="50" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Doctor's name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga rerum assumenda, mollitia dolores perferendis et error! Ducimus, earum necessitatibus.</p>

                    <div class="mt-3 mb-3 text-center">
                        <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                    </div>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card" style="width: 18em;">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="card-img-top" width="50" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Doctor's name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga rerum assumenda, mollitia dolores perferendis et error! Ducimus, earum necessitatibus.</p>

                    <div class="mt-3 mb-3 text-center">
                        <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                    </div>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card" style="width: 18em;">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="card-img-top" width="50" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Doctor's name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga rerum assumenda, mollitia dolores perferendis et error! Ducimus, earum necessitatibus.</p>

                    <div class="mt-3 mb-3 text-center">
                        <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                    </div>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card" style="width: 18em;">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="card-img-top" width="50" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Doctor's name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga rerum assumenda, mollitia dolores perferendis et error! Ducimus, earum necessitatibus.</p>

                    <div class="mt-3 mb-3 text-center">
                        <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                        <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                    </div>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
