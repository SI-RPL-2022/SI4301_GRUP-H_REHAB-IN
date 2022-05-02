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
                                        <h3 class="user-profile-name">{{ $Data->name }}</h3>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" class="rounded-circle-profile">
                                            </div>
                                            <div class="col-lg-10 all-service-get-profile">
                                                <h6 class="content">Jumlah Konsultasi : <a href="#"><em style="font-weight: bold;">20</em></a></h6>
                                                <h6 class="content">Jumlah Reservasi : <a href="#"><em style="font-weight: bold;">-</em></a></h6>
                                                <h6 class="content">Catatan Kesehatan : <a href="{{ route('user-healthnotes') }}"><em style="font-weight: bold;">-</em></a></h6>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-lg-12 user-profile-content">
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Nama Lengkap</label>
                            <p class="user-profile-label-p">{{ $Data->name }}</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Alamat Lengkap</label>
                            <p class="user-profile-label-p">{{ $Data->address }}</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Tanggal Lahir</label>
                            <p class="user-profile-label-p">{{ $Data->tanggallahir }}</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Nomor Hp</label>
                            <p class="user-profile-label-p">{{ $Data->nohp }}</p>
                        </div>
                    </div>
                    <div class="row">
                      <a href="#" type="button" class="col btn btn-outline-primary" style="margin-left: 63px">Edit Profil</a>
                      <a href="{{ route('logout') }}" type="button" class="col btn btn-outline-danger">Logout</a>
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
