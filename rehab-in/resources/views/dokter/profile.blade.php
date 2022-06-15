@extends('layouts.homepage-dokter')


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
                                            <h4 class="user-profile-header">Profile Dokter</h4>
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
                                                                    <img src="{{ asset('dokterProfile/' . $user->pic) }}"
                                                                        alt="" class="rounded-circle-profile">
                                                                @endif
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
                                                <p class="use/r-profile-label-p">{{ $user->tanggallahir }}</p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Nomor Hp</label>
                                                <p class="user-profile-label-p">{{ $user->nohp }}</p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Hari Praktek</label>
                                                <p class="user-profile-label-p">
                                                    @if ($dokter != null)
                                                        @if ($dokter->jadwal_day != 0)
                                                            {{ $dokter->jadwal_day }}
                                                        @else
                                                            Update data profil sekarang!
                                                        @endif
                                                    @else
                                                        Update data profil sekarang!
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Waktu Praktek</label>
                                                <p class="user-profile-label-p">
                                                    @if ($dokter != null)
                                                        @if ($dokter->jadwal_time != 0)
                                                            {{ $dokter->jadwal_time }}
                                                        @else
                                                            Update data profil sekarang!
                                                        @endif
                                                    @else
                                                        Update data profil sekarang!
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Link Meet</label>
                                                <p class="user-profile-label-p">
                                                    @if ($dokter != null)
                                                        @if ($dokter->link != 0)
                                                            <a class="btn btn-success" style="color: #fff;">
                                                                {{ $dokter->link }}
                                                            </a>
                                                        @else
                                                            <a class="btn btn-warning" style="color: #fff;">
                                                                Update data profil sekarang!
                                                            </a>
                                                        @endif
                                                    @else
                                                        <a class="btn btn-warning" style="color: #fff;">
                                                            Update data profil sekarang!
                                                        </a>
                                                    @endif


                                                </p>
                                            </div>
                                            <div class="user-profile-contentslist">
                                                <label class="user-profile-label">Spesialis</label>
                                                <p class="user-profile-label-p">
                                                    @if ($dokter != null)
                                                        @if ($dokter->spesialis != 0)
                                                            <a class="btn btn-success" style="color: #fff;">
                                                                {{ $dokter->spesialis }}
                                                            </a>
                                                        @else
                                                            <a class="btn btn-warning" style="color: #fff;">
                                                                Update data profil sekarang!
                                                            </a>
                                                        @endif
                                                    @else
                                                        <a class="btn btn-warning" style="color: #fff;">
                                                            Update data profil sekarang!
                                                        </a>
                                                    @endif


                                                </p>
                                            </div>
                                            {{-- <div class="user-profile-contentslist">
                            <label class="user-profile-label">Spesialis</label>
                            <p class="user-profile-label-p">
                                @if ($dokter != null)
                                    @if ($dokter->spesialis != 0)
                                    <a class="btn btn-success" style="color: #fff;">
                                        {{ $dokter->spesialis }}
                                    </a>
                                    @else
                                    <a class="btn btn-warning" style="color: #fff;" href="{{ route('edit.profile.dokter',['id' => $user->id]) }}">
                                        Update data profil sekarang!
                                    </a>
                                    @endif
                                @else
                                    <a class="btn btn-warning" style="color: #fff;" href="{{ route('edit.profile.dokter',['id' => $user->id]) }}">
                                        Update data profil sekarang!
                                    </a>
                                @endif
                                
                                
                            </p>
                        </div>
                        {{-- <div class="user-profile-contentslist">
                            <label class="user-profile-label">Spesialis</label>
                            <p class="user-profile-label-p">
                            @if ($dokter->spesialis == null)
                                knkbkdfk
                            @else
                            {{$dokter->spesialis}}
                            @endif                                
                            </p>
                        </div> --}}
                                            {{-- <div class="user-profile-contentslist">
                            <label class="user-profile-label">Tentang Dokter</label>
                            <p class="user-profile-label-p">
                            @if ($dokter->deskripsi > 1)
                                {{ $dokter->deskripsi }}
                            @else
                            -
                                
                            @endif      
                                </p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Jam Kerja</label>
                            <p class="user-profile-label-p">
                            @if ($dokter->jadwal_time > 1)
                            {{ $dokter->jadwal_time }}
                            @else
                            -
                                
                            @endif      
                                </p>
                        </div> --}}
                                        </div>
                                        <div class="row mt-5">
                                            <a href="{{ route('edit.profile.dokter', ['id' => $user->id]) }}"
                                                type="button" class="col btn btn-outline-primary me-3"
                                                style="margin-left: 63px">Edit Profil</a>
                                            <a href="{{ route('logout') }}" type="button"
                                                class="col btn btn-outline-danger ms-3">Logout</a>
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
