@extends('layouts.homepage')

@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contactus" action="/about/add" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('assets/style/images/contact-dec-v3.png') }}" alt="">

                </div>
              </div>
              <div class="col-lg-12">
                <div class="fill-form-contactus">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/style/images/phone-icon.png') }}" alt="">
                          <a href="#">010-020-0340</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/style/images/email-icon.png') }}" alt="">
                          <a href="#">rehabin@email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/style/images/location-icon.png') }}" alt="">
                          <a href="#">Bandung, Jawa Barat</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="guest_name" id="guest_name" placeholder="Nama Anda" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Anda">
                      </fieldset>
                      <fieldset>
                        <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="messages" type="text" class="form-control" id="messages" placeholder="Message" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button">Kirim</button>
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
