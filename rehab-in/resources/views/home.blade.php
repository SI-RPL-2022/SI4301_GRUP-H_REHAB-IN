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
                <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
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
        <div class="loop owl-carousel">
          @foreach ($tips as $item)
          <div class="item">
            <a href="{{ route('tips') }}">
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
        <div class="loop owl-carousel">
          @foreach ($artikel as $item)
          <div class="item">
            <a href="{{ route('tips') }}">
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
      </div>
    </div>
  </div>

</div>

@endsection
