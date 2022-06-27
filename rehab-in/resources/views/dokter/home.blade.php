@extends('layouts.homepage-dokter')

@section('main')
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4 g-4 gap-5">
            <div class="col">
                <div class="card text-center h-75 shadow p-3 mb-5"
                    style="background-color: white; border:0px; border-radius: 30px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0E8BFF;font-weight: 500; font-size: 24px;">Atur Jadwal
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-75 shadow p-3 mb-5"
                    style="background-color: white; border:0px; border-radius: 30px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0E8BFF;font-weight: 500; font-size: 24px;">Daftar Pasien</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-75 shadow p-3 mb-5"
                    style="background-color: white; border:0px; border-radius: 30px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0E8BFF;font-weight: 500; font-size: 24px;">Resep Obat</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="contact" class="contact-us section" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-pict">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Jadwal konsultasi bersama pasien hari ini</h4>
                                            <div class="info-post">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <img src="{{ asset('assets/style/images/doc1.png') }}"
                                                                class="w-75 mx-auto d-block" alt="">
                                                        </div>
                                                        <div class="col-3 text-start my-auto d-block">
                                                            <p style="font-weight: 500; font-size: 30px">Pasien A</p>
                                                            <p style="font-weight: 400; font-size: 26px">Konsultasi Online
                                                            </p>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="card text-start border-0">
                                                                <div class="card-body"
                                                                    style="background-color: #EDEAEA; border-radius: 30px">
                                                                    <div class="row mt-3">
                                                                        <div class="col px-5">
                                                                            <div class="row">
                                                                                <p
                                                                                    style="font-weight: 300; font-size: 26px;color:black">
                                                                                    <img src="{{ asset('assets/style/images/calendar.png') }}"
                                                                                        alt=""
                                                                                        style="height: 53px; margin-right:12px;">
                                                                                    Jumat, 25 Maret 2022
                                                                                </p>
                                                                            </div>
                                                                            <div class="row">
                                                                                <p
                                                                                    style="font-weight: 300; font-size: 26px;color:black">
                                                                                    <img src="{{ asset('assets/style/images/clock.png') }}"
                                                                                        alt=""
                                                                                        style="height: 56px; margin-right:12px">
                                                                                    11.00 - 13.00 WIB
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col px-5">
                                                                            <div class="row">
                                                                                <p
                                                                                    style="font-weight: 300; font-size: 26px; color:black">
                                                                                    <img src="{{ asset('assets/style/images/contact.png') }}"
                                                                                        alt=""
                                                                                        style="height: 46px; margin-right:12px">
                                                                                    Hubungi Pasien
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="contact-us section" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-pict">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Rekapitulasi</h4>
                                            <div class="info-post">
                                                <div class="container-fluid">
                                                    <div class="row row-cols-1 row-cols-md-4 g-4 gap-5">
                                                        <div class="col">
                                                            <div class="card text-center h-100 bg-transparent"
                                                                style="border:0px">
                                                                <img src="{{ asset('assets/style/images/pasien.png') }}"
                                                                    class="card-img-top w-25 mx-auto d-block h-100"
                                                                    style="color-adjust:#0E8BFF;" alt="">
                                                                <div class="card-body">
                                                                    <p
                                                                        style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        Pasien</p>
                                                                    <p
                                                                        style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        325</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="card text-center h-100 bg-transparent"
                                                                style="border:0px">
                                                                <img src="{{ asset('assets/style/images/konsultasi.png') }}"
                                                                    class="card-img-top w-25 mx-auto d-block h-100"
                                                                    alt="">
                                                                <div class="card-body">
                                                                    <p
                                                                        style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        Konsultasi</p>
                                                                    <p
                                                                        style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        35</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="card text-center h-100 bg-transparent"
                                                                style="border:0px">
                                                                <img src="{{ asset('assets/style/images/resep.png') }}"
                                                                    class="card-img-top w-25 mx-auto d-block h-100"
                                                                    alt="">
                                                                <div class="card-body">
                                                                    <p
                                                                        style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        Resep</p>
                                                                    <p
                                                                        style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        45</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="card text-center h-100 bg-transparent"
                                                                style="border:0px">
                                                                <img src="{{ asset('assets/style/images/checkup.png') }}"
                                                                    class="card-img-top w-25 mx-auto d-block h-100"
                                                                    alt="">
                                                                <div class="card-body">
                                                                    <p
                                                                        style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        Check-up</p>
                                                                    <p
                                                                        style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">
                                                                        35</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
