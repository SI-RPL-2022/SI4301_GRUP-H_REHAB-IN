@extends('layouts.homepage-dokter')

@section('main')

<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form id="contact" action="{{ route('update.profile.dokter') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                                    @if( $user->pic === null)
                                                        <img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" class="rounded-circle-profile">
                                                    @else
                                                        <img src="{{ asset('dokterProfile/'.$user->pic) }}" alt="" class="rounded-circle-profile">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>


                            <div class="col-lg-12 user-profile-content">
                                <div class="fill-form">
                                    <input type="number" name="id" id="id" value="{{ $user->id }}" hidden>
                                    <div classs="user-profile-contentslist">
                                        <h4 class="text-center">Ubah profile dengan benar</h4>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Nama Lengkap</label>
                                        <fieldset>
                                            <input type="name" name="name" id="name" placeholder="Nama Lengkap" class="@error('name') is-invalid @enderror" value="{{ $user->name }}" >
                                            @error('name')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Alamat Lengkap</label>
                                        <fieldset>
                                            <input type="text" name="address" id="address" placeholder="Alamat Lengkap" class="@error('address') is-invalid @enderror" value="{{ $user->address }}">
                                            @error('address')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Tempat Tanggal Lahir</label>
                                        <fieldset>
                                            <input type="date" name="tanggallahir" id="tanggallahir" placeholder="Tempat Tanggal Lahir" class="@error('tanggallahir') is-invalid @enderror" value="{{ $user->tanggallahir }}">
                                            @error('date')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Nomor Hp</label>
                                        <fieldset>
                                            <input type="number" name="nohp" id="nohp" placeholder="Nomor Hp" class="@error('nohp') is-invalid @enderror" value="{{ $user->nohp }}">
                                            @error('nohp')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Spesialis</label>
                                        <fieldset>
                                            <input type="text" name="spesialis" id="spesialis" placeholder="Spesialis" class="@error('spesialis') is-invalid @enderror">
                                            @error('spesialis')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Deskripsi</label>
                                        <fieldset>
                                            <input type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Dokter" class="@error('deskripsi') is-invalid @enderror">
                                            @error('deskripsi')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Waktu Praktek</label>
                                        <fieldset>
                                            <input type="text" name="jadwal_time" id="jadwal_time" placeholder="Waktu Praktek" class="@error('jadwal_time') is-invalid @enderror">
                                            @error('jadwal_time')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Link GMeet</label>
                                        <fieldset>
                                            <input type="text" name="link" id="link" placeholder="Link Google Meet" class="@error('link') is-invalid @enderror">
                                            @error('link')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="user-profile-contentslist">
                                        <label class="user-profile-label">Upload foto profile</label>
                                        <fieldset>
                                            <input type="file" name="pic" class="@error('pic') is-invalid @enderror">
                                            @error('pic')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4" style="margin-left: 50px">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Update Profil</button>
                            </fieldset>
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
