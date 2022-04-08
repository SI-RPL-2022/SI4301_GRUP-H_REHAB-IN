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
                        <h4 class="user-profile-header">Catatan Kesehatan</h4>
                            <div class="info-post">
                                <div class="icon">
                                    <div class="col-lg-12">
                                        <h3 class="user-profile-name">Denis Gresan</h3>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" class="rounded-circle-profile">
                                            </div>
                                            <div class="col-lg-10 all-service-get-profile">
                                                <h6 class="content">Jumlah Konsultasi : <em style="font-weight: bold;">20</em></h6>
                                                <h6 class="content">Jumlah Reservasi : <em style="font-weight: bold;">-</em></h6>

                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    {{-- <div class="col-lg-12 user-profile-content">
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Nama Lengkap</label>
                            <p class="user-profile-label-p">Denis Gresan Yubelas</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Alamat Lengkap</label>
                            <p class="user-profile-label-p">Jl. Telekomunikasi No.40, Kecamatan Bojongsoang, Bandung, Jawa Barat</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Tempat Tanggal Lahir</label>
                            <p class="user-profile-label-p">Nganjuk, 18 Agustus 2000</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Usia</label>
                            <p class="user-profile-label-p">21</p>
                        </div>
                        <div class="user-profile-contentslist">
                            <label class="user-profile-label">Nomor Hp</label>
                            <p class="user-profile-label-p">081234567890</p>
                        </div>
                    </div>
                    <div class="col-lg-4" style="margin-left: 50px" href="#">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button">Edit Profil</button>
                      </fieldset>
                    </div> --}}
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
