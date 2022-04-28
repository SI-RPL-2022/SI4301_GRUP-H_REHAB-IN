@extends('layouts.homepage-dokter')

@section('main')

<div class="container-fluid">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></span>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</div>

<div class="container-fluid">
  <div class="row row-cols-1 row-cols-md-4 g-4 gap-5">
    <div class="col">
      <div class="card text-center h-75 shadow p-3 mb-5" style="background-color: white; border:0px; border-radius: 30px;">
        <img src="{{ asset('assets/style/images/jadwal-dokter.png') }}" class="card-img-top w-25 mx-auto d-block mt-3" alt="">
        <div class="card-body">
          <h5 class="card-title" style="color: #0E8BFF;font-weight: 500; font-size: 24px;">Atur Jadwal</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center h-75 shadow p-3 mb-5" style="background-color: white; border:0px; border-radius: 30px;">
        <img src="{{ asset('assets/style/images/daftarpasien-dokter.png') }}" class="card-img-top w-25 mx-auto d-block mt-3" alt="">
        <div class="card-body">
          <h5 class="card-title" style="color: #0E8BFF;font-weight: 500; font-size: 24px;">Daftar Pasien Saat ini</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center h-75 shadow p-3 mb-5" style="background-color: white; border:0px; border-radius: 30px;">
        <img src="{{ asset('assets/style/images/feedback-dokter.png') }}" class="card-img-top w-25 mx-auto d-block mt-3" alt="">
        <div class="card-body">
          <h5 class="card-title" style="color: #0E8BFF;font-weight: 500; font-size: 24px;">Feedback Pasien</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center h-75 shadow p-3 mb-5" style="background-color: white; border:0px; border-radius: 30px;">
        <img src="{{ asset('assets/style/images/resep-dokter.png') }}" class="card-img-top w-25 mx-auto d-block mt-3" alt="">
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
                      <h4 class="user-profile-header">Artikel</h4>
                          <div class="info-post">
                            
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
                      <h4 class="user-profile-header">Jadwal konsultasi bersama pasien hari ini</h4>
                          <div class="info-post">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-2">
                                  <img src="{{ asset('assets/style/images/user-pict.png') }}" class="w-75 mx-auto d-block" alt="">
                                </div>
                                <div class="col-3 text-start my-auto d-block">
                                  <p style="font-weight: 500; font-size: 30px">Muhammad Syahid</p>
                                  <p style="font-weight: 400; font-size: 26px">Konsultasi Online</p>
                                </div>
                                <div class="col-7">
                                  <div class="card text-start border-0">
                                    <div class="card-body" style="background-color: #EDEAEA; border-radius: 30px">
                                      <div class="row mt-3">
                                        <div class="col px-5">
                                            <div class="row">
                                                <p style="font-weight: 300; font-size: 26px;color:black"> <img src="{{ asset('assets/style/images/date-user.png') }}" alt="" style="height: 53px; width: 50.11px; margin-right:12px"> Jumat, 25 Maret 2022</p>
                                            </div>
                                            <div class="row">
                                                <p style="font-weight: 300; font-size: 26px;color:black"> <img src="{{ asset('assets/style/images/time-user.png') }}" alt="" style="height: 56px; width: 59.51px; margin-right:12px"> 11.00 - 13.00 WIB</p>
                                            </div>
                                        </div>
                                        <div class="col px-5">
                                            <div class="row">
                                                <p style="font-weight: 300; font-size: 26px; color:black"> <img src="{{ asset('assets/style/images/chat-user.png') }}" alt="" style="height: 46px; width: 52.26px; margin-right:12px"> Hubungi Pasien</p>
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
                                  <div class="card text-center h-100 bg-transparent" style="border:0px">
                                    <img src="{{ asset('assets/style/images/pasien-dokter.png') }}" class="card-img-top w-50 p-3 mx-auto d-block h-100" alt="">
                                    <div class="card-body">
                                      <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Pasien</p>
                                      <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">325</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card text-center h-100 bg-transparent" style="border:0px">
                                    <img src="{{ asset('assets/style/images/konsultasi-dokter.png') }}" class="card-img-top w-50 p-3 mx-auto d-block h-100" alt="">
                                    <div class="card-body">
                                      <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Konsultasi</p>
                                      <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">35</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card text-center h-100 bg-transparent" style="border:0px">
                                    <img src="{{ asset('assets/style/images/pemberianresep-dokter.png') }}" class="card-img-top w-50 p-3 mx-auto d-block h-100" alt="">
                                    <div class="card-body">
                                      <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Resep</p>
                                      <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">45</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card text-center h-100 bg-transparent" style="border:0px">
                                    <img src="{{ asset('assets/style/images/checkup-dokter.png') }}" class="card-img-top w-50 p-3 mx-auto d-block h-100" alt="">
                                    <div class="card-body">
                                      <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Check-up</p>
                                      <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">35</p>
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