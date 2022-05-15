@extends('layouts.homepage')

@section('main')

<div class="container">
<div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="row">
              <div class="col-lg-12">
                <h6>Rehabilitasi di Rehab-IN yuk!</h6>
                <h2>Rehab-IN mempermudah anda untuk mendapatkan layanan rehabililtasi</h2>
                <p style="color: black;">Dapatkan pelayanan rehabilitasi, konsultasi, serta reservasi tercepat melalui Rehab-IN. Jangan sampai ketinggalan juga untuk artikel dan tips kesehatan ter-update setiap harinya.</p>
              </div>

              <div class="col-lg-12">
                <div class="border-first-button-join-us scroll-to-section">
                  <a href="{{ route('register') }}" target="_blank">Bergabung Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src=" {{ asset('assets/style/images/img-front-left.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="portfolio" class="our-tips section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h6 style="color: #fff">Tips Kesehatan</h6>
          <h4 style="width:100%">Hidup lebih sehat dengan<em style="color: #fff"> Rehab-IN</em></h4>
          <div class="line-dec"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
    <div class="row">
      <div class="col-lg-12">

        @if (count($tips) < 1)

        <div id="contact content" class="container-fluid">
          <div class="row">
              <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                  <form id="contact" action="" method="post">
                      <div class="user-pict-notes" style="padding: 30px 2px 20px 520px;">
                          <div class="row">
                              <div class="col-lg-12">
                                  <h6 class="user-profile-header" style="text-align: left;">Tips kesehatan belum tersedia</h6>
                                      <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">

                                        
                                        <img src="{{asset('assets/style/images/stars.png')}}" alt="" style="width:35%; text-elign:center;" />

                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>

        @else

        <div class="loop owl-carousel">
          @foreach ($tips as $item)
          <div class="item">
            <a href="/tips/{{$item->id}}">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('images/'.$item->pic)}}" alt="" style="min-height: 248px;"/>
              </div>
              <div class="down-content">
                <h4 style="font-size: 15px">{{$item->judul}}</h4>
                {{-- <span>Marketing</span> --}}
              </div>
            </div>
            </a>
          </div>
          @endforeach
        </div>
        @endif
      </div>
    </div>
  </div>
</div>

<div id="portfolio" class="our-tips section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h6 style="color: #fff">Artikel Kesehatan</h6>
          <h4 style="width:100%">Artikel ter-update setiap harinya bersama<em style="color: #fff"> Rehab-IN</em></h4>
          <div class="line-dec"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
    <div class="row">
      <div class="col-lg-12">
        @if (count($artikel) < 1)

        <div id="contact content" class="container-fluid">
          <div class="row">
              <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                  <form id="contact" action="" method="post">
                      <div class="user-pict-notes" style="padding: 30px 2px 20px 520px;">
                          <div class="row">
                              <div class="col-lg-12">
                                  <h6 class="user-profile-header" style="text-align: left; margin-left:35px;">Artikel belum tersedia</h6>
                                      <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">

                                        
                                        <img src="{{asset('assets/style/images/hartakarun.png')}}" alt="" style="width:35%; text-elign:center;" />

                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>

        @else
        <div class="loop owl-carousel">
         


          @foreach ($artikel as $item)
          <div class="item">
            <a href="/article/{{$item->id}}">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('images/'.$item->image_art)}}" alt="" style="min-height: 248px;"/>
              </div>
              <div class="down-content">
                <h4 style="font-size: 15px">{{$item->judul_artikel}}</h4>
                {{-- <span>Marketing</span> --}}
              </div>
            </div>
            </a>
          </div>
          @endforeach

          
        </div>
        @endif
      </div>
    </div>
  </div>

</div>

@endsection
