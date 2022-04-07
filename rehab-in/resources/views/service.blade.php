@extends('layouts.homepage')

@section('main')

<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>Layanan Kami</h6>
                    <h4>Layanan Kami <em>Saat Ini</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="service-icon">
                    <div class="row">
                        <div class="col-lg-4">
                            <img style="width: 100%; height:auto; border-radius:30px;" src="{{ asset('assets/style/images/service1.png') }}" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%; height:auto; border-radius:30px;" src="{{ asset('assets/style/images/service3.png') }}" alt="">
                        </div>
                        <div class="col-lg-4">
                          <img style="width: 100%; height:auto; border-radius:30px;" src="{{ asset('assets/style/images/service2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
