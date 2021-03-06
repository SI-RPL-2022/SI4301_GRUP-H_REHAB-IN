@extends('layouts.homepage-user')

@section('main')
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-pict">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header">Profile pasien</h4>
                                            <div class="info-post">
                                                <div class="icon">
                                                    <div class="col-lg-12">
                                                        <h3 class="user-profile-name">{{ $user->name }}</h3>
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                @if ($user->pic === null)
                                                                    <img src="{{ asset('assets/style/images/user-pict.png') }}"
                                                                        alt="" class="rounded-circle-profile">
                                                                @else
                                                                    <img src="{{ asset('userProfile/' . $user->pic) }}"
                                                                        alt="" class="rounded-circle-profile">
                                                                @endif
                                                            </div>
                                                            <div class="col-lg-10 all-service-get-profile mt-3">
                                                                <h6 class="content">Jumlah Konsultasi : <span
                                                                        class="text-black"
                                                                        style="font-weight: bold;">{{ $countconsult->count() }}</span>
                                                                </h6>
                                                                <h6 class="content">Jumlah Reservasi : <span
                                                                        class="text-black"
                                                                        style="font-weight: bold;">{{ $countreservasi->count() }}</span>
                                                                </h6>
                                                                <h6 class="content">Catatan Kesehatan : <a
                                                                        href="{{ route('user-healthnotes', ['id' => $user->id]) }}"><em
                                                                            style="font-weight: bold;">Lihat disini</em></a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 user-profile-content">
                                            <div class="user-profile-contentslist">
                                                @if (session('success'))
                                                    <div class="alert alert-success alert-dismissible fade show"
                                                        role="alert">
                                                        {{ session('success') }}
                                                        <div type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Nama Lengkap</label>
                                                <p class="user-profile-label-p">{{ $user->name }}</p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Alamat Lengkap</label>
                                                <p class="user-profile-label-p">{{ $user->address }}</p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Tanggal Lahir</label>
                                                <p class="user-profile-label-p">{{ $user->tanggallahir }}</p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Nomor Hp</label>
                                                <p class="user-profile-label-p">{{ $user->nohp }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a href="{{ route('editprofile', ['id' => $user->id]) }}" type="button"
                                                class="col btn btn-outline-primary" style="margin-left: 63px">Edit
                                                Profil</a>
                                            <a href="{{ route('logout') }}" type="button"
                                                class="col btn btn-outline-danger">Logout</a>
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
