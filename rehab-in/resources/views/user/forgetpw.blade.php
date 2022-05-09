@extends('layouts.reg')

@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ route('ForgetPasswordPost') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                  <div class="img-forgetpw">
                  <img src="{{ asset('assets/style/images/img-forgetpw.png') }}" alt="">
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="regist-caption">
                            <h4 style="font-weight: bold;">Lupa Password</h4>
                        <p >
                            Silahkan masukan email anda. Anda akan mendapatkan link untuk merubah password anda.
                        </p>
                    </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                              {{ Session::get('message') }}
                              <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                            </div>
                        @endif
                      <fieldset>
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete="on" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </fieldset>

                    </div>

                    <div class="col-lg-6">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Kirim</button>
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
