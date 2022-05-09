@extends('layouts.reg')

@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ route('ResetPasswordPost') }}" method="post">
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
                            <h4 style="font-weight: bold;">Reset Password</h4>
                        <p >
                            Silahkan mengganti password anda dan ingat baik baik password yang telah diganti.
                        </p>
                    </div>
                        <fieldset>
                            <input type="text" name="token" id="token" placeholder="Masukan email kembali" value="{{ $token->token }}" autocomplete="on" disabled required>
                        </fieldset>
                        <fieldset>
                            <input type="email" name="email" id="email" placeholder="Masukan email kembali" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password" id="password" placeholder="Masukan password baru" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmation Passowrd" autocomplete="on" required>
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
