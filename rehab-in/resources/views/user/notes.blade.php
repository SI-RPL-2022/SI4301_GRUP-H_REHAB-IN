@extends('layouts.homepage-user')

@section('main')
    <div class="container">
        <div id="services" class="services section">

            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('assets/style/user/images/jamsleep.png') }}"
                                                        alt=""></span>
                                                Waktu Tidur
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('assets/style/user/images/sleepquality.png') }}"
                                                        alt=""></span>
                                                Kualitas Tidur
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('assets/style/user/images/sport.png') }}"
                                                        alt=""></span>
                                                Olahraga
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('assets/style/user/images/mood.png') }}"
                                                        alt=""></span>
                                                Mood
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-10">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Waktu tidur</h4>
                                                            <p>{{ $note->waktu }}</p>
                                                            {{-- <div class="ticks-list"><span><i class="fa fa-check"></i>
                                                                    Optimized Template</span> <span><i
                                                                        class="fa fa-check"></i> Data Info</span>
                                                                <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Data Info</span>
                                                                <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Optimized
                                                                    Template</span>
                                                            </div> --}}
                                                            <p>{{ $note->descwaktu }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="{{ asset('assets/style/images/jamsleepco.png') }}"
                                                                alt="">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Kualitas Tidur</h4>
                                                                <p>{{ $note->kualitas }}</p>
                                                                <p>{{ $note->desckualitas }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('assets/style/images/sleepqualityco.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Olahraga</h4>
                                                                <p>{{ $note->olahraga }}</p>
                                                                <p>{{ $note->descolahraga }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('assets/style/images/sportco.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Mood</h4>
                                                                <p>{{ $note->mood }}</p>
                                                                <p>{{ $note->descmood }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('assets/style/images/moodco.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
