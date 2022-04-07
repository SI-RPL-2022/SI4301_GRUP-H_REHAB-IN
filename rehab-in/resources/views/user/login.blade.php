@extends('layouts.reg')
@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                  <div class="img-register">
                        <img src="{{ asset('assets/style/images/login-img.png') }}" alt="Logo login">
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="regist-caption">
                            <h4 style="font-weight: bold;">LOGIN</h4>
                    </div>
                      <fieldset>
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Password" autocomplete="on">
                      </fieldset>
                    </div>

                    <div class="col-lg-6">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">LOGIN</button>
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
