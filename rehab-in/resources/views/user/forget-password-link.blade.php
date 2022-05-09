@extends('layouts.reg')

@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ route('ResetPasswordPost') }}" method="post">
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
                            <h4 style="font-weight: bold;">Reset Password</h4>
                            <p>Silahkan mengganti password anda dan ingat baik baik password yang telah diganti.</p>
                            @if (session('Failure'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  {{ (session('Failure')) }}
                                  <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                                </div>
                            @endif
                            @if (session('email'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  {{ (session('email')) }}
                                  <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                                </div>
                            @endif
                          </div>
                        <fieldset>
                            <input type="text" name="token" id="token" value="{{ $token->token }}" autocomplete="on" hidden required>
                        </fieldset>
                        <fieldset>
                            <input type="email" name="email" id="email" placeholder="Masukan email kembali" value="{{ $email->email}}" autocomplete="on" disabled required>
                            @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password" id="password" placeholder="Masukan password baru" autocomplete="on" required>
                            @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmation Passowrd" autocomplete="on" required>
                            @error('password_confirmation')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
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
