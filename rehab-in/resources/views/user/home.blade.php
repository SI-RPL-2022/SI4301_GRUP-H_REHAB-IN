@extends('layouts.homepage-user')

@section('main')

    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
        </div>
    @endif
    @if ($countartikel > 0)
        <div id="contact" class="contact-us section p-3 d-flex justify-content-center">
            {{-- NEWS --}}
            <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        @foreach ($artikel as $photo)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        @foreach ($artikel as $photo)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="d-block img-fluid" src="{{ asset('images/' . $photo->image_art) }}"
                                    alt="{{ $photo->judul_artikel }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="{{ route('artikel', ['id' => $photo->id]) }}">
                                        <h3>{{ $photo->judul_artikel }}</h3>
                                    </a>
                                    <p>{{ $photo->konten }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>



        {{-- CURRENT SCHEDULE --}}

        @if ($count > 0)
            {{-- CURRENT SCHEDULE --}}
            <div id="contact" class="contact-us section p-5 p-md-5" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="" method="post">
                            <div class="col-lg-12 schedule-card">
                                <div class="user-pict-schedule">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Konsultasi Hari Ini</h4>
                                            <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('assets/style/images/doc1.png') }}" alt="" />
                                                    <h5 style="font-weight:bold; padding-top:10px;">dr. Muhammad Syahid</h5>
                                                    <h6 style="color:#fff;">Spesialis Jantung</h6>
                                                </div>
                                                <div class="col-lg-8 schedule-time-frame">
                                                    {{-- CONTENT --}}
                                                    <div class="user-pict-schedule"
                                                        style="background-color: transparent; border-radius:23px;">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-calendar fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-clock-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">11.00 - 13.00
                                                                                    WIB
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-comments-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- CONTENT --}}
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

            {{-- HEALTH NOTES --}}
            <div id="contact content" class="p-4 p-md-5" style="">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="" method="post">
                            <div class="user-pict-notes" style="padding: 20px 2px 20px 60px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="user-profile-header" style="padding-right: 50px;">Catatan Kesehatan</h4>
                                        <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                                            {{-- CONTENT --}}
                                            <div class="col-lg-3" style="border-radius:23px;">
                                                <div class="">
                                                    <img src="{{ asset('assets/style/user/images/jamsleep.png') }}"
                                                        alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px;">Waktu Tidur</h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->waktu }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}

                                            {{-- CONTENT --}}
                                            <div class="col-lg-3"
                                                style="background-color: transparent; border-radius:23px;">
                                                <div class="" style="padding: 0px 10px;">
                                                    <img src="{{ asset('assets/style/user/images/sleepquality.png') }}"
                                                        alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px; min-width:50px;">Kualitas
                                                        Tidur
                                                    </h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->kualitas }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}

                                            {{-- CONTENT --}}
                                            <div class="col-lg-3"
                                                style="background-color: transparent; border-radius:23px;">
                                                <div class="">
                                                    <img src="{{ asset('assets/style/user/images/sport.png') }}" alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px;">Olahraga</h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->olahraga }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}

                                            {{-- CONTENT --}}
                                            <div class="col-lg-3"
                                                style="background-color: transparent; border-radius:23px;">
                                                <div class="">
                                                    <img src="{{ asset('assets/style/user/images/mood.png') }}" alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px;">Mood</h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->mood }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}
                                            <div class="container">
                                                <a href="{{ route('user-healthnotes', ['id' => auth()->user()->id]) }}"
                                                    class="btn btn-outline-info">Lihat selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div id="contact" class="contact-us section p-5 p-md-5" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="" method="post">
                            <div class="col-lg-12 schedule-card">
                                <div class="user-pict-schedule">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Konsultasi Hari Ini</h4>
                                            <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('assets/style/images/doc1.png') }}" alt="" />
                                                    <h5 style="font-weight:bold; padding-top:10px;">dr. Muhammad Syahid</h5>
                                                    <h6 style="color:#fff;">Spesialis Jantung</h6>
                                                </div>
                                                <div class="col-lg-8 schedule-time-frame">
                                                    {{-- CONTENT --}}
                                                    <div class="user-pict-schedule"
                                                        style="background-color: transparent; border-radius:23px;">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-calendar fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-clock-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">11.00 - 13.00
                                                                                    WIB
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span
                                                                                    class="fa fa-comments-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- CONTENT --}}
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
        @endif
    @else
        @if ($count > 0)
            {{-- CURRENT SCHEDULE --}}
            <div id="contact" class="contact-us section p-5 p-md-5" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="" method="post">
                            <div class="col-lg-12 schedule-card">
                                <div class="user-pict-schedule">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Konsultasi Hari Ini</h4>
                                            <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('assets/style/images/doc1.png') }}" alt="" />
                                                    <h5 style="font-weight:bold; padding-top:10px;">dr. Muhammad Syahid</h5>
                                                    <h6 style="color:#fff;">Spesialis Jantung</h6>
                                                </div>
                                                <div class="col-lg-8 schedule-time-frame">
                                                    {{-- CONTENT --}}
                                                    <div class="user-pict-schedule"
                                                        style="background-color: transparent; border-radius:23px;">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-calendar fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-clock-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">11.00 - 13.00
                                                                                    WIB
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span
                                                                                    class="fa fa-comments-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- CONTENT --}}
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

            {{-- HEALTH NOTES --}}
            <div id="contact content" class="p-4 p-md-5" style="">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="" method="post">
                            <div class="user-pict-notes" style="padding: 20px 2px 20px 60px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="user-profile-header" style="padding-right: 50px;">Catatan Kesehatan</h4>
                                        <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                                            {{-- CONTENT --}}
                                            <div class="col-lg-3" style="border-radius:23px;">
                                                <div class="">
                                                    <img src="{{ asset('assets/style/user/images/jamsleep.png') }}"
                                                        alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px;">Waktu Tidur</h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->waktu }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}

                                            {{-- CONTENT --}}
                                            <div class="col-lg-3"
                                                style="background-color: transparent; border-radius:23px;">
                                                <div class="" style="padding: 0px 10px;">
                                                    <img src="{{ asset('assets/style/user/images/sleepquality.png') }}"
                                                        alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px; min-width:50px;">Kualitas
                                                        Tidur
                                                    </h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->kualitas }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}

                                            {{-- CONTENT --}}
                                            <div class="col-lg-3"
                                                style="background-color: transparent; border-radius:23px;">
                                                <div class="">
                                                    <img src="{{ asset('assets/style/user/images/sport.png') }}" alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px;">Olahraga</h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->olahraga }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}

                                            {{-- CONTENT --}}
                                            <div class="col-lg-3"
                                                style="background-color: transparent; border-radius:23px;">
                                                <div class="">
                                                    <img src="{{ asset('assets/style/user/images/mood.png') }}" alt="">
                                                    <h6 style="color: #aaa; padding-top: 5px;">Mood</h6>
                                                    <p style="font-weight: bold; font-size:15px; color:#000;">
                                                        {{ $note->mood }}</p>
                                                </div>
                                            </div>
                                            {{-- CONTENT --}}
                                            <div class="container">
                                                <a href="{{ route('user-healthnotes', ['id' => auth()->user()->id]) }}"
                                                    class="btn btn-outline-info">Lihat selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div id="contact" class="contact-us section p-5 p-md-5" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="" method="post">
                            <div class="col-lg-12 schedule-card">
                                <div class="user-pict-schedule">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Konsultasi Hari Ini</h4>
                                            <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('assets/style/images/doc1.png') }}" alt="" />
                                                    <h5 style="font-weight:bold; padding-top:10px;">dr. Muhammad Syahid</h5>
                                                    <h6 style="color:#fff;">Spesialis Jantung</h6>
                                                </div>
                                                <div class="col-lg-8 schedule-time-frame">
                                                    {{-- CONTENT --}}
                                                    <div class="user-pict-schedule"
                                                        style="background-color: transparent; border-radius:23px;">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-calendar fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span class="fa fa-clock-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">11.00 - 13.00
                                                                                    WIB
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6" style="text-align: left;">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <span
                                                                                    class="fa fa-comments-o fa-2x"></span>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <p class="schedule-content">Jumat, 25 Maret
                                                                                    2022</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- CONTENT --}}
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
        @endif
    @endif
@endsection
