@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="rounded text-center me-2 text-white" style="background-color:#67a5ff">
                    <i class="fa fa-hospital-o fa-5x  mt-3" style="color:white" ></i>
                    <p class="p-1 text-white">Rumah Sakit</p>
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
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('dokter') }}">
                        <i class="fa fa-user-md fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Dokter</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <i class="fa fa-book fa-5x  mt-3" style="color:white" ></i>
                    <p class="p-1 text-white">Edukasi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center"> <img src="{{asset('assets/style/images/logo-v5.png')}}" width="500"></div>
                    <div class="text-center mt-2">
                        <h5 class="mt-5 mb-0">NAMA RUMAH SAKIT</h5> <span>HOSPITAL</span>
                        <div class="px-4 mt-1">
                            <p class="fonts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dolorum voluptatibus enim architecto dignissimos totam porro temporibus consequatur. Aperiam, accusantium.</p>
                        </div>
                        <div class="mb-3">
                            <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                            <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                            <a href="#"><i class="fa fa-google fa-2x me-2"></i></a>
                        </div>
                        <button class="btn btn-outline-primary px-4">Contact</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
