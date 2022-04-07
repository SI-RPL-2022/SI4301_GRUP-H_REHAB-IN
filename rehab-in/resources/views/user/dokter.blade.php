@extends('layouts.homepage-user')
@section('main')
    <div class="container mb-3">
        <a href="{{ route('user-services') }}">
            <button type="button" id="sidebarCollapse" class="btn btn-primary mb-4">
                <i class="fa fa-backward"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </a>
        <div class="row">
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href=""><img src="{{ asset('assets/style/images/RumahSakit.png') }}" class="mt-2" alt="Gambar rumah sakit">
                    <p class="p-2 text-white">Rumah Sakit</p></a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('reservasi')}}"><img src="{{ asset('assets/style/images/KamarPasien.png') }}" class="mt-2" alt="Kamar Pasien">
                    <p class="p-1 text-white">Reservasi Kamar</p></a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 text-white" style="background-color:#67a5ff">
                    <img src="{{ asset('assets/style/images/Dokter.png') }}" class="mt-2" alt="Dokter">
                    <p class="p-2 text-white">Dokter</p>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href=""><img src="{{ asset('assets/style/images/Edukasi.png') }}" class="mt-2" alt="Edukasi">
                    <p class="p-3 text-white">Edukasi</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p style="font-size:20px">Dokter Kami</p>
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col ms-4">
                        <img src="{{ asset('assets/style/images/kls-vip.png') }}" class="rounded" style="width:45%" alt="kamar">
                    </div>
                    <div class="col">
                        <div class="row">
                            <p>Dokter Spesalis</p>
                            <div class="col">
                                Spesalis Syaraf
                            </div>
                            <div class="col">
                                Tempat
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <br>
                        <button type="button" class="btn btn-primary ">Atur Jadwal</button>
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
                            <p>Dokter Spesalis</p>
                            <div class="col">
                                Spesalis Syaraf
                            </div>
                            <div class="col">
                                Tempat
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <br>
                        <button type="button" class="btn btn-primary ">Atur Jadwal</button>
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
                            <p>Dokter Spesalis</p>
                            <div class="col">
                                Spesalis Syaraf
                            </div>
                            <div class="col">
                                Tempat
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <br>
                        <button type="button" class="btn btn-primary ">Atur Jadwal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
