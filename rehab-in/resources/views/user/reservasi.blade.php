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
                <div class="rounded text-center me-2 text-white" style="background-color:#67a5ff">
                    <i class="fa fa-bed fa-5x  mt-3" style="color:white" ></i>
                    <p class="p-1 text-white">Reservasi Kamar</p>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('dokter')}}">
                        <i class="fa fa-user-md fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Dokter</p>
                    </a>
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
        </a><span class="p-2 text-black" style="font-size:30px">Kamar yang tersedia</span>
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col ms-4">
                        <img src="{{ asset('assets/style/images/kls-vip.png') }}" class="rounded" style="width:45%" alt="kamar">
                    </div>
                    <div class="col">
                        <div class="row">
                            <p>Kamar 501</p>
                            <div class="col">
                                Kelas
                            </div>
                            <div class="col">
                                Tempat
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <br>
                        <a href="{{ route('ruangan') }}" class="btn btn-primary mb-2">Pilih Kamar</a>
                        {{-- <button type="button" class="btn btn-primary ">Pilih Kamar</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col ms-4">
                        <img src="{{ asset('assets/style/images/kls-vip.png') }}" class="rounded" style="width:45%" alt="kamar">
                    </div>
                    <div class="col">
                        <div class="row">
                            <p>Kamar 501</p>
                            <div class="col">
                                Kelas
                            </div>
                            <div class="col">
                                Tempat
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <br>
                        <button type="button" class="btn btn-primary ">Pilih Kamar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col ms-4">
                        <img src="{{ asset('assets/style/images/kls-vip.png') }}" class="rounded" style="width:45%" alt="kamar">
                    </div>
                    <div class="col">
                        <div class="row">
                            <p>Kamar 501</p>
                            <div class="col">
                                Kelas
                            </div>
                            <div class="col">
                                Tempat
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <br>
                        <button type="button" class="btn btn-primary ">Pilih Kamar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
