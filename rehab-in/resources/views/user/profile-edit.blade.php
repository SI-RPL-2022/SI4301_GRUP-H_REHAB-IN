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


                    <div class="col-lg-12 user-profile-content">
                        <div class="fill-form">
                            <div class="user-profile-contentslist">
                                <label class="user-profile-label">Nama Lengkap</label>
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Nama Lengkap" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="user-profile-contentslist">
                                <label class="user-profile-label">Alamat Lengkap</label>
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Nomor Hp" required="">
                                  </fieldset>
                            </div>
                            <div class="user-profile-contentslist">
                                <label class="user-profile-label">Tempat Tanggal Lahir</label>
                                <fieldset>
                                    <input type="subject" name="subject" id="subject" placeholder="Tempat Tanggal Lahir" autocomplete="on">
                                  </fieldset>
                            </div>
                            <div class="user-profile-contentslist">
                                <label class="user-profile-label">Usia</label>
                                <fieldset>
                                    <input type="subject" name="subject" id="subject" placeholder="Usia" autocomplete="on">
                                  </fieldset>
                            </div>
                            <div class="user-profile-contentslist">
                                <label class="user-profile-label">Nomor Hp</label>
                                <fieldset>
                                    <input type="subject" name="subject" id="subject" placeholder="Nomor Hp" autocomplete="on">
                                  </fieldset>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-4" style="margin-left: 50px" href="{{ route('user-profile-edit') }}"> 
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
